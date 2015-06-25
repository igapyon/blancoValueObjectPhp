<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

/*. require_module 'standard'; .*/;

/**
 */
class Car {
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
     * �t�B�[���h [number]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fNumber;

    /**
     * �t�B�[���h [timePrice]
     *
     * ���ڂ̌^ [integer]
     * 10��������̎��ԒP��
     */
    private /*.int.*/ $fTimePrice;

    /**
     * �t�B�[���h [milePrice]
     *
     * ���ڂ̌^ [integer]
     * �����P��
     */
    private /*.int.*/ $fMilePrice;

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
            throw new Exception('[ArgumentException]: Car.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Car.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
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
            throw new Exception('[ArgumentException]: Car.setName �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setName ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argName) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Car.getName �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fName;
    }

    /**
     * �t�B�[���h [number]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argNumber �t�B�[���h[number]�Ɋi�[�������l
     */
    public /*.void.*/ function setNumber(/*.string.*/ $argNumber) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Car.setNumber �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argNumber) !== 'string' && gettype($argNumber) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setNumber ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argNumber) . ']�^���^�����܂����B');
        }

        $this->fNumber = $argNumber;
    }

    /**
     * �t�B�[���h[number]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[number]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getNumber() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Car.getNumber �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fNumber;
    }

    /**
     * �t�B�[���h [timePrice]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * 10��������̎��ԒP��
     *
     * @param integer $argTimePrice �t�B�[���h[timePrice]�Ɋi�[�������l
     */
    public /*.void.*/ function setTimePrice(/*.int.*/ $argTimePrice) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Car.setTimePrice �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argTimePrice) !== 'integer' && gettype($argTimePrice) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setTimePrice ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argTimePrice) . ']�^���^�����܂����B');
        }

        $this->fTimePrice = $argTimePrice;
    }

    /**
     * �t�B�[���h[timePrice]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * 10��������̎��ԒP��
     *
     * @return integer �t�B�[���h[timePrice]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getTimePrice() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Car.getTimePrice �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fTimePrice;
    }

    /**
     * �t�B�[���h [milePrice]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �����P��
     *
     * @param integer $argMilePrice �t�B�[���h[milePrice]�Ɋi�[�������l
     */
    public /*.void.*/ function setMilePrice(/*.int.*/ $argMilePrice) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Car.setMilePrice �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argMilePrice) !== 'integer' && gettype($argMilePrice) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setMilePrice ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argMilePrice) . ']�^���^�����܂����B');
        }

        $this->fMilePrice = $argMilePrice;
    }

    /**
     * �t�B�[���h[milePrice]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �����P��
     *
     * @return integer �t�B�[���h[milePrice]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getMilePrice() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Car.getMilePrice �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMilePrice;
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
            throw new Exception('[ArgumentException]: Car.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.Car[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',name=' . $this->fName;
        $buf = $buf . ',number=' . $this->fNumber;
        $buf = $buf . ',timePrice=' . (string) $this->fTimePrice;
        $buf = $buf . ',milePrice=' . (string) $this->fMilePrice;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
