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
import java.util.List;

import blanco.cg.BlancoCgObjectFactory;
import blanco.cg.BlancoCgSupportedLang;
import blanco.cg.transformer.BlancoCgTransformerFactory;
import blanco.cg.util.BlancoCgLineUtil;
import blanco.cg.valueobject.BlancoCgClass;
import blanco.cg.valueobject.BlancoCgField;
import blanco.cg.valueobject.BlancoCgMethod;
import blanco.cg.valueobject.BlancoCgSourceFile;
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
 * �u���b�Z�[�W��`���vExcel�l�����烁�b�Z�[�W����������N���X�E�\�[�X�R�[�h�𐶐��B
 * 
 * ���̃N���X�́A����XML�t�@�C������\�[�X�R�[�h��������������@�\��S���܂��B
 * 
 * @author IGA Tosiki
 */
public class BlancoValueObjectPhpXml2SourceFile {
    /**
     * ���̃v���_�N�g�̃��\�[�X�o���h���ւ̃A�N�Z�X�I�u�W�F�N�g�B
     */
    private final BlancoValueObjectPhpResourceBundle fBundle = new BlancoValueObjectPhpResourceBundle();

    /**
     * �o�͑ΏۂƂȂ�v���O���~���O����B
     */
    private int fTargetLang = BlancoCgSupportedLang.PHP;

    /**
     * �����I�ɗ��p����blancoCg�p�t�@�N�g���B
     */
    private BlancoCgObjectFactory fCgFactory = null;

    /**
     * �����I�ɗ��p����blancoCg�p�\�[�X�t�@�C�����B
     */
    private BlancoCgSourceFile fCgSourceFile = null;

    /**
     * �����I�ɗ��p����blancoCg�p�N���X���B
     */
    private BlancoCgClass fCgClass = null;

    /**
     * �t�B�[���h���⃁�\�b�h���̖��O�ό`���s�����ǂ����B
     */
    private boolean fNameAdjust = true;

    /**
     * ������������\�[�X�t�@�C���̕����G���R�[�f�B���O�B
     */
    private String fEncoding = null;

    public void setEncoding(final String argEncoding) {
        fEncoding = argEncoding;
    }

    /**
     * ����XML�t�@�C������\�[�X�R�[�h�������������܂��B
     * 
     * @param argMetaXmlSourceFile
     *            ���^��񂪊܂܂�Ă���XML�t�@�C���B
     * @param argTargetLang
     *            �o�͑Ώۃv���O���~���O����B
     * @param argDirectoryTarget
     *            �\�[�X�R�[�h������f�B���N�g�� (/main�������������w�肵�܂�)�B
     * @param argNameAdjust
     *            ���O�ό`���s�����ǂ����B
     * @throws IOException
     *             ���o�͗�O�����������ꍇ�B
     */
    public void process(final File argMetaXmlSourceFile,
            final boolean argNameAdjust, final File argDirectoryTarget)
            throws IOException {
        fNameAdjust = argNameAdjust;

        // ���^������͂��ăo�����[�I�u�W�F�N�g�̃c���[���擾���܂��B
        final BlancoXmlDocument documentMeta = new BlancoXmlUnmarshaller()
                .unmarshal(argMetaXmlSourceFile);

        // ���[�g�G�������g���擾���܂��B
        final BlancoXmlElement elementRoot = BlancoXmlBindingUtil
                .getDocumentElement(documentMeta);
        if (elementRoot == null) {
            // ���[�g�G�������g�������ꍇ�ɂ͏������f���܂��B
            return;
        }

        // sheet(Excel�V�[�g)�̃��X�g���擾���܂��B
        final List<BlancoXmlElement> listSheet = BlancoXmlBindingUtil
                .getElementsByTagName(elementRoot, "sheet");
        final int sizeListSheet = listSheet.size();
        for (int index = 0; index < sizeListSheet; index++) {
            // ���̂��̂̃V�[�g���������܂��B
            final BlancoXmlElement elementSheet = (BlancoXmlElement) listSheet
                    .get(index);

            // ���ʏ����擾���܂��B
            final BlancoXmlElement elementCommon = BlancoXmlBindingUtil
                    .getElement(elementSheet, fBundle
                            .getMeta2xmlElementCommon());
            if (elementCommon == null) {
                // common�������ꍇ�ɂ́A���̃V�[�g�̏������X�L�b�v���܂��B
                continue;
            }

            final String name = BlancoXmlBindingUtil.getTextContent(
                    elementCommon, "name");
            if (BlancoStringUtil.null2Blank(name).trim().length() == 0) {
                // name����̏ꍇ�ɂ͏������X�L�b�v���܂��B
                continue;
            }

            // �ꗗ�����擾���܂��B
            final BlancoXmlElement elementList = BlancoXmlBindingUtil
                    .getElement(elementSheet, fBundle.getMeta2xmlElementList());

            // �V�[�g����ڍׂȏ����擾���܂��B
            final BlancoValueObjectPhpStructure processStructure = parseSheet(
                    elementCommon, elementList, argDirectoryTarget);

            if (processStructure != null) {
                // ���^���̉�͌��ʂ����ƂɃ\�[�X�R�[�h�������������s���܂��B
                process(processStructure, argDirectoryTarget);
            }
        }
    }

    /**
     * sheet�G�������g��W�J���܂��B
     * 
     * @param argElementCommon
     *            ���ݏ������Ă���Common�m�[�h�B
     * @param argElementList
     *            ���ݏ������Ă���List�m�[�h�B
     * @param argDirectoryTarget
     *            �\�[�X�R�[�h�̏o�͐�t�H���_�B
     * @return ���W���ꂽ���^���\���f�[�^�B
     */
    private BlancoValueObjectPhpStructure parseSheet(
            final BlancoXmlElement argElementCommon,
            final BlancoXmlElement argElementList, final File argDirectoryTarget) {

        final BlancoValueObjectPhpStructure processStructure = new BlancoValueObjectPhpStructure();
        processStructure.setName(BlancoXmlBindingUtil.getTextContent(
                argElementCommon, "name"));
        processStructure.setPackage(BlancoXmlBindingUtil.getTextContent(
                argElementCommon, "package"));

        if (BlancoStringUtil.null2Blank(processStructure.getPackage()).trim()
                .length() == 0) {
            throw new IllegalArgumentException(fBundle
                    .getXml2sourceFileErr001(processStructure.getName()));
        }

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

        if (argElementList == null) {
            return null;
        }

        // �ꗗ�̓��e���擾���܂��B
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

            // ���ɓ������e���o�^����Ă��Ȃ����ǂ����̃`�F�b�N�B
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
                // �����ňُ�I���B
                continue;
            }

            field.setDefault(BlancoXmlBindingUtil.getTextContent(elementField,
                    "default"));

            field.setDescription(BlancoXmlBindingUtil.getTextContent(
                    elementField, "description"));

            processStructure.getListField().add(field);
        }

        return processStructure;
    }

    /**
     * ���W���ꂽ�������ɁA�\�[�X�R�[�h�������������܂��B
     * 
     * @param argProcessStructure
     *            ���^�t�@�C��������W�ł��������\���f�[�^�B
     * @param argDirectoryTarget
     *            �\�[�X�R�[�h�̏o�͐�t�H���_�B
     */
    public void process(
            final BlancoValueObjectPhpStructure argProcessStructure,
            final File argDirectoryTarget) {

        // �]���ƌ݊������������邽�߁A/main�T�u�t�H���_�ɏo�͂��܂��B
        final File fileBlancoMain = new File(argDirectoryTarget
                .getAbsolutePath()
                + "/main");

        fCgFactory = BlancoCgObjectFactory.getInstance();
        fCgSourceFile = fCgFactory.createSourceFile(argProcessStructure
                .getPackage(), "���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B");
        fCgSourceFile.setEncoding(fEncoding);
        fCgClass = fCgFactory.createClass(argProcessStructure.getName(),
                BlancoStringUtil.null2Blank(argProcessStructure
                        .getDescription()));
        fCgSourceFile.getClassList().add(fCgClass);

        if (argProcessStructure.getFileDescription() != null) {
            fCgSourceFile.setDescription(argProcessStructure
                    .getFileDescription());
        }

        expandValueObject(argProcessStructure);

        BlancoCgTransformerFactory.getSourceTransformer(fTargetLang).transform(
                fCgSourceFile, fileBlancoMain);
    }

    /**
     * �o�����[�I�u�W�F�N�g��W�J���܂��B
     * 
     * @param argProcessStructure
     *            ���^�t�@�C��������W�ł��������\���f�[�^�B
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
        }

        expandMethodToString(argProcessStructure);
    }

    /**
     * �t�B�[���h��W�J���܂��B
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
                // �N�I�[�g��t�^���܂��B
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
     * set���\�b�h��W�J���܂��B
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

        // ���\�b�h�̎���
        final List<String> listLine = cgMethod.getLineList();

        listLine.add(BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                + "this->f" + fieldName + " = "
                + BlancoCgLineUtil.getVariablePrefix(fTargetLang) + "arg"
                + fieldName + BlancoCgLineUtil.getTerminator(fTargetLang));
    }

    /**
     * get���\�b�h��W�J���܂��B
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

        // ���\�b�h�̎���
        final List<String> listLine = cgMethod.getLineList();

        listLine
                .add("return "
                        + BlancoCgLineUtil.getVariablePrefix(fTargetLang)
                        + "this->" + "f" + fieldName
                        + BlancoCgLineUtil.getTerminator(fTargetLang));
    }

    /**
     * toString���\�b�h��W�J���܂��B
     * 
     * @param argProcessStructure
     */
    private void expandMethodToString(
            final BlancoValueObjectPhpStructure argProcessStructure) {
        final BlancoCgMethod method = fCgFactory.createMethod("__toString",
                "���̃o�����[�I�u�W�F�N�g�̕�����\�����擾���܂��B");
        fCgClass.getMethodList().add(method);

        method.getLangDoc().getDescriptionList().add(
                "�I�u�W�F�N�g�̃V�����[�͈͂ł���toString����Ȃ��_�ɒ��ӂ��ė��p���Ă��������B");
        method
                .setReturn(fCgFactory.createReturn("string",
                        "�o�����[�I�u�W�F�N�g�̕�����\���B"));

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
                listLine.add("// TODO �z��͖��Ή��ł��B");
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
