<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

/*. require_module 'standard'; .*/;

/**
 * ���ԏ�O���[�h
 */
class ParkingGrade {
    /**
     * �t�B�[���h [id]
     *
     * ���ڂ̌^ [integer]
     */
    private /*.int.*/ $fId;

    /**
     * �t�B�[���h [name]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fName;

    /**
     * �t�B�[���h [kana]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fKana;

    /**
     * �t�B�[���h [id]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     *
     * @param integer $argId �t�B�[���h[id]�Ɋi�[�������l
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: ParkingGrade.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: ParkingGrade.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
        }

        $this->fId = $argId;
    }

    /**
     * �t�B�[���h[id]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     *
     * @return integer �t�B�[���h[id]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getId() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: ParkingGrade.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fId;
    }

    /**
     * �t�B�[���h [name]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argName �t�B�[���h[name]�Ɋi�[�������l
     */
    public /*.void.*/ function setName(/*.string.*/ $argName) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: ParkingGrade.setName �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: ParkingGrade.setName ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argName) . ']�^���^�����܂����B');
        }

        $this->fName = $argName;
    }

    /**
     * �t�B�[���h[name]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[name]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getName() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: ParkingGrade.getName �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fName;
    }

    /**
     * �t�B�[���h [kana]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argKana �t�B�[���h[kana]�Ɋi�[�������l
     */
    public /*.void.*/ function setKana(/*.string.*/ $argKana) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: ParkingGrade.setKana �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argKana) !== 'string' && gettype($argKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: ParkingGrade.setKana ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argKana) . ']�^���^�����܂����B');
        }

        $this->fKana = $argKana;
    }

    /**
     * �t�B�[���h[kana]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[kana]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getKana() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: ParkingGrade.getKana �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fKana;
    }

    /**
     * ���̃o�����[�I�u�W�F�N�g�̕�����\�����擾���܂��B
     *
     * �I�u�W�F�N�g�̃V�����[�͈͂ł���toString����Ȃ��_�ɒ��ӂ��ė��p���Ă��������B
     *
     * @return string �o�����[�I�u�W�F�N�g�̕�����\���B
     */
    public /*.string.*/ function __toString() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: ParkingGrade.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.ParkingGrade[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',name=' . $this->fName;
        $buf = $buf . ',kana=' . $this->fKana;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
