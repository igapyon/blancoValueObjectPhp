/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ�莩����������܂����B
 */
package blanco.valueobjectphp.valueobject;

/**
 * BlancoValueObjectPhp�̂Ȃ��ŗ��p�����ValueObject�ł��B
 */
public class BlancoValueObjectPhpFieldStructure {
    /**
     * ���ڔԍ��B�ȗ��\�ł��B
     *
     * �t�B�[���h: [no]�B
     */
    private String fNo;

    /**
     * �t�B�[���h�����w�肵�܂��B�K�{���ڂł��B
     *
     * �t�B�[���h: [name]�B
     */
    private String fName;

    /**
     * �^�����p�b�P�[�W���̃t���C���t�Ŏw�肵�܂��B�K�{���ڂł��B
     *
     * �t�B�[���h: [type]�B
     */
    private String fType;

    /**
     * �f�t�H���g�l���w�肵�܂��B
     *
     * �t�B�[���h: [default]�B
     */
    private String fDefault;

    /**
     * �t�B�[���h�ւ̐������w�肵�܂��B
     *
     * �t�B�[���h: [description]�B
     */
    private String fDescription;

    /**
     * �t�B�[���h [no] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [���ڔԍ��B�ȗ��\�ł��B]�B
     *
     * @param argNo �t�B�[���h[no]�ɐݒ肷��l�B
     */
    public void setNo(final String argNo) {
        fNo = argNo;
    }

    /**
     * �t�B�[���h [no] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [���ڔԍ��B�ȗ��\�ł��B]�B
     *
     * @return �t�B�[���h[no]����擾�����l�B
     */
    public String getNo() {
        return fNo;
    }

    /**
     * �t�B�[���h [name] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [�t�B�[���h�����w�肵�܂��B�K�{���ڂł��B]�B
     *
     * @param argName �t�B�[���h[name]�ɐݒ肷��l�B
     */
    public void setName(final String argName) {
        fName = argName;
    }

    /**
     * �t�B�[���h [name] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [�t�B�[���h�����w�肵�܂��B�K�{���ڂł��B]�B
     *
     * @return �t�B�[���h[name]����擾�����l�B
     */
    public String getName() {
        return fName;
    }

    /**
     * �t�B�[���h [type] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [�^�����p�b�P�[�W���̃t���C���t�Ŏw�肵�܂��B�K�{���ڂł��B]�B
     *
     * @param argType �t�B�[���h[type]�ɐݒ肷��l�B
     */
    public void setType(final String argType) {
        fType = argType;
    }

    /**
     * �t�B�[���h [type] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [�^�����p�b�P�[�W���̃t���C���t�Ŏw�肵�܂��B�K�{���ڂł��B]�B
     *
     * @return �t�B�[���h[type]����擾�����l�B
     */
    public String getType() {
        return fType;
    }

    /**
     * �t�B�[���h [default] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [�f�t�H���g�l���w�肵�܂��B]�B
     *
     * @param argDefault �t�B�[���h[default]�ɐݒ肷��l�B
     */
    public void setDefault(final String argDefault) {
        fDefault = argDefault;
    }

    /**
     * �t�B�[���h [default] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [�f�t�H���g�l���w�肵�܂��B]�B
     *
     * @return �t�B�[���h[default]����擾�����l�B
     */
    public String getDefault() {
        return fDefault;
    }

    /**
     * �t�B�[���h [description] �̒l��ݒ肵�܂��B
     *
     * �t�B�[���h�̐���: [�t�B�[���h�ւ̐������w�肵�܂��B]�B
     *
     * @param argDescription �t�B�[���h[description]�ɐݒ肷��l�B
     */
    public void setDescription(final String argDescription) {
        fDescription = argDescription;
    }

    /**
     * �t�B�[���h [description] �̒l���擾���܂��B
     *
     * �t�B�[���h�̐���: [�t�B�[���h�ւ̐������w�肵�܂��B]�B
     *
     * @return �t�B�[���h[description]����擾�����l�B
     */
    public String getDescription() {
        return fDescription;
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
        buf.append("blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure[");
        buf.append("no=" + fNo);
        buf.append(",name=" + fName);
        buf.append(",type=" + fType);
        buf.append(",default=" + fDefault);
        buf.append(",description=" + fDescription);
        buf.append("]");
        return buf.toString();
    }
}
