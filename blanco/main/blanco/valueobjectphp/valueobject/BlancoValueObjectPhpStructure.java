/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ�莩����������܂����B
 */
package blanco.valueobjectphp.valueobject;

import java.util.ArrayList;

/**
 * BlancoValueObjectPhp�̂Ȃ��ŗ��p�����ValueObject�ł��B
 */
public class BlancoValueObjectPhpStructure {
    /**
     * ���b�Z�[�W��`ID���w�肵�܂��B�K�{���ڂł��B
     *
     * �t�B�[���h: [name]�B
     */
    private String fName;

    /**
     * �p�b�P�[�W�����w�肵�܂��B�K�{���ڂł��B
     *
     * �t�B�[���h: [package]�B
     */
    private String fPackage;

    /**
     * ���b�Z�[�W��`�̐������L�ڂ��܂��B
     *
     * �t�B�[���h: [description]�B
     */
    private String fDescription;

    /**
     * �t�@�C������
     *
     * �t�B�[���h: [fileDescription]�B
     */
    private String fFileDescription;

    /**
     * �t�B�[���h��ێ����郊�X�g�B
     *
     * �t�B�[���h: [listField]�B
     * �f�t�H���g: [new java.util.ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure>()]�B
     */
    private ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure> fListField = new java.util.ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure>();

    /**
     * �t�B�[���h [name] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [���b�Z�[�W��`ID���w�肵�܂��B�K�{���ڂł��B]�B
     *
     * @param argName �t�B�[���h[name]�ɐݒ肷��l�B
     */
    public void setName(final String argName) {
        fName = argName;
    }

    /**
     * �t�B�[���h [name] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [���b�Z�[�W��`ID���w�肵�܂��B�K�{���ڂł��B]�B
     *
     * @return �t�B�[���h[name]����擾�����l�B
     */
    public String getName() {
        return fName;
    }

    /**
     * �t�B�[���h [package] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [�p�b�P�[�W�����w�肵�܂��B�K�{���ڂł��B]�B
     *
     * @param argPackage �t�B�[���h[package]�ɐݒ肷��l�B
     */
    public void setPackage(final String argPackage) {
        fPackage = argPackage;
    }

    /**
     * �t�B�[���h [package] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [�p�b�P�[�W�����w�肵�܂��B�K�{���ڂł��B]�B
     *
     * @return �t�B�[���h[package]����擾�����l�B
     */
    public String getPackage() {
        return fPackage;
    }

    /**
     * �t�B�[���h [description] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [���b�Z�[�W��`�̐������L�ڂ��܂��B]�B
     *
     * @param argDescription �t�B�[���h[description]�ɐݒ肷��l�B
     */
    public void setDescription(final String argDescription) {
        fDescription = argDescription;
    }

    /**
     * �t�B�[���h [description] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [���b�Z�[�W��`�̐������L�ڂ��܂��B]�B
     *
     * @return �t�B�[���h[description]����擾�����l�B
     */
    public String getDescription() {
        return fDescription;
    }

    /**
     * �t�B�[���h [fileDescription] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [�t�@�C������]�B
     *
     * @param argFileDescription �t�B�[���h[fileDescription]�ɐݒ肷��l�B
     */
    public void setFileDescription(final String argFileDescription) {
        fFileDescription = argFileDescription;
    }

    /**
     * �t�B�[���h [fileDescription] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [�t�@�C������]�B
     *
     * @return �t�B�[���h[fileDescription]����擾�����l�B
     */
    public String getFileDescription() {
        return fFileDescription;
    }

    /**
     * �t�B�[���h [listField] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [�t�B�[���h��ێ����郊�X�g�B]�B
     *
     * @param argListField �t�B�[���h[listField]�ɐݒ肷��l�B
     */
    public void setListField(final ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure> argListField) {
        fListField = argListField;
    }

    /**
     * �t�B�[���h [listField] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [�t�B�[���h��ێ����郊�X�g�B]�B
     * �f�t�H���g: [new java.util.ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure>()]�B
     *
     * @return �t�B�[���h[listField]����擾�����l�B
     */
    public ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure> getListField() {
        return fListField;
    }

    /**
     * ���̃o�����[�I�u�W�F�N�g�̕�����\�����擾���܂��B
     *
     * <P>�g�p��̒���</P>
     * <UL>
     * <LI>�I�u�W�F�N�g�̃V�����[�͈͂̂ݕ����񉻂̏����ΏۂƂȂ�܂��B
     * <LI>�I�u�W�F�N�g���z�Q�Ƃ��Ă���ꍇ�ɂ́A���̃��\�b�h�͎g��Ȃ��ł��������B
     * </UL>
     *
     * @return �o�����[�I�u�W�F�N�g�̕�����\���B
     */
    @Override
    public String toString() {
        final StringBuffer buf = new StringBuffer();
        buf.append("blanco.valueobjectphp.valueobject.BlancoValueObjectPhpStructure[");
        buf.append("name=" + fName);
        buf.append(",package=" + fPackage);
        buf.append(",description=" + fDescription);
        buf.append(",fileDescription=" + fFileDescription);
        buf.append(",listField=" + fListField);
        buf.append("]");
        return buf.toString();
    }
}
