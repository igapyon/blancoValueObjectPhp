/*
 * blanco Framework
 * Copyright (C) 2004-2006 IGA Tosiki
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 */
package blanco.valueobjectphp;

import java.io.File;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import blanco.cg.BlancoCgObjectFactory;
import blanco.cg.BlancoCgSupportedLang;
import blanco.cg.BlancoCgTransformer;
import blanco.cg.transformer.BlancoCgTransformerFactory;
import blanco.cg.util.BlancoCgLineUtil;
import blanco.cg.valueobject.*;
import blanco.commons.util.BlancoJavaSourceUtil;
import blanco.commons.util.BlancoNameAdjuster;
import blanco.commons.util.BlancoStringUtil;
import blanco.valueobjectphp.resourcebundle.BlancoValueObjectPhpResourceBundle;
import blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure;
import blanco.valueobjectphp.valueobject.BlancoValueObjectPhpStructure;
import blanco.xml.bind.BlancoXmlBindingUtil;
import blanco.xml.bind.BlancoXmlUnmarshaller;
import blanco.xml.bind.valueobject.BlancoXmlDocument;
import blanco.xml.bind.valueobject.BlancoXmlElement;

/**
 * 「メッセージ定義書」Excel様式からメッセージを処理するクラス・ソースコードを生成。
 * 
 * このクラスは、中間XMLファイルからソースコードを自動生成する機能を担います。
 * 
 * @author IGA Tosiki
 */
public class BlancoValueObjectPhpXml2SourceFile {
    /**
     * このプロダクトのリソースバンドルへのアクセスオブジェクト。
     */
    private final BlancoValueObjectPhpResourceBundle fBundle = new BlancoValueObjectPhpResourceBundle();

    /**
     * 出力対象となるプログラミング言語。
     */
    private int fTargetLang = BlancoCgSupportedLang.PHP;

    /**
     * 内部的に利用するblancoCg用ファクトリ。
     */
    private BlancoCgObjectFactory fCgFactory = null;

    /**
     * 内部的に利用するblancoCg用ソースファイル情報。
     */
    private BlancoCgSourceFile fCgSourceFile = null;

    /**
     * 内部的に利用するblancoCg用クラス情報。
     */
    private BlancoCgClass fCgClass = null;

    /**
     * フィールド名やメソッド名の名前変形を行うかどうか。
     */
    private boolean fNameAdjust = true;

    /**
     * 自動生成するソースファイルの文字エンコーディング。
     */
    private String fEncoding = null;

    public void setEncoding(final String argEncoding) {
        fEncoding = argEncoding;
    }

    /**
     * 中間XMLファイルからソースコードを自動生成します。
     * 
     * @param argMetaXmlSourceFile
     *            メタ情報が含まれているXMLファイル。
     * @param argNameAdjust
     *            出力対象プログラミング言語。
     * @param argDirectoryTarget
     *            ソースコード生成先ディレクトリ (/mainを除く部分を指定します)。
     * @param argNameAdjust
     *            名前変形を行うかどうか。
     * @throws IOException
     *             入出力例外が発生した場合。
     */
    public void process(final File argMetaXmlSourceFile,
            final boolean argNameAdjust, final File argDirectoryTarget)
            throws IOException {
        fNameAdjust = argNameAdjust;

        // メタ情報を解析してバリューオブジェクトのツリーを取得します。
        final BlancoXmlDocument documentMeta = new BlancoXmlUnmarshaller()
                .unmarshal(argMetaXmlSourceFile);

        // ルートエレメントを取得します。
        final BlancoXmlElement elementRoot = BlancoXmlBindingUtil
                .getDocumentElement(documentMeta);
        if (elementRoot == null) {
            // ルートエレメントが無い場合には処理中断します。
            return;
        }

        // sheet(Excelシート)のリストを取得します。
        final List<BlancoXmlElement> listSheet = BlancoXmlBindingUtil
                .getElementsByTagName(elementRoot, "sheet");
        final int sizeListSheet = listSheet.size();
        for (int index = 0; index < sizeListSheet; index++) {
            // おのおののシートを処理します。
            final BlancoXmlElement elementSheet = (BlancoXmlElement) listSheet
                    .get(index);

            // 共通情報を取得します。
            final BlancoXmlElement elementCommon = BlancoXmlBindingUtil
                    .getElement(elementSheet, fBundle
                            .getMeta2xmlElementCommon());
            if (elementCommon == null) {
                // commonが無い場合には、このシートの処理をスキップします。
                continue;
            }

            final String name = BlancoXmlBindingUtil.getTextContent(
                    elementCommon, "name");
            if (BlancoStringUtil.null2Blank(name).trim().length() == 0) {
                // nameが空の場合には処理をスキップします。
                continue;
            }

            // 継承情報を取得します。
            final BlancoXmlElement elementExtends = BlancoXmlBindingUtil
                    .getElement(elementSheet, fBundle
                            .getMeta2xmlElementExtends());

            // 一覧情報を取得します。
            final BlancoXmlElement elementList = BlancoXmlBindingUtil
                    .getElement(elementSheet, fBundle.getMeta2xmlElementList());

            // シートから詳細な情報を取得します。
            final BlancoValueObjectPhpStructure processStructure = parseSheet(
                    elementCommon, elementExtends, elementList, argDirectoryTarget);

            if (processStructure != null) {
                // メタ情報の解析結果をもとにソースコード自動生成を実行します。
                process(processStructure, argDirectoryTarget);
            }
        }
    }

    /**
     * sheetエレメントを展開します。
     * 
     * @param argElementCommon
     *            現在処理しているCommonノード。
     * @param argElementExtends
     * @param argElementList
     *            現在処理しているListノード。
     * @param argDirectoryTarget
     *            ソースコードの出力先フォルダ。
     * @return 収集されたメタ情報構造データ。
     */
    private BlancoValueObjectPhpStructure parseSheet(
            final BlancoXmlElement argElementCommon,
            BlancoXmlElement argElementExtends, final BlancoXmlElement argElementList, final File argDirectoryTarget) {

        final BlancoValueObjectPhpStructure processStructure = new BlancoValueObjectPhpStructure();

        processStructure.setName(BlancoXmlBindingUtil.getTextContent(
                argElementCommon, "name"));
        processStructure.setNamespace(BlancoXmlBindingUtil.getTextContent(
                argElementCommon, "namespace"));
        processStructure.setPackage(BlancoXmlBindingUtil.getTextContent(
                argElementCommon, "package"));

//        if (BlancoStringUtil.null2Blank(processStructure.getPackage()).trim()
//                .length() == 0) {
//            throw new IllegalArgumentException(fBundle
//                    .getXml2sourceFileErr001(processStructure.getName()));
//        }

        if (BlancoXmlBindingUtil
                .getTextContent(argElementCommon, "description") != null) {
            processStructure.setDescription(BlancoXmlBindingUtil
                    .getTextContent(argElementCommon, "description"));
        }

        if (BlancoXmlBindingUtil.getTextContent(argElementCommon,
                "fileDescription") != null) {
            processStructure.setFileDescription(BlancoXmlBindingUtil
                    .getTextContent(argElementCommon, "fileDescription"));
        }

        if (argElementExtends != null) {
            String name = BlancoXmlBindingUtil
                    .getTextContent(argElementExtends, "name");
            String mypackage = BlancoXmlBindingUtil
                    .getTextContent(argElementExtends, "package");
            if (name != null) {
                String namespace = name;
                if (mypackage != null) {
                    namespace = mypackage + "\\" + namespace;
                }
                processStructure.setExtends(namespace);
            }
        }

        if (argElementList == null) {
            return null;
        }

        // 一覧の内容を取得します。
        final List<BlancoXmlElement> listField = BlancoXmlBindingUtil
                .getElementsByTagName(argElementList, "field");
        for (int indexField = 0; indexField < listField.size(); indexField++) {
            final Object nodeField = listField.get(indexField);

            if (nodeField instanceof BlancoXmlElement == false) {
                continue;
            }

            final BlancoXmlElement elementField = (BlancoXmlElement) nodeField;
            BlancoValueObjectPhpFieldStructure field = new BlancoValueObjectPhpFieldStructure();
            field
                    .setNo(BlancoXmlBindingUtil.getTextContent(elementField,
                            "no"));

            field.setName(BlancoXmlBindingUtil.getTextContent(elementField,
                    "name"));
            if (BlancoStringUtil.null2Blank(field.getName()).length() == 0) {
                continue;
            }

            // 既に同じ内容が登録されていないかどうかのチェック。
            for (int indexPast = 0; indexPast < processStructure.getListField()
                    .size(); indexPast++) {
                final BlancoValueObjectPhpFieldStructure fieldPast = processStructure
                        .getListField().get(indexPast);
                if (fieldPast.getName().equals(field.getName())) {
                    throw new IllegalArgumentException(
                            fBundle.getXml2sourceFileErr003(processStructure
                                    .getName(), field.getName()));
                }
            }

            field.setType(BlancoXmlBindingUtil.getTextContent(elementField,
                    "type"));
            if (BlancoStringUtil.null2Blank(field.getType()).length() == 0) {
                // ここで異常終了。
                continue;
            }

            field.setGeneric(BlancoXmlBindingUtil.getTextContent(elementField,
                    "generic"));

            /* debug */
            if (BlancoStringUtil.null2Blank(field.getGeneric()).length() != 0) {
                System.out.println("/* tueda */ generic = " + field.getGeneric());
            }

            String strFieldRequired = BlancoXmlBindingUtil.getTextContent(
                    elementField, "fieldRequired");
            field.setFieldRequired("YES".equalsIgnoreCase(strFieldRequired));

            field.setDefault(BlancoXmlBindingUtil.getTextContent(elementField,
                    "default"));

            try {
                String strMinLength = BlancoXmlBindingUtil.getTextContent(
                        elementField, "minLength");
                field.setMinLength(Integer.parseInt(strMinLength));

                /* debug */
                if (BlancoStringUtil.null2Blank(strMinLength).length() != 0) {
                    System.out.println("/* ama */ minLength = " + field.getMinLength());
                }

                String strMaxLength = BlancoXmlBindingUtil.getTextContent(
                        elementField, "maxLength");
                field.setMaxLength(Integer.parseInt(strMaxLength));
            } catch (NumberFormatException e) {
                // 値がセットされていなかったり数値でなかった場合は無視
            }

            field.setMinInclusive(BlancoXmlBindingUtil.getTextContent(
                    elementField, "minInclusive"));
            field.setMaxInclusive(BlancoXmlBindingUtil.getTextContent(
                    elementField, "maxInclusive"));

            field.setPattern(BlancoXmlBindingUtil.getTextContent(
                    elementField, "pattern"));

            field.setDescription(BlancoXmlBindingUtil.getTextContent(
                    elementField, "description"));

            processStructure.getListField().add(field);
        }

        return processStructure;
    }

    /**
     * 収集された情報を元に、ソースコードを自動生成します。
     * 
     * @param argProcessStructure
     *            メタファイルから収集できた処理構造データ。
     * @param argDirectoryTarget
     *            ソースコードの出力先フォルダ。
     */
    public void process(
            final BlancoValueObjectPhpStructure argProcessStructure,
            final File argDirectoryTarget) {

        // 従来と互換性を持たせるため、/mainサブフォルダに出力します。
        final File fileBlancoMain = new File(argDirectoryTarget
                .getAbsolutePath()
                + "/main");

        fCgFactory = BlancoCgObjectFactory.getInstance();
        fCgSourceFile = fCgFactory.createSourceFile(argProcessStructure
                .getPackage(), "このソースコードは blanco Frameworkによって自動生成されています。");
        fCgSourceFile.setEncoding(fEncoding);

        fCgClass = fCgFactory.createClass(argProcessStructure.getName(),
                BlancoStringUtil.null2Blank(argProcessStructure
                        .getDescription()));



        String superClass = argProcessStructure.getExtends();
        if (superClass != null && superClass.length() != 0) {
            // 指定されたクラスを継承
            BlancoCgType fCgType = new BlancoCgType();
            fCgType.setName(superClass);
            fCgClass.setExtendClassList(new ArrayList());
            fCgClass.getExtendClassList().add(fCgType);
        }

        fCgSourceFile.getClassList().add(fCgClass);

        if (argProcessStructure.getFileDescription() != null) {
            fCgSourceFile.setDescription(argProcessStructure
                    .getFileDescription());
        }

        expandValueObject(argProcessStructure);

        // required 文を出力しない ... 将来的には xls で指定するように？
        fCgSourceFile.setIsImport(false);

        BlancoCgTransformerFactory.getSourceTransformer(fTargetLang).transform(
                fCgSourceFile, fileBlancoMain);
    }

    /**
     * バリューオブジェクトを展開します。
     * 
     * @param argProcessStructure
     *            メタファイルから収集できた処理構造データ。
     */
    private void expandValueObject(
            final BlancoValueObjectPhpStructure argProcessStructure) {

        for (int indexField = 0; indexField < argProcessStructure
                .getListField().size(); indexField++) {
            final BlancoValueObjectPhpFieldStructure fieldLook = argProcessStructure
                    .getListField().get(indexField);

            expandField(argProcessStructure, fieldLook);

            expandMethodSet(argProcessStructure, fieldLook);

            expandMethodGet(argProcessStructure, fieldLook);

            expandMethodType(argProcessStructure, fieldLook);

            expandMethodGeneric(argProcessStructure, fieldLook);
        }

        //バリデート関係
        expandMethodValidate(argProcessStructure);


        expandMethodToString(argProcessStructure);
    }

    /**
     * バリデートフィールドを展開します。
     *
     */
    private void expandMethodValidate(
            final BlancoValueObjectPhpStructure argProcessStructure) {

        String strMinLength = "";
        String strMaxLength = "";
        String strMinInclusive = "";
        String strMaxInclusive = "";
        String strPattern = "";
        String strFieldRequired = "";

        boolean isMinLengthLoop = false;
        boolean isMaxLengthLoop = false;
        boolean isMinInclusiveLoop = false;
        boolean isMaxInclusiveLoop = false;
        boolean isPatternLoop = false;
        boolean isFieldRequiredLoop = false;

        String strIndentBlank = "        ";

        for (int indexField = 0; indexField < argProcessStructure
                .getListField().size(); indexField++) {
            final BlancoValueObjectPhpFieldStructure fieldLook = argProcessStructure
                    .getListField().get(indexField);

            String fieldName = fieldLook.getName();
            if (fNameAdjust) {
                fieldName = BlancoNameAdjuster.toParameterName(fieldName);

            }

            //System.out.println("ooq  name = " +  fieldName);

            //Min長 後に出力する為、保持します。
            if (fieldLook.getMinLength() != null) {
                if (isMinLengthLoop) {
                    strMinLength += ",\n" + strIndentBlank;
                }
                strMinLength += "'" + fieldName + "' => '" + fieldLook.getMinLength() + "'";
                isMinLengthLoop = true;
            }

            //Max長 後に出力する為、保持します。
            if (fieldLook.getMaxLength() != null) {
                if (isMaxLengthLoop) {
                    strMaxLength += ",\n" + strIndentBlank;
                }
                strMaxLength += "'" + fieldName + "' => '" + fieldLook.getMaxLength() + "'";
                isMaxLengthLoop = true;
            }

            //Min値 後に出力する為、保持します。
            if (fieldLook.getMinInclusive() != null) {
                if (isMinInclusiveLoop) {
                    strMinInclusive += ",\n" + strIndentBlank;
                }
                strMinInclusive += "'" + fieldName + "' => " + fieldLook.getMinInclusive();
                isMinInclusiveLoop = true;
            }

            //Max値 後に出力する為、保持します。
            if (fieldLook.getMaxInclusive() != null) {
                if (isMaxInclusiveLoop) {
                    strMaxInclusive += ",\n" + strIndentBlank;
                }
                strMaxInclusive += "'" + fieldName + "' => " + fieldLook.getMaxInclusive();
                isMaxInclusiveLoop = true;
            }

            //正規表現 後に出力する為、保持します。
            if (fieldLook.getPattern() != null) {
                if (isPatternLoop) {
                    strPattern += ",\n" + strIndentBlank;
                }
                strPattern += "'" + fieldName + "' => '" + fieldLook.getPattern()  + "'";
                isPatternLoop = true;
            }

            //必須 後に出力する為、保持します。
            if (fieldLook.getFieldRequired() != null) {
                if (fieldLook.getFieldRequired() == true){
                    if (isFieldRequiredLoop) {
                        strFieldRequired += ",\n" + strIndentBlank;
                    }
                    strFieldRequired += "'" + fieldName + "' => 'YES'";
                    isFieldRequiredLoop = true;
                }
            }

        }

        if(strMinLength != ""){
            createValidateMethod(
                    strMinLength,
                    "arrayMinLength",
                    fBundle.getXml2sourceFileVgetarrayminlengthDescription(),
                    BlancoValueObjectPhpConstants.API_VGETARRAYMINLENGTH_METHOD,
                    fBundle.getXml2sourceFileVgetarrayminlengthDescription()
            );
        }

        if(strMaxLength != ""){
            createValidateMethod(
                    strMaxLength,
                    "arrayMaxLength",
                    fBundle.getXml2sourceFileVgetarraymaxlengthDescription(),
                    BlancoValueObjectPhpConstants.API_VGETARRAYMAXLENGTH_METHOD,
                    fBundle.getXml2sourceFileVgetarraymaxlengthDescription()
            );
        }

        if(strMinInclusive != ""){
            createValidateMethod(
                    strMinInclusive,
                    "arrayMinInclusive",
                    fBundle.getXml2sourceFileVgetarraymininclusiveDescription(),
                    BlancoValueObjectPhpConstants.API_VGETARRAYMININCLUSIVE_METHOD,
                    fBundle.getXml2sourceFileVgetarraymininclusiveDescription()
            );
        }

        if(strMaxInclusive != ""){
            createValidateMethod(
                    strMaxInclusive,
                    "arrayMaxInclusive",
                    fBundle.getXml2sourceFileVgetarraymaxinclusiveDescription(),
                    BlancoValueObjectPhpConstants.API_VGETARRAYMAXINCLUSIVE_METHOD,
                    fBundle.getXml2sourceFileVgetarraymaxinclusiveDescription()
            );
        }

        if(strPattern != ""){
            createValidateMethod(
                    strPattern,
                    "arrayPattern",
                    fBundle.getXml2sourceFileVgetarraypattarnDescription(),
                    BlancoValueObjectPhpConstants.API_VGETARRAYPATTARN_METHOD,
                    fBundle.getXml2sourceFileVgetarraypattarnDescription()
            );
        }

        if(strFieldRequired != ""){
            createValidateMethod(
                    strFieldRequired,
                    "arrayFieldRequired",
                    fBundle.getXml2sourceFileVgetarrayfieldrequiredDescription(),
                    BlancoValueObjectPhpConstants.API_VGETARRAYFIELDREQUIRED_METHOD,
                    fBundle.getXml2sourceFileVgetarrayfieldrequiredDescription()
            );
        }

    }


    /**
     * バリデートフィールドを展開します。
     *
     * @param strStackValue
     * @param argName
     * @param argFieldDescription
     * @param methodNam
     * @param strStackValue
     */
    private void createValidateMethod(
            String strStackValue,
            String argName,
            String argFieldDescription,
            String methodNam,
            String argMethodDescription) {

        String strIndentBlank = "        ";

        //プロパティ部分
        final BlancoCgField cgField = fCgFactory.createField(argName ,
                "array", "");
        fCgClass.getFieldList().add(cgField);
        cgField.setAccess("protected");

        cgField.getLangDoc().getDescriptionList().add(
                argFieldDescription);

        cgField.setDefault("array(\n" + strIndentBlank + strStackValue +")");

        //メソッド部分
        final BlancoCgMethod cgMethod = fCgFactory.createMethod(methodNam,argMethodDescription
        );
        fCgClass.getMethodList().add(cgMethod);
        cgMethod.setAccess("public");

        cgMethod.getLangDoc().getDescriptionList().add(
                fBundle.getXml2sourceFileGetLangdoc02("array"));

        cgMethod.setReturn(fCgFactory.createReturn("array", fBundle.getXml2sourceFileGetReturnLangdoc(methodNam)));

        // メソッドの実装
        final List<String> listLine = cgMethod.getLineList();

        listLine
                .add("return "
                        + BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                        + "this->" + argName
                        + BlancoCgLineUtil.getTerminator(fTargetLang));

    }

    /**
     * フィールドを展開します。
     * 
     * @param argProcessStructure
     */
    private void expandField(
            final BlancoValueObjectPhpStructure argProcessStructure,
            final BlancoValueObjectPhpFieldStructure fieldLook) {
        String fieldName = fieldLook.getName();
        if (fNameAdjust) {
            fieldName = BlancoNameAdjuster.toClassName(fieldName);
        }

//        /* tueda */
//        System.out.println("/* tueda */ field : " + fieldName + ", type : " + fieldLook.getType());

        final BlancoCgField cgField = fCgFactory.createField("f" + fieldName,
                fieldLook.getType(), "");
        fCgClass.getFieldList().add(cgField);
        cgField.setAccess("private");

        cgField.setDescription(fBundle.getXml2sourceFileFieldName(fieldLook
                .getName()));
        cgField.getLangDoc().getDescriptionList().add(
                fBundle.getXml2sourceFileFieldType(fieldLook.getType()));
        if (BlancoStringUtil.null2Blank(fieldLook.getDescription()).length() > 0) {
            cgField.getLangDoc().getDescriptionList().add(
                    fieldLook.getDescription());
        }

        if (fieldLook.getDefault() != null) {
            if (fieldLook.getType().equals("string")) {
                // クオートを付与します。
                cgField.setDefault(BlancoCgLineUtil
                        .getStringLiteralEnclosure(fTargetLang)
                        + BlancoJavaSourceUtil
                                .escapeStringAsJavaSource(fieldLook
                                        .getDefault())
                        + BlancoCgLineUtil
                                .getStringLiteralEnclosure(fTargetLang));
            } else if (fieldLook.getType().equals("boolean")
                    || fieldLook.getType().equals("integer")
                    || fieldLook.getType().equals("float")
                    || fieldLook.getType().equals("double")) {
                cgField.setDefault(fieldLook.getDefault());
            } else {
                throw new IllegalArgumentException(fBundle
                        .getXml2sourceFileErr006(argProcessStructure.getName(),
                                fieldLook.getName(), fieldLook.getDefault(),
                                fieldLook.getType()));
            }
        }
    }

    /**
     * setメソッドを展開します。
     * 
     * @param argProcessStructure
     */
    private void expandMethodSet(
            final BlancoValueObjectPhpStructure argProcessStructure,
            final BlancoValueObjectPhpFieldStructure fieldLook) {
        String fieldName = fieldLook.getName();
        if (fNameAdjust) {
            fieldName = BlancoNameAdjuster.toClassName(fieldName);
        }

        final BlancoCgMethod cgMethod = fCgFactory.createMethod("set"
                + fieldName, fBundle.getXml2sourceFileSetLangdoc01(fieldLook
                .getName()));
        fCgClass.getMethodList().add(cgMethod);
        cgMethod.setAccess("public");
        cgMethod.getLangDoc().getDescriptionList().add(
                fBundle.getXml2sourceFileSetLangdoc02(fieldLook.getType()));

        if (BlancoStringUtil.null2Blank(fieldLook.getDescription()).length() > 0) {
            cgMethod.getLangDoc().getDescriptionList().add(
                    fieldLook.getDescription());
        }

        cgMethod.getParameterList().add(
                fCgFactory.createParameter("arg" + fieldName, fieldLook
                        .getType(), fBundle
                        .getXml2sourceFileSetArgLangdoc(fieldLook.getName())));

        // メソッドの実装
        final List<String> listLine = cgMethod.getLineList();

        listLine.add(BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                + "this->f" + fieldName + " = "
                + BlancoCgLineUtil.getVariablePrefix(fTargetLang) + "arg"
                + fieldName + BlancoCgLineUtil.getTerminator(fTargetLang));
    }

    /**
     * getメソッドを展開します。
     * 
     * @param argProcessStructure
     */
    private void expandMethodGet(
            final BlancoValueObjectPhpStructure argProcessStructure,
            final BlancoValueObjectPhpFieldStructure fieldLook) {
        String fieldName = fieldLook.getName();
        if (fNameAdjust) {
            fieldName = BlancoNameAdjuster.toClassName(fieldName);
        }

        final BlancoCgMethod cgMethod = fCgFactory.createMethod("get"
                + fieldName, fBundle.getXml2sourceFileGetLangdoc01(fieldLook
                .getName()));
        fCgClass.getMethodList().add(cgMethod);
        cgMethod.setAccess("public");

        cgMethod.getLangDoc().getDescriptionList().add(
                fBundle.getXml2sourceFileGetLangdoc02(fieldLook.getType()));

        cgMethod.setReturn(fCgFactory.createReturn(fieldLook.getType(), fBundle
                .getXml2sourceFileGetReturnLangdoc(fieldLook.getName())));

        if (fieldLook.getDefault() != null) {
            cgMethod.getLangDoc().getDescriptionList().add(
                    fBundle.getXml2sourceFileGetArgLangdoc(fieldLook
                            .getDefault()));
        }

        if (BlancoStringUtil.null2Blank(fieldLook.getDescription()).length() > 0) {
            cgMethod.getLangDoc().getDescriptionList().add(
                    fieldLook.getDescription());
        }

        // メソッドの実装
        final List<String> listLine = cgMethod.getLineList();

        listLine
                .add("return "
                        + BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                        + "this->" + "f" + fieldName
                        + BlancoCgLineUtil.getTerminator(fTargetLang));
    }

    /**
     * typeメソッドを展開します。
     *
     * @param argProcessStructure
     */
    private void expandMethodType(
            final BlancoValueObjectPhpStructure argProcessStructure,
            final BlancoValueObjectPhpFieldStructure fieldLook) {
        String fieldName = fieldLook.getName();
        if (fNameAdjust) {
            fieldName = BlancoNameAdjuster.toClassName(fieldName);
        }

        final BlancoCgMethod cgMethod = fCgFactory.createMethod("type"
                + fieldName, fBundle.getXml2sourceFileTypeLangdoc01(fieldLook
                .getName()));
        fCgClass.getMethodList().add(cgMethod);
        cgMethod.setAccess("public");
        cgMethod.setStatic(true);

        cgMethod.getLangDoc().getDescriptionList().add(
                fBundle.getXml2sourceFileTypeLangdoc02(fieldLook.getType()));

        cgMethod.setReturn(fCgFactory.createReturn(fieldLook.getType(), fBundle
                .getXml2sourceFileTypeReturnLangdoc(fieldLook.getName())));

        if (fieldLook.getDefault() != null) {
            cgMethod.getLangDoc().getDescriptionList().add(
                    fBundle.getXml2sourceFileTypeArgLangdoc(fieldLook
                            .getDefault()));
        }

        if (BlancoStringUtil.null2Blank(fieldLook.getDescription()).length() > 0) {
            cgMethod.getLangDoc().getDescriptionList().add(
                    fieldLook.getDescription());
        }

        // メソッドの実装
        final List<String> listLine = cgMethod.getLineList();

        listLine
                .add("return "
                        + "\"" + fieldLook.getType() + "\""
                        + BlancoCgLineUtil.getTerminator(fTargetLang));
    }

    /**
     * Genericメソッドを展開します
     * @param argProcessStructure
     * @param fieldLook
     */
    private void expandMethodGeneric(
            final BlancoValueObjectPhpStructure argProcessStructure,
            final BlancoValueObjectPhpFieldStructure fieldLook) {
        String fieldName = fieldLook.getName();
        String fieldGeneric = fieldLook.getGeneric();
        if (BlancoStringUtil.null2Blank(fieldGeneric).length() == 0) {
            return;
        }

        if (fNameAdjust) {
            fieldName = BlancoNameAdjuster.toClassName(fieldName);
        }

        final BlancoCgMethod cgMethod = fCgFactory.createMethod("generic"
                + fieldName, fBundle.getXml2sourceFileTypeLangdoc01(fieldLook
                .getName()));
        fCgClass.getMethodList().add(cgMethod);
        cgMethod.setAccess("public");
        cgMethod.setStatic(true);

        cgMethod.getLangDoc().getDescriptionList().add(
                fBundle.getXml2sourceFileTypeLangdoc02(fieldGeneric));

        cgMethod.setReturn(fCgFactory.createReturn(fieldGeneric, fBundle
                .getXml2sourceFileTypeReturnLangdoc(fieldLook.getName())));

        if (fieldLook.getDefault() != null) {
            cgMethod.getLangDoc().getDescriptionList().add(
                    fBundle.getXml2sourceFileTypeArgLangdoc(fieldLook
                            .getDefault()));
        }

        if (BlancoStringUtil.null2Blank(fieldLook.getDescription()).length() > 0) {
            cgMethod.getLangDoc().getDescriptionList().add(
                    fieldLook.getDescription());
        }

        // メソッドの実装
        final List<String> listLine = cgMethod.getLineList();

        listLine
                .add("return "
                        + "\"" + fieldGeneric + "\""
                        + BlancoCgLineUtil.getTerminator(fTargetLang));
    }

    /**
     * toStringメソッドを展開します。
     * 
     * @param argProcessStructure
     */
    private void expandMethodToString(
            final BlancoValueObjectPhpStructure argProcessStructure) {
        final BlancoCgMethod method = fCgFactory.createMethod("__toString",
                "このバリューオブジェクトの文字列表現を取得します。");
        fCgClass.getMethodList().add(method);

        method.getLangDoc().getDescriptionList().add(
                "オブジェクトのシャロー範囲でしかtoStringされない点に注意して利用してください。");
        method
                .setReturn(fCgFactory.createReturn("string",
                        "バリューオブジェクトの文字列表現。"));

        final List<String> listLine = method.getLineList();

        listLine.add(BlancoCgLineUtil.getVariableDeclaration(fTargetLang,
                "buf", "string", BlancoCgLineUtil
                        .getStringLiteralEnclosure(fTargetLang)
                        + BlancoCgLineUtil
                                .getStringLiteralEnclosure(fTargetLang))
                + BlancoCgLineUtil.getTerminator(fTargetLang));

        listLine.add(BlancoCgLineUtil.getVariablePrefix(fTargetLang) + "buf = "
                + BlancoCgLineUtil.getVariablePrefix(fTargetLang) + "buf "
                + BlancoCgLineUtil.getStringConcatenationOperator(fTargetLang)
                + " " + BlancoCgLineUtil.getStringLiteralEnclosure(fTargetLang)
                + argProcessStructure.getPackage() + "."
                + argProcessStructure.getName() + "["
                + BlancoCgLineUtil.getStringLiteralEnclosure(fTargetLang)
                + BlancoCgLineUtil.getTerminator(fTargetLang));
        for (int indexField = 0; indexField < argProcessStructure
                .getListField().size(); indexField++) {
            final BlancoValueObjectPhpFieldStructure fieldLook = argProcessStructure
                    .getListField().get(indexField);

            String fieldName = fieldLook.getName();
            if (fNameAdjust) {
                fieldName = BlancoNameAdjuster.toClassName(fieldName);
            }

            if (fieldLook.getType().equals("array") == false) {
                String strLine = BlancoCgLineUtil
                        .getVariablePrefix(fTargetLang)
                        + "buf = "
                        + BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                        + "buf "
                        + BlancoCgLineUtil
                                .getStringConcatenationOperator(fTargetLang)
                        + " "
                        + BlancoCgLineUtil
                                .getStringLiteralEnclosure(fTargetLang)
                        + (indexField == 0 ? "" : ",")
                        + fieldLook.getName()
                        + "="
                        + BlancoCgLineUtil
                                .getStringLiteralEnclosure(fTargetLang)
                        + " "
                        + BlancoCgLineUtil
                                .getStringConcatenationOperator(fTargetLang)
                        + " ";
                if (fieldLook.getType().equals("string")) {
                    strLine += BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                            + "this->f" + fieldName;
                } else if (fieldLook.getType().equals("boolean")) {
                    strLine += "("
                            + BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                            + "this->f" + fieldName + " ? 'true' : 'false')";
                } else {
                    strLine += "(string) "
                            + BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                            + "this->f" + fieldName;
                }
                strLine += BlancoCgLineUtil.getTerminator(fTargetLang);
                listLine.add(strLine);
            } else {
                listLine.add("// TODO 配列は未対応です。");
            }
        }

        listLine.add(BlancoCgLineUtil.getVariablePrefix(fTargetLang) + "buf = "
                + BlancoCgLineUtil.getVariablePrefix(fTargetLang) + "buf "
                + BlancoCgLineUtil.getStringConcatenationOperator(fTargetLang)
                + " " + BlancoCgLineUtil.getStringLiteralEnclosure(fTargetLang)
                + "]" + BlancoCgLineUtil.getStringLiteralEnclosure(fTargetLang)
                + BlancoCgLineUtil.getTerminator(fTargetLang));
        listLine.add("return "
                + BlancoCgLineUtil.getVariablePrefix(fTargetLang) + "buf"
                + BlancoCgLineUtil.getTerminator(fTargetLang));
    }
}
