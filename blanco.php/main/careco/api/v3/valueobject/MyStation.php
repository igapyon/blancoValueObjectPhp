<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('Station.php');
/*. require_module 'standard'; .*/;

/**
 * Station��mystationID���ӂ��邽�߃N���X���K�v�H
 */
class MyStation {
    /**
     * �t�B�[���h [id]
     *
     * ���ڂ̌^ [integer]
     * myStationID
     */
    private /*.int.*/ $fId;

    /**
     * �t�B�[���h [station]
     *
     * ���ڂ̌^ [Station]
     */
    private /*.Station.*/ $fStation;

    /**
     * �t�B�[���h [id]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * myStationID
     *
     * @param integer $argId �t�B�[���h[id]�Ɋi�[�������l
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: MyStation.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: MyStation.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
        }

        $this->fId = $argId;
    }

    /**
     * �t�B�[���h[id]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * myStationID
     *
     * @return integer �t�B�[���h[id]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getId() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: MyStation.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fId;
    }

    /**
     * �t�B�[���h [station]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Station]
     *
     * @param Station $argStation �t�B�[���h[station]�Ɋi�[�������l
     */
    public /*.void.*/ function setStation(/*.Station.*/ $argStation) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: MyStation.setStation �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argStation instanceof Station === FALSE) {
            throw new Exception('[ArgumentException]: MyStation.setStation ��1�Ԗڂ̃p�����[�^��[Station]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argStation) . ']�^���^�����܂����B');
        }

        $this->fStation = $argStation;
    }

    /**
     * �t�B�[���h[station]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Station]
     *
     * @return Station �t�B�[���h[station]�Ɋi�[����Ă���l
     */
    public /*.Station.*/ function getStation() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: MyStation.getStation �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fStation;
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
            throw new Exception('[ArgumentException]: MyStation.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.MyStation[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',station=' . (string) $this->fStation;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
