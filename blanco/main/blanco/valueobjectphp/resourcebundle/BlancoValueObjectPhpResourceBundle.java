/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ�莩����������܂����B
 */
package blanco.valueobjectphp.resourcebundle;

import java.text.MessageFormat;
import java.util.Locale;
import java.util.MissingResourceException;
import java.util.ResourceBundle;

/**
 * BlancoValueObjectPhp�����p���郊�\�[�X�o���h����~���܂��B
 *
 * ���\�[�X�o���h����`: [BlancoValueObjectPhp]�B<BR>
 * ���̃N���X�̓��\�[�X�o���h����`�����玩���������ꂽ���\�[�X�o���h���N���X�ł��B<BR>
 * ���m�̃��P�[��<BR>
 * <UL>
 * <LI>ja
 * </UL>
 */
public class BlancoValueObjectPhpResourceBundle {
    /**
     * ���\�[�X�o���h���I�u�W�F�N�g�B
     *
     * �����I�Ɏ��ۂɓ��͂��s�����\�[�X�o���h�����L�����܂��B
     */
    private ResourceBundle fResourceBundle;

    /**
     * BlancoValueObjectPhpResourceBundle�N���X�̃R���X�g���N�^�B
     *
     * ��ꖼ[BlancoValueObjectPhp]�A�f�t�H���g�̃��P�[���A�Ăяo�����̃N���X���[�_���g�p���āA���\�[�X�o���h�����擾���܂��B
     */
    public BlancoValueObjectPhpResourceBundle() {
        try {
            fResourceBundle = ResourceBundle.getBundle("blanco/valueobjectphp/resourcebundle/BlancoValueObjectPhp");
        } catch (MissingResourceException ex) {
        }
    }

    /**
     * BlancoValueObjectPhpResourceBundle�N���X�̃R���X�g���N�^�B
     *
     * ��ꖼ[BlancoValueObjectPhp]�A�w�肳�ꂽ���P�[���A�Ăяo�����̃N���X���[�_���g�p���āA���\�[�X�o���h�����擾���܂��B
     *
     * @param locale ���P�[���̎w��
     */
    public BlancoValueObjectPhpResourceBundle(final Locale locale) {
        try {
            fResourceBundle = ResourceBundle.getBundle("blanco/valueobjectphp/resourcebundle/BlancoValueObjectPhp", locale);
        } catch (MissingResourceException ex) {
        }
    }

    /**
     * BlancoValueObjectPhpResourceBundle�N���X�̃R���X�g���N�^�B
     *
     * ��ꖼ[BlancoValueObjectPhp]�A�w�肳�ꂽ���P�[���A�w�肳�ꂽ�N���X���[�_���g�p���āA���\�[�X�o���h�����擾���܂��B
     *
     * @param locale ���P�[���̎w��
     * @param loader �N���X���[�_�̎w��
     */
    public BlancoValueObjectPhpResourceBundle(final Locale locale, final ClassLoader loader) {
        try {
            fResourceBundle = ResourceBundle.getBundle("blanco/valueobjectphp/resourcebundle/BlancoValueObjectPhp", locale, loader);
        } catch (MissingResourceException ex) {
        }
    }

    /**
     * �����I�ɕێ����Ă��郊�\�[�X�o���h���I�u�W�F�N�g���擾���܂��B
     *
     * @return �����I�ɕێ����Ă��郊�\�[�X�o���h���I�u�W�F�N�g�B
     */
    public ResourceBundle getResourceBundle() {
        return fResourceBundle;
    }

    /**
     * bundle[BlancoValueObjectPhp], key[METAFILE_DISPLAYNAME]
     *
     * [�o�����[�I�u�W�F�N�g��`��(php)] (ja)<br>
     *
     * @return key[METAFILE_DISPLAYNAME]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getMetafileDisplayname() {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�o�����[�I�u�W�F�N�g��`��(php)";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("METAFILE_DISPLAYNAME");
            }
        } catch (MissingResourceException ex) {
        }
        // �u��������͂ЂƂ�����܂���B
        return strFormat;
    }

    /**
     * bundle[BlancoValueObjectPhp], key[META2XML.ELEMENT_COMMON]
     *
     * [blancovalueobjectphp-common] (ja)<br>
     *
     * @return key[META2XML.ELEMENT_COMMON]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getMeta2xmlElementCommon() {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "blancovalueobjectphp-common";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("META2XML.ELEMENT_COMMON");
            }
        } catch (MissingResourceException ex) {
        }
        // �u��������͂ЂƂ�����܂���B
        return strFormat;
    }

    /**
     * bundle[BlancoValueObjectPhp], key[META2XML.ELEMENT_LIST]
     *
     * [blancovalueobjectphp-list] (ja)<br>
     *
     * @return key[META2XML.ELEMENT_LIST]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getMeta2xmlElementList() {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "blancovalueobjectphp-list";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("META2XML.ELEMENT_LIST");
            }
        } catch (MissingResourceException ex) {
        }
        // �u��������͂ЂƂ�����܂���B
        return strFormat;
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.ERR001]
     *
     * [�N���X��[{0}]�̃p�b�P�[�W�����w�肳��Ă��܂���B] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.ERR001]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileErr001(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�N���X��[{0}]�̃p�b�P�[�W�����w�肳��Ă��܂���B";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.ERR001");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.ERR002]
     *
     * [���b�Z�[�W��`ID[{0}]�ɂ����āA�L�[[{1}]��2��ȏ゠����܂����B�����L�[��2��ȏ�w�肷�邱�Ƃ͂ł��܂���B] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @param arg1 �u��������{1}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.ERR002]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileErr002(final String arg0, final String arg1) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "���b�Z�[�W��`ID[{0}]�ɂ����āA�L�[[{1}]��2��ȏ゠����܂����B�����L�[��2��ȏ�w�肷�邱�Ƃ͂ł��܂���B";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.ERR002");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0, arg1}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.ERR003]
     *
     * [�N���X��[{0}]�̃t�B�[���h[{1}]�̌^�����w�肳��Ă��܂���B] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @param arg1 �u��������{1}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.ERR003]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileErr003(final String arg0, final String arg1) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�N���X��[{0}]�̃t�B�[���h[{1}]�̌^�����w�肳��Ă��܂���B";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.ERR003");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0, arg1}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.ERR004]
     *
     * [�N���X��[{0}] �Ńt�B�[���h�����w�肳��Ă��Ȃ����̂�����܂��B] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.ERR004]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileErr004(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�N���X��[{0}] �Ńt�B�[���h�����w�肳��Ă��Ȃ����̂�����܂��B";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.ERR004");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.ERR005]
     *
     * [�N���X��[{0}] �t�B�[���h[{1}]�́u�^�v���w�肳��Ă��܂���B�u�^�v���w�肵�Ă��������B] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @param arg1 �u��������{1}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.ERR005]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileErr005(final String arg0, final String arg1) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�N���X��[{0}] �t�B�[���h[{1}]�́u�^�v���w�肳��Ă��܂���B�u�^�v���w�肵�Ă��������B";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.ERR005");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0, arg1}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.ERR006]
     *
     * [�N���X��[{0}] �t�B�[���h[{1}]�́u�f�t�H���g�l({2})�v���Z�b�g����Ă��܂��B�������u{3}�v�̓f�t�H���g�l���T�|�[�g���܂���B] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @param arg1 �u��������{1}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @param arg2 �u��������{2}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @param arg3 �u��������{3}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.ERR006]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileErr006(final String arg0, final String arg1, final String arg2, final String arg3) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�N���X��[{0}] �t�B�[���h[{1}]�́u�f�t�H���g�l({2})�v���Z�b�g����Ă��܂��B�������u{3}�v�̓f�t�H���g�l���T�|�[�g���܂���B";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.ERR006");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0, arg1, arg2, arg3}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.FIELD.NAME]
     *
     * [�t�B�[���h [{0}]] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.FIELD.NAME]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileFieldName(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�t�B�[���h [{0}]";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.FIELD.NAME");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.FIELD.TYPE]
     *
     * [���ڂ̌^ [{0}]] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.FIELD.TYPE]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileFieldType(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "���ڂ̌^ [{0}]";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.FIELD.TYPE");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.FIELD.DEFAULT]
     *
     * [�K��l   [{0}]] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.FIELD.DEFAULT]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileFieldDefault(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�K��l   [{0}]";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.FIELD.DEFAULT");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.SET.LANGDOC.01]
     *
     * [�t�B�[���h [{0}]�̃Z�b�^�[���\�b�h] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.SET.LANGDOC.01]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileSetLangdoc01(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�t�B�[���h [{0}]�̃Z�b�^�[���\�b�h";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.SET.LANGDOC.01");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.SET.LANGDOC.02]
     *
     * [���ڂ̌^ [{0}]] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.SET.LANGDOC.02]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileSetLangdoc02(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "���ڂ̌^ [{0}]";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.SET.LANGDOC.02");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.SET.ARG.LANGDOC]
     *
     * [�t�B�[���h[{0}]�Ɋi�[�������l] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.SET.ARG.LANGDOC]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileSetArgLangdoc(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�t�B�[���h[{0}]�Ɋi�[�������l";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.SET.ARG.LANGDOC");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.GET.LANGDOC.01]
     *
     * [�t�B�[���h[{0}]�̃Q�b�^�[���\�b�h] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.GET.LANGDOC.01]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileGetLangdoc01(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�t�B�[���h[{0}]�̃Q�b�^�[���\�b�h";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.GET.LANGDOC.01");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.GET.LANGDOC.02]
     *
     * [���ڂ̌^ [{0}]] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.GET.LANGDOC.02]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileGetLangdoc02(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "���ڂ̌^ [{0}]";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.GET.LANGDOC.02");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.GET.ARG.LANGDOC]
     *
     * [�K��l   [{0}]] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.GET.ARG.LANGDOC]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileGetArgLangdoc(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�K��l   [{0}]";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.GET.ARG.LANGDOC");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[XML2SOURCE_FILE.GET.RETURN.LANGDOC]
     *
     * [�t�B�[���h[{0}]�Ɋi�[����Ă���l] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[XML2SOURCE_FILE.GET.RETURN.LANGDOC]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getXml2sourceFileGetReturnLangdoc(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "�t�B�[���h[{0}]�Ɋi�[����Ă���l";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("XML2SOURCE_FILE.GET.RETURN.LANGDOC");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }

    /**
     * bundle[BlancoValueObjectPhp], key[ANTTASK.ERR001]
     *
     * [���^�f�B���N�g��[{0}]�����݂��܂���B] (ja)<br>
     *
     * @param arg0 �u��������{0}��u������l�Bjava.lang.String�^��^���Ă��������B
     * @return key[ANTTASK.ERR001]�ɑΉ�����l�B�O������ǂݍ��݂��ł��Ȃ��ꍇ�ɂ́A��`���̒l��߂��܂��B�K��null�ȊO�̒l���߂�܂��B
     */
    public String getAnttaskErr001(final String arg0) {
        // �����l�Ƃ��Ē�`���̒l�𗘗p���܂��B
        String strFormat = "���^�f�B���N�g��[{0}]�����݂��܂���B";
        try {
            if (fResourceBundle != null) {
                strFormat = fResourceBundle.getString("ANTTASK.ERR001");
            }
        } catch (MissingResourceException ex) {
        }
        final MessageFormat messageFormat = new MessageFormat(strFormat);
        final StringBuffer strbuf = new StringBuffer();
        // �^����ꂽ���������ɒu���������u�������܂��B
        messageFormat.format(new Object[] {arg0}, strbuf, null);
        return strbuf.toString();
    }
}
