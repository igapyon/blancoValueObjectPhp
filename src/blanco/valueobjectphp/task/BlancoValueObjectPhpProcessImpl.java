/*
 * blanco Framework
 * Copyright (C) 2004-2009 IGA Tosiki
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 */
package blanco.valueobjectphp.task;

import java.io.File;
import java.io.IOException;

import javax.xml.transform.TransformerException;

import blanco.valueobjectphp.BlancoValueObjectPhpConstants;
import blanco.valueobjectphp.BlancoValueObjectPhpMeta2Xml;
import blanco.valueobjectphp.BlancoValueObjectPhpXml2SourceFile;
import blanco.valueobjectphp.resourcebundle.BlancoValueObjectPhpResourceBundle;
import blanco.valueobjectphp.task.valueobject.BlancoValueObjectPhpProcessInput;

public class BlancoValueObjectPhpProcessImpl implements
        BlancoValueObjectPhpProcess {
    /**
     * このプロダクトのリソースバンドルへのアクセスオブジェクト。
     */
    private final BlancoValueObjectPhpResourceBundle fBundle = new BlancoValueObjectPhpResourceBundle();

    /**
     * {@inheritDoc}
     */
    public int execute(final BlancoValueObjectPhpProcessInput input) {
        System.out.println("- " + BlancoValueObjectPhpConstants.PRODUCT_NAME
                + " (" + BlancoValueObjectPhpConstants.VERSION + ")");

        try {
            final File fileMetadir = new File(input.getMetadir());
            if (fileMetadir.exists() == false) {
                throw new IllegalArgumentException(fBundle
                        .getAnttaskErr001(input.getMetadir()));
            }

            // テンポラリディレクトリを作成。
            new File(input.getTmpdir()
                    + BlancoValueObjectPhpConstants.TARGET_SUBDIRECTORY)
                    .mkdirs();

            // 指定されたメタディレクトリを処理します。
            new BlancoValueObjectPhpMeta2Xml()
                    .processDirectory(fileMetadir, input.getTmpdir()
                            + BlancoValueObjectPhpConstants.TARGET_SUBDIRECTORY);

            // XML化された中間ファイルからソースコードを生成
            final File[] fileMeta2 = new File(input.getTmpdir()
                    + BlancoValueObjectPhpConstants.TARGET_SUBDIRECTORY)
                    .listFiles();
            for (int index = 0; index < fileMeta2.length; index++) {
                if (fileMeta2[index].getName().endsWith(".xml") == false) {
                    continue;
                }

                final BlancoValueObjectPhpXml2SourceFile xml2source = new BlancoValueObjectPhpXml2SourceFile();
                xml2source.setEncoding(input.getEncoding());
                xml2source.process(fileMeta2[index], "true".equals(input
                        .getNameAdjust()), new File(input.getTargetdir()));
            }
        } catch (IOException ex) {
            throw new IllegalArgumentException(ex.toString());
        } catch (TransformerException ex) {
            throw new IllegalArgumentException(ex.toString());
        } catch (IllegalArgumentException ex) {
            ex.printStackTrace();
            throw ex;
        }
        return 0;
    }

    /**
     * {@inheritDoc}
     */
    public boolean progress(final String argProgressMessage) {
        System.out.println(argProgressMessage);
        return false;
    }
}
