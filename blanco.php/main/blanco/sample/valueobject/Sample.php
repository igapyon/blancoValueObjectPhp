<?php
/*
 * �o�����[�I�u�W�F�N�g�̃T���v���B���̃N���X�͒P�ɃT���v���ł��B���ۂ̓���ɂ͗��p����܂���B
 */
/*. DOC <@package blanco.sample.valueobject;>.*/

/*. require_module 'standard'; .*/;

/**
 * �o�����[�I�u�W�F�N�g�̃T���v���B���̃N���X�͒P�ɃT���v���ł��B���ۂ̓���ɂ͗��p����܂���B
 */
class Sample {
    /**
     * �t�B�[���h [stringField1]
     *
     * ���ڂ̌^ [string]
     * �f�t�H���g�l����
     */
    private /*.string.*/ $fStringField1 = '�f�t�H���g';

    /**
     * �t�B�[���h [stringField2]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fStringField2;

    /**
     * �t�B�[���h [booleanField1]
     *
     * ���ڂ̌^ [boolean]
     * �f�t�H���g�l����
     */
    private /*.boolean.*/ $fBooleanField1 = false;

    /**
     * �t�B�[���h [booleanField2]
     *
     * ���ڂ̌^ [boolean]
     */
    private /*.boolean.*/ $fBooleanField2;

    /**
     * �t�B�[���h [intField1]
     *
     * ���ڂ̌^ [integer]
     * �f�t�H���g�l����
     */
    private /*.int.*/ $fIntField1 = 123;

    /**
     * �t�B�[���h [intField2]
     *
     * ���ڂ̌^ [integer]
     */
    private /*.int.*/ $fIntField2;

    /**
     * �t�B�[���h [floatField1]
     *
     * ���ڂ̌^ [float]
     * �f�t�H���g�l����
     */
    private /*.float.*/ $fFloatField1 = 123.456;

    /**
     * �t�B�[���h [floatField2]
     *
     * ���ڂ̌^ [float]
     */
    private /*.float.*/ $fFloatField2;

    /**
     * �t�B�[���h [doubleField1]
     *
     * ���ڂ̌^ [double]
     * �f�t�H���g�l����
     */
    private /*.float.*/ $fDoubleField1 = 123.456;

    /**
     * �t�B�[���h [doubleField2]
     *
     * ���ڂ̌^ [double]
     */
    private /*.float.*/ $fDoubleField2;

    /**
     * �t�B�[���h [stringField1]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * �f�t�H���g�l����
     *
     * @param string $argStringField1 �t�B�[���h[stringField1]�Ɋi�[�������l
     */
    public /*.void.*/ function setStringField1(/*.string.*/ $argStringField1) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setStringField1 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argStringField1) !== 'string' && gettype($argStringField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setStringField1 ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argStringField1) . ']�^���^�����܂����B');
        }

        $this->fStringField1 = $argStringField1;
    }

    /**
     * �t�B�[���h[stringField1]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * �K��l   [�f�t�H���g]
     * �f�t�H���g�l����
     *
     * @return string �t�B�[���h[stringField1]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getStringField1() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getStringField1 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fStringField1;
    }

    /**
     * �t�B�[���h [stringField2]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argStringField2 �t�B�[���h[stringField2]�Ɋi�[�������l
     */
    public /*.void.*/ function setStringField2(/*.string.*/ $argStringField2) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setStringField2 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argStringField2) !== 'string' && gettype($argStringField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setStringField2 ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argStringField2) . ']�^���^�����܂����B');
        }

        $this->fStringField2 = $argStringField2;
    }

    /**
     * �t�B�[���h[stringField2]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[stringField2]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getStringField2() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getStringField2 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fStringField2;
    }

    /**
     * �t�B�[���h [booleanField1]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �f�t�H���g�l����
     *
     * @param boolean $argBooleanField1 �t�B�[���h[booleanField1]�Ɋi�[�������l
     */
    public /*.void.*/ function setBooleanField1(/*.boolean.*/ $argBooleanField1) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setBooleanField1 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argBooleanField1) !== 'boolean' && gettype($argBooleanField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setBooleanField1 ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argBooleanField1) . ']�^���^�����܂����B');
        }

        $this->fBooleanField1 = $argBooleanField1;
    }

    /**
     * �t�B�[���h[booleanField1]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �K��l   [false]
     * �f�t�H���g�l����
     *
     * @return boolean �t�B�[���h[booleanField1]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getBooleanField1() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getBooleanField1 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fBooleanField1;
    }

    /**
     * �t�B�[���h [booleanField2]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     *
     * @param boolean $argBooleanField2 �t�B�[���h[booleanField2]�Ɋi�[�������l
     */
    public /*.void.*/ function setBooleanField2(/*.boolean.*/ $argBooleanField2) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setBooleanField2 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argBooleanField2) !== 'boolean' && gettype($argBooleanField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setBooleanField2 ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argBooleanField2) . ']�^���^�����܂����B');
        }

        $this->fBooleanField2 = $argBooleanField2;
    }

    /**
     * �t�B�[���h[booleanField2]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     *
     * @return boolean �t�B�[���h[booleanField2]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getBooleanField2() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getBooleanField2 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fBooleanField2;
    }

    /**
     * �t�B�[���h [intField1]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �f�t�H���g�l����
     *
     * @param integer $argIntField1 �t�B�[���h[intField1]�Ɋi�[�������l
     */
    public /*.void.*/ function setIntField1(/*.int.*/ $argIntField1) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setIntField1 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argIntField1) !== 'integer' && gettype($argIntField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setIntField1 ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argIntField1) . ']�^���^�����܂����B');
        }

        $this->fIntField1 = $argIntField1;
    }

    /**
     * �t�B�[���h[intField1]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �K��l   [123]
     * �f�t�H���g�l����
     *
     * @return integer �t�B�[���h[intField1]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getIntField1() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getIntField1 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fIntField1;
    }

    /**
     * �t�B�[���h [intField2]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     *
     * @param integer $argIntField2 �t�B�[���h[intField2]�Ɋi�[�������l
     */
    public /*.void.*/ function setIntField2(/*.int.*/ $argIntField2) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setIntField2 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argIntField2) !== 'integer' && gettype($argIntField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setIntField2 ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argIntField2) . ']�^���^�����܂����B');
        }

        $this->fIntField2 = $argIntField2;
    }

    /**
     * �t�B�[���h[intField2]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     *
     * @return integer �t�B�[���h[intField2]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getIntField2() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getIntField2 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fIntField2;
    }

    /**
     * �t�B�[���h [floatField1]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [float]
     * �f�t�H���g�l����
     *
     * @param float $argFloatField1 �t�B�[���h[floatField1]�Ɋi�[�������l
     */
    public /*.void.*/ function setFloatField1(/*.float.*/ $argFloatField1) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setFloatField1 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argFloatField1) !== 'double' && gettype($argFloatField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setFloatField1 ��1�Ԗڂ̃p�����[�^��[float]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argFloatField1) . ']�^���^�����܂����B');
        }

        $this->fFloatField1 = $argFloatField1;
    }

    /**
     * �t�B�[���h[floatField1]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [float]
     * �K��l   [123.456]
     * �f�t�H���g�l����
     *
     * @return float �t�B�[���h[floatField1]�Ɋi�[����Ă���l
     */
    public /*.float.*/ function getFloatField1() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getFloatField1 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fFloatField1;
    }

    /**
     * �t�B�[���h [floatField2]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [float]
     *
     * @param float $argFloatField2 �t�B�[���h[floatField2]�Ɋi�[�������l
     */
    public /*.void.*/ function setFloatField2(/*.float.*/ $argFloatField2) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setFloatField2 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argFloatField2) !== 'double' && gettype($argFloatField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setFloatField2 ��1�Ԗڂ̃p�����[�^��[float]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argFloatField2) . ']�^���^�����܂����B');
        }

        $this->fFloatField2 = $argFloatField2;
    }

    /**
     * �t�B�[���h[floatField2]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [float]
     *
     * @return float �t�B�[���h[floatField2]�Ɋi�[����Ă���l
     */
    public /*.float.*/ function getFloatField2() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getFloatField2 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fFloatField2;
    }

    /**
     * �t�B�[���h [doubleField1]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [double]
     * �f�t�H���g�l����
     *
     * @param double $argDoubleField1 �t�B�[���h[doubleField1]�Ɋi�[�������l
     */
    public /*.void.*/ function setDoubleField1(/*.float.*/ $argDoubleField1) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setDoubleField1 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argDoubleField1) !== 'double' && gettype($argDoubleField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setDoubleField1 ��1�Ԗڂ̃p�����[�^��[double]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argDoubleField1) . ']�^���^�����܂����B');
        }

        $this->fDoubleField1 = $argDoubleField1;
    }

    /**
     * �t�B�[���h[doubleField1]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [double]
     * �K��l   [123.456]
     * �f�t�H���g�l����
     *
     * @return double �t�B�[���h[doubleField1]�Ɋi�[����Ă���l
     */
    public /*.float.*/ function getDoubleField1() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getDoubleField1 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fDoubleField1;
    }

    /**
     * �t�B�[���h [doubleField2]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [double]
     *
     * @param double $argDoubleField2 �t�B�[���h[doubleField2]�Ɋi�[�������l
     */
    public /*.void.*/ function setDoubleField2(/*.float.*/ $argDoubleField2) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setDoubleField2 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argDoubleField2) !== 'double' && gettype($argDoubleField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setDoubleField2 ��1�Ԗڂ̃p�����[�^��[double]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argDoubleField2) . ']�^���^�����܂����B');
        }

        $this->fDoubleField2 = $argDoubleField2;
    }

    /**
     * �t�B�[���h[doubleField2]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [double]
     *
     * @return double �t�B�[���h[doubleField2]�Ɋi�[����Ă���l
     */
    public /*.float.*/ function getDoubleField2() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getDoubleField2 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fDoubleField2;
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
            throw new Exception('[ArgumentException]: Sample.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'blanco.sample.valueobject.Sample[';
        $buf = $buf . 'stringField1=' . $this->fStringField1;
        $buf = $buf . ',stringField2=' . $this->fStringField2;
        $buf = $buf . ',booleanField1=' . ($this->fBooleanField1 ? 'true' : 'false');
        $buf = $buf . ',booleanField2=' . ($this->fBooleanField2 ? 'true' : 'false');
        $buf = $buf . ',intField1=' . (string) $this->fIntField1;
        $buf = $buf . ',intField2=' . (string) $this->fIntField2;
        $buf = $buf . ',floatField1=' . (string) $this->fFloatField1;
        $buf = $buf . ',floatField2=' . (string) $this->fFloatField2;
        $buf = $buf . ',doubleField1=' . (string) $this->fDoubleField1;
        $buf = $buf . ',doubleField2=' . (string) $this->fDoubleField2;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
