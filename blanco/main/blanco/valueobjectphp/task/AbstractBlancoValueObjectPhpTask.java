/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 * Apache Ant�^�X�N [BlancoValueObjectPhp]�̒��ېe�N���X
 */
package blanco.valueobjectphp.task;

import org.apache.tools.ant.BuildException;
import org.apache.tools.ant.Task;

/**
 * Apache Ant�^�X�N [BlancoValueObjectPhp]�̒��ېe�N���X�B
 *
 * �o�����[�I�u�W�F�N�g��`������o�����[�I�u�W�F�N�g�N���X�������������邽�߂�AntTask�ł��B<br>
 * ���̒��ېe�N���X�ł́AApache Ant�^�X�N�ň�ʓI�ɕK�v�ȃ`�F�b�N�Ȃǂ̃R�[�f�B���O�������肵�܂��B
 * ���̃N���X���p�����āA�p�b�P�[�W[blanco.valueobjectphp.task]��BlancoValueObjectPhpTask�N���X���쐬���Ă��������B������Ant�^�X�N�̏������e���L�q���Ă��������B<br>
 * <br>
 * Ant�^�X�N�ւ̑g�ݍ��ݗ�<br>
 * <pre>
 * &lt;taskdef name=&quot;blancovalueobjectphp&quot; classname=&quot;blanco.valueobjectphp.task.BlancoValueObjectPhpTask">
 *     &lt;classpath&gt;
 *         &lt;fileset dir=&quot;lib&quot; includes=&quot;*.jar&quot; /&gt;
 *         &lt;fileset dir=&quot;lib.ant&quot; includes=&quot;*.jar&quot; /&gt;
 *     &lt;/classpath&gt;
 * &lt;/taskdef&gt;
 * </pre>
 */
public abstract class AbstractBlancoValueObjectPhpTask extends Task {
    /**
     * Verbose���[�h�œ��삳���邩�ǂ����B
     */
    private String fVerbose = "false";

    /**
     * Ant�^�X�N��[metadir]�A�g���r���[�g�B
     *
     * ���ڔԍ�: 1<br>
     * ���^�f�B���N�g���Bxls�t�@�C���̊i�[��܂��� xml�t�@�C���̊i�[����w�肵�܂��B<br>
     * �K�{����<br>
     */
    private String fMetadir;

    /**
     * Ant�^�X�N��[targetdir]�A�g���r���[�g�B
     *
     * ���ڔԍ�: 2<br>
     * �o�͐�t�H���_���w�肵�܂��B���w��̏ꍇ�ɂ̓J�����g������blanco��p���܂��B<br>
     */
    private String fTargetdir;

    /**
     * Ant�^�X�N��[tmpdir]�A�g���r���[�g�B
     *
     * ���ڔԍ�: 3<br>
     * �e���|�����f�B���N�g�����w�肵�܂��B���w��̏ꍇ�ɂ̓J�����g������tmp��p���܂��B<br>
     */
    private String fTmpdir;

    /**
     * Ant�^�X�N��[nameAdjust]�A�g���r���[�g�B
     *
     * ���ڔԍ�: 4<br>
     * �t�B�[���h���⃁�\�b�h���𖼑O�ό`�����{���邩�ǂ����B<br>
     */
    private String fNameAdjust;

    /**
     * Verbose���[�h�œ��삳���邩�ǂ����B
     *
     * @param arg Verbose���[�h�œ��삳���邩�ǂ����B
     */
    public void setVerbose(final String arg) {
        fVerbose = arg;
    }

    /**
     * Verbose���[�h�œ��삳���邩�ǂ����B
     *
     * @return Verbose���[�h�œ��삳���邩�ǂ����B
     */
    public String getVerbose() {
        return fVerbose;
    }

    /**
     * Ant�^�X�N��[metadir]�A�g���r���[�g�̃Z�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 1<br>
     * ���^�f�B���N�g���Bxls�t�@�C���̊i�[��܂��� xml�t�@�C���̊i�[����w�肵�܂��B<br>
     *
     * @param arg �Z�b�g�������l
     */
    public void setMetadir(final String arg) {
        fMetadir = arg;
    }

    /**
     * Ant�^�X�N��[metadir]�A�g���r���[�g�̃Q�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 1<br>
     * ���^�f�B���N�g���Bxls�t�@�C���̊i�[��܂��� xml�t�@�C���̊i�[����w�肵�܂��B<br>
     * �K�{�A�g���r���[�g�ł��BApache Ant�^�X�N��ŕK���l���w�肳��܂��B<br>
     *
     * @return ���̃t�B�[���h�̒l
     */
    public String getMetadir() {
        return fMetadir;
    }

    /**
     * Ant�^�X�N��[targetdir]�A�g���r���[�g�̃Z�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 2<br>
     * �o�͐�t�H���_���w�肵�܂��B���w��̏ꍇ�ɂ̓J�����g������blanco��p���܂��B<br>
     *
     * @param arg �Z�b�g�������l
     */
    public void setTargetdir(final String arg) {
        fTargetdir = arg;
    }

    /**
     * Ant�^�X�N��[targetdir]�A�g���r���[�g�̃Q�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 2<br>
     * �o�͐�t�H���_���w�肵�܂��B���w��̏ꍇ�ɂ̓J�����g������blanco��p���܂��B<br>
     * �f�t�H���g�l[blanco]���ݒ肳��Ă��܂��BApache Ant�^�X�N��ŃA�g���r���[�g�̎w�肪�����ꍇ�ɂ́A�f�t�H���g�l���ݒ肳��܂��B<br>
     *
     * @return ���̃t�B�[���h�̒l
     */
    public String getTargetdir() {
        return fTargetdir;
    }

    /**
     * Ant�^�X�N��[tmpdir]�A�g���r���[�g�̃Z�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 3<br>
     * �e���|�����f�B���N�g�����w�肵�܂��B���w��̏ꍇ�ɂ̓J�����g������tmp��p���܂��B<br>
     *
     * @param arg �Z�b�g�������l
     */
    public void setTmpdir(final String arg) {
        fTmpdir = arg;
    }

    /**
     * Ant�^�X�N��[tmpdir]�A�g���r���[�g�̃Q�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 3<br>
     * �e���|�����f�B���N�g�����w�肵�܂��B���w��̏ꍇ�ɂ̓J�����g������tmp��p���܂��B<br>
     * �f�t�H���g�l[tmp]���ݒ肳��Ă��܂��BApache Ant�^�X�N��ŃA�g���r���[�g�̎w�肪�����ꍇ�ɂ́A�f�t�H���g�l���ݒ肳��܂��B<br>
     *
     * @return ���̃t�B�[���h�̒l
     */
    public String getTmpdir() {
        return fTmpdir;
    }

    /**
     * Ant�^�X�N��[nameAdjust]�A�g���r���[�g�̃Z�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 4<br>
     * �t�B�[���h���⃁�\�b�h���𖼑O�ό`�����{���邩�ǂ����B<br>
     *
     * @param arg �Z�b�g�������l
     */
    public void setNameAdjust(final String arg) {
        fNameAdjust = arg;
    }

    /**
     * Ant�^�X�N��[nameAdjust]�A�g���r���[�g�̃Q�b�^�[���\�b�h�B
     *
     * ���ڔԍ�: 4<br>
     * �t�B�[���h���⃁�\�b�h���𖼑O�ό`�����{���邩�ǂ����B<br>
     * �f�t�H���g�l[true]���ݒ肳��Ă��܂��BApache Ant�^�X�N��ŃA�g���r���[�g�̎w�肪�����ꍇ�ɂ́A�f�t�H���g�l���ݒ肳��܂��B<br>
     *
     * @return ���̃t�B�[���h�̒l
     */
    public String getNameAdjust() {
        return fNameAdjust;
    }

    /**
     * ���ۂ�AntTask�̏����ɂ��āA���̃��\�b�h���I�[�o�[���C�h���܂��B
     *
     * @throws IllegalArgumentException ��������o�͂Ȃǂɂ��ė�O�����������ꍇ�B
     */
    protected abstract void process() throws IllegalArgumentException;

    /**
     * Ant�^�X�N�̃��C�������BApache Ant���� ���̃��\�b�h���Ăяo����܂��B
     *
     * @throws BuildException �^�X�N�Ƃ��Ă̗�O�����������ꍇ�B
     */
    public final void execute() throws BuildException {
        System.out.println("BlancoValueObjectPhpTask begin.");

        // ���ڔԍ�[1]�A�A�g���r���[�g[metadir]�͕K�{���͂ł��B���̓`�F�b�N���s���܂��B
        if (getMetadir() == null) {
            throw new BuildException("�A�g���r���[�g[metadir]���ݒ肳��Ă��܂���B�����𒆒f���܂��B");
        }
        // ���ڔԍ�[2]�A�A�g���r���[�g[targetdir]�ɂ̓f�t�H���g���ݒ肳��Ă��܂��B���͂�null�̏ꍇ�ɂ̓f�t�H���g�l���Z�b�g���܂��B
        if (getTargetdir() == null) {
            setTargetdir("blanco");
        }
        // ���ڔԍ�[3]�A�A�g���r���[�g[tmpdir]�ɂ̓f�t�H���g���ݒ肳��Ă��܂��B���͂�null�̏ꍇ�ɂ̓f�t�H���g�l���Z�b�g���܂��B
        if (getTmpdir() == null) {
            setTmpdir("tmp");
        }
        // ���ڔԍ�[4]�A�A�g���r���[�g[nameAdjust]�ɂ̓f�t�H���g���ݒ肳��Ă��܂��B���͂�null�̏ꍇ�ɂ̓f�t�H���g�l���Z�b�g���܂��B
        if (getNameAdjust() == null) {
            setNameAdjust("true");
        }

        if ("true".equals(getVerbose())) {
            System.out.println("- verbose:[true]");
            System.out.println("- metadir:[" + getMetadir() + "]");
            System.out.println("- targetdir:[" + getTargetdir() + "]");
            System.out.println("- tmpdir:[" + getTmpdir() + "]");
            System.out.println("- nameAdjust:[" + getNameAdjust() + "]");
        }

        try {
            // ���ۂ�Ant�^�X�N�̎又�������s���܂��B
            process();
        } catch (IllegalArgumentException e) {
            if ("true".equals(getVerbose())) {
                e.printStackTrace();
            }
            throw new BuildException(e.getMessage());
        } catch (Exception e) {
            e.printStackTrace();
            throw new BuildException("�^�X�N���������ɗ�O���������܂����B�����𒆒f���܂��B" + e.toString());
        } catch (Error e) {
            e.printStackTrace();
            throw new BuildException("�^�X�N���������ɃG���[���������܂����B�����𒆒f���܂��B" + e.toString());
        }
    }
}
