<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('AreaGroup.php');
/*. require_module 'standard'; .*/;

/**
 */
class Area {
    /**
     * �t�B�[���h [id]
     *
     * ���ڂ̌^ [integer]
     * �G���AId
     */
    private /*.int.*/ $fId;

    /**
     * �t�B�[���h [name]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fName;

    /**
     * �t�B�[���h [areagroup]
     *
     * ���ڂ̌^ [AreaGroup]
     * ��������G���A�O���[�v
     */
    private /*.AreaGroup.*/ $fAreagroup;

    /**
     * �t�B�[���h [id]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �G���AId
     *
     * @param integer $argId �t�B�[���h[id]�Ɋi�[�������l
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Area.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Area.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
        }

        $this->fId = $argId;
    }

    /**
     * �t�B�[���h[id]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �G���AId
     *
     * @return integer �t�B�[���h[id]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getId() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Area.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
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
            throw new Exception('[ArgumentException]: Area.setName �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: Area.setName ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argName) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Area.getName �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fName;
    }

    /**
     * �t�B�[���h [areagroup]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [AreaGroup]
     * ��������G���A�O���[�v
     *
     * @param AreaGroup $argAreagroup �t�B�[���h[areagroup]�Ɋi�[�������l
     */
    public /*.void.*/ function setAreagroup(/*.AreaGroup.*/ $argAreagroup) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Area.setAreagroup �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argAreagroup instanceof AreaGroup === FALSE) {
            throw new Exception('[ArgumentException]: Area.setAreagroup ��1�Ԗڂ̃p�����[�^��[AreaGroup]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argAreagroup) . ']�^���^�����܂����B');
        }

        $this->fAreagroup = $argAreagroup;
    }

    /**
     * �t�B�[���h[areagroup]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [AreaGroup]
     * ��������G���A�O���[�v
     *
     * @return AreaGroup �t�B�[���h[areagroup]�Ɋi�[����Ă���l
     */
    public /*.AreaGroup.*/ function getAreagroup() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Area.getAreagroup �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fAreagroup;
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
            throw new Exception('[ArgumentException]: Area.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.Area[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',name=' . $this->fName;
        $buf = $buf . ',areagroup=' . (string) $this->fAreagroup;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
