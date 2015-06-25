<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

/*. require_module 'standard'; .*/;

/**
 */
class CarGrade {
    /**
     * �t�B�[���h [id]
     *
     * ���ڂ̌^ [integer]
     * ����API�̉����ł͖��ݒ�i�d�l���ł͒�`����Ă���j
     */
    private /*.int.*/ $fId;

    /**
     * �t�B�[���h [name]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fName;

    /**
     * �t�B�[���h [mileagePrice]
     *
     * ���ڂ̌^ [integer]
     * ��������
     */
    private /*.int.*/ $fMileagePrice;

    /**
     * �t�B�[���h [id]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ����API�̉����ł͖��ݒ�i�d�l���ł͒�`����Ă���j
     *
     * @param integer $argId �t�B�[���h[id]�Ɋi�[�������l
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: CarGrade.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: CarGrade.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
        }

        $this->fId = $argId;
    }

    /**
     * �t�B�[���h[id]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ����API�̉����ł͖��ݒ�i�d�l���ł͒�`����Ă���j
     *
     * @return integer �t�B�[���h[id]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getId() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: CarGrade.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
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
            throw new Exception('[ArgumentException]: CarGrade.setName �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: CarGrade.setName ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argName) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: CarGrade.getName �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fName;
    }

    /**
     * �t�B�[���h [mileagePrice]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ��������
     *
     * @param integer $argMileagePrice �t�B�[���h[mileagePrice]�Ɋi�[�������l
     */
    public /*.void.*/ function setMileagePrice(/*.int.*/ $argMileagePrice) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: CarGrade.setMileagePrice �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argMileagePrice) !== 'integer' && gettype($argMileagePrice) !== 'NULL') {
            throw new Exception('[ArgumentException]: CarGrade.setMileagePrice ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argMileagePrice) . ']�^���^�����܂����B');
        }

        $this->fMileagePrice = $argMileagePrice;
    }

    /**
     * �t�B�[���h[mileagePrice]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ��������
     *
     * @return integer �t�B�[���h[mileagePrice]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getMileagePrice() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: CarGrade.getMileagePrice �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMileagePrice;
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
            throw new Exception('[ArgumentException]: CarGrade.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.CarGrade[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',name=' . $this->fName;
        $buf = $buf . ',mileagePrice=' . (string) $this->fMileagePrice;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
