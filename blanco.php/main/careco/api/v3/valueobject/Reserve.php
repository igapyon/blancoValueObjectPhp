<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('Car.php');
require_once('Plan.php');
require_once('Station.php');
/*. require_module 'standard'; .*/;

/**
 */
class Reserve {
    /**
     * �t�B�[���h [id]
     *
     * ���ڂ̌^ [integer]
     */
    private /*.int.*/ $fId;

    /**
     * �t�B�[���h [station]
     *
     * ���ڂ̌^ [Station]
     */
    private /*.Station.*/ $fStation;

    /**
     * �t�B�[���h [car]
     *
     * ���ڂ̌^ [Car]
     */
    private /*.Car.*/ $fCar;

    /**
     * �t�B�[���h [from]
     *
     * ���ڂ̌^ [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     */
    private /*.string.*/ $fFrom;

    /**
     * �t�B�[���h [to]
     *
     * ���ڂ̌^ [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     */
    private /*.string.*/ $fTo;

    /**
     * �t�B�[���h [change]
     *
     * ���ڂ̌^ [boolean]
     * �\��̕ύX���\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     */
    private /*.boolean.*/ $fChange;

    /**
     * �t�B�[���h [expand]
     *
     * ���ڂ̌^ [boolean]
     * �\��̉������\���ǂ����B�ύX�Ɖ����̂ǂ�����\�Ƃ������Ƃ͂���܂���
     */
    private /*.boolean.*/ $fExpand;

    /**
     * �t�B�[���h [cancel]
     *
     * ���ڂ̌^ [boolean]
     * �\��̃L�����Z�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     */
    private /*.boolean.*/ $fCancel;

    /**
     * �t�B�[���h [begin]
     *
     * ���ڂ̌^ [boolean]
     * ���p�J�n���\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     */
    private /*.boolean.*/ $fBegin;

    /**
     * �t�B�[���h [end]
     *
     * ���ڂ̌^ [boolean]
     * ���p�I�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     */
    private /*.boolean.*/ $fEnd;

    /**
     * �t�B�[���h [open]
     *
     * ���ڂ̌^ [boolean]
     * �J�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     */
    private /*.boolean.*/ $fOpen;

    /**
     * �t�B�[���h [close]
     *
     * ���ڂ̌^ [boolean]
     * �{�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     */
    private /*.boolean.*/ $fClose;

    /**
     * �t�B�[���h [moveup]
     *
     * ���ڂ̌^ [boolean]
     * 10���O�|�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     */
    private /*.boolean.*/ $fMoveup;

    /**
     * �t�B�[���h [withinOneDays]
     *
     * ���ڂ̌^ [boolean]
     * �\��24���Ԉȓ����ǂ����B24���Ԉȓ��̏ꍇ��1�A24���Ԃ�葽���ꍇ��0
     */
    private /*.boolean.*/ $fWithinOneDays;

    /**
     * �t�B�[���h [price]
     *
     * ���ڂ̌^ [integer]
     * �T�Z����
     */
    private /*.int.*/ $fPrice;

    /**
     * �t�B�[���h [pack]
     *
     * ���ڂ̌^ [string]
     * �p�b�N�K�p������
     */
    private /*.string.*/ $fPack;

    /**
     * �t�B�[���h [plan]
     *
     * ���ڂ̌^ [Plan]
     * �����v����
     */
    private /*.Plan.*/ $fPlan;

    /**
     * �t�B�[���h [totalTime]
     *
     * ���ڂ̌^ [string]
     * �\�񎞊�
     */
    private /*.string.*/ $fTotalTime;

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
            throw new Exception('[ArgumentException]: Reserve.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Reserve.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
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
            throw new Exception('[ArgumentException]: Reserve.setStation �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argStation instanceof Station === FALSE) {
            throw new Exception('[ArgumentException]: Reserve.setStation ��1�Ԗڂ̃p�����[�^��[Station]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argStation) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Reserve.getStation �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fStation;
    }

    /**
     * �t�B�[���h [car]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Car]
     *
     * @param Car $argCar �t�B�[���h[car]�Ɋi�[�������l
     */
    public /*.void.*/ function setCar(/*.Car.*/ $argCar) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setCar �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argCar instanceof Car === FALSE) {
            throw new Exception('[ArgumentException]: Reserve.setCar ��1�Ԗڂ̃p�����[�^��[Car]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argCar) . ']�^���^�����܂����B');
        }

        $this->fCar = $argCar;
    }

    /**
     * �t�B�[���h[car]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Car]
     *
     * @return Car �t�B�[���h[car]�Ɋi�[����Ă���l
     */
    public /*.Car.*/ function getCar() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getCar �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fCar;
    }

    /**
     * �t�B�[���h [from]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @param string $argFrom �t�B�[���h[from]�Ɋi�[�������l
     */
    public /*.void.*/ function setFrom(/*.string.*/ $argFrom) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setFrom �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argFrom) !== 'string' && gettype($argFrom) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setFrom ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argFrom) . ']�^���^�����܂����B');
        }

        $this->fFrom = $argFrom;
    }

    /**
     * �t�B�[���h[from]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @return string �t�B�[���h[from]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getFrom() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getFrom �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fFrom;
    }

    /**
     * �t�B�[���h [to]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @param string $argTo �t�B�[���h[to]�Ɋi�[�������l
     */
    public /*.void.*/ function setTo(/*.string.*/ $argTo) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setTo �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argTo) !== 'string' && gettype($argTo) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setTo ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argTo) . ']�^���^�����܂����B');
        }

        $this->fTo = $argTo;
    }

    /**
     * �t�B�[���h[to]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @return string �t�B�[���h[to]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getTo() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getTo �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fTo;
    }

    /**
     * �t�B�[���h [change]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��̕ύX���\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @param boolean $argChange �t�B�[���h[change]�Ɋi�[�������l
     */
    public /*.void.*/ function setChange(/*.boolean.*/ $argChange) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setChange �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argChange) !== 'boolean' && gettype($argChange) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setChange ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argChange) . ']�^���^�����܂����B');
        }

        $this->fChange = $argChange;
    }

    /**
     * �t�B�[���h[change]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��̕ύX���\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @return boolean �t�B�[���h[change]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getChange() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getChange �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fChange;
    }

    /**
     * �t�B�[���h [expand]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��̉������\���ǂ����B�ύX�Ɖ����̂ǂ�����\�Ƃ������Ƃ͂���܂���
     *
     * @param boolean $argExpand �t�B�[���h[expand]�Ɋi�[�������l
     */
    public /*.void.*/ function setExpand(/*.boolean.*/ $argExpand) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setExpand �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argExpand) !== 'boolean' && gettype($argExpand) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setExpand ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argExpand) . ']�^���^�����܂����B');
        }

        $this->fExpand = $argExpand;
    }

    /**
     * �t�B�[���h[expand]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��̉������\���ǂ����B�ύX�Ɖ����̂ǂ�����\�Ƃ������Ƃ͂���܂���
     *
     * @return boolean �t�B�[���h[expand]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getExpand() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getExpand �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fExpand;
    }

    /**
     * �t�B�[���h [cancel]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��̃L�����Z�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @param boolean $argCancel �t�B�[���h[cancel]�Ɋi�[�������l
     */
    public /*.void.*/ function setCancel(/*.boolean.*/ $argCancel) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setCancel �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argCancel) !== 'boolean' && gettype($argCancel) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setCancel ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argCancel) . ']�^���^�����܂����B');
        }

        $this->fCancel = $argCancel;
    }

    /**
     * �t�B�[���h[cancel]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��̃L�����Z�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @return boolean �t�B�[���h[cancel]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getCancel() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getCancel �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fCancel;
    }

    /**
     * �t�B�[���h [begin]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * ���p�J�n���\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @param boolean $argBegin �t�B�[���h[begin]�Ɋi�[�������l
     */
    public /*.void.*/ function setBegin(/*.boolean.*/ $argBegin) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setBegin �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argBegin) !== 'boolean' && gettype($argBegin) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setBegin ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argBegin) . ']�^���^�����܂����B');
        }

        $this->fBegin = $argBegin;
    }

    /**
     * �t�B�[���h[begin]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * ���p�J�n���\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @return boolean �t�B�[���h[begin]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getBegin() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getBegin �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fBegin;
    }

    /**
     * �t�B�[���h [end]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * ���p�I�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @param boolean $argEnd �t�B�[���h[end]�Ɋi�[�������l
     */
    public /*.void.*/ function setEnd(/*.boolean.*/ $argEnd) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setEnd �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argEnd) !== 'boolean' && gettype($argEnd) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setEnd ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argEnd) . ']�^���^�����܂����B');
        }

        $this->fEnd = $argEnd;
    }

    /**
     * �t�B�[���h[end]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * ���p�I�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @return boolean �t�B�[���h[end]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getEnd() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getEnd �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fEnd;
    }

    /**
     * �t�B�[���h [open]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �J�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @param boolean $argOpen �t�B�[���h[open]�Ɋi�[�������l
     */
    public /*.void.*/ function setOpen(/*.boolean.*/ $argOpen) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setOpen �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argOpen) !== 'boolean' && gettype($argOpen) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setOpen ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argOpen) . ']�^���^�����܂����B');
        }

        $this->fOpen = $argOpen;
    }

    /**
     * �t�B�[���h[open]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �J�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @return boolean �t�B�[���h[open]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getOpen() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getOpen �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fOpen;
    }

    /**
     * �t�B�[���h [close]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �{�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @param boolean $argClose �t�B�[���h[close]�Ɋi�[�������l
     */
    public /*.void.*/ function setClose(/*.boolean.*/ $argClose) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setClose �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argClose) !== 'boolean' && gettype($argClose) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setClose ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argClose) . ']�^���^�����܂����B');
        }

        $this->fClose = $argClose;
    }

    /**
     * �t�B�[���h[close]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �{�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @return boolean �t�B�[���h[close]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getClose() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getClose �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fClose;
    }

    /**
     * �t�B�[���h [moveup]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * 10���O�|�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @param boolean $argMoveup �t�B�[���h[moveup]�Ɋi�[�������l
     */
    public /*.void.*/ function setMoveup(/*.boolean.*/ $argMoveup) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setMoveup �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argMoveup) !== 'boolean' && gettype($argMoveup) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setMoveup ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argMoveup) . ']�^���^�����܂����B');
        }

        $this->fMoveup = $argMoveup;
    }

    /**
     * �t�B�[���h[moveup]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * 10���O�|�����\���ǂ����B�\�ȏꍇ��1�A�s�\�ȏꍇ��0
     *
     * @return boolean �t�B�[���h[moveup]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getMoveup() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getMoveup �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMoveup;
    }

    /**
     * �t�B�[���h [withinOneDays]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��24���Ԉȓ����ǂ����B24���Ԉȓ��̏ꍇ��1�A24���Ԃ�葽���ꍇ��0
     *
     * @param boolean $argWithinOneDays �t�B�[���h[withinOneDays]�Ɋi�[�������l
     */
    public /*.void.*/ function setWithinOneDays(/*.boolean.*/ $argWithinOneDays) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setWithinOneDays �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argWithinOneDays) !== 'boolean' && gettype($argWithinOneDays) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setWithinOneDays ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argWithinOneDays) . ']�^���^�����܂����B');
        }

        $this->fWithinOneDays = $argWithinOneDays;
    }

    /**
     * �t�B�[���h[withinOneDays]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �\��24���Ԉȓ����ǂ����B24���Ԉȓ��̏ꍇ��1�A24���Ԃ�葽���ꍇ��0
     *
     * @return boolean �t�B�[���h[withinOneDays]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getWithinOneDays() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getWithinOneDays �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fWithinOneDays;
    }

    /**
     * �t�B�[���h [price]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �T�Z����
     *
     * @param integer $argPrice �t�B�[���h[price]�Ɋi�[�������l
     */
    public /*.void.*/ function setPrice(/*.int.*/ $argPrice) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setPrice �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argPrice) !== 'integer' && gettype($argPrice) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setPrice ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argPrice) . ']�^���^�����܂����B');
        }

        $this->fPrice = $argPrice;
    }

    /**
     * �t�B�[���h[price]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �T�Z����
     *
     * @return integer �t�B�[���h[price]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getPrice() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getPrice �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fPrice;
    }

    /**
     * �t�B�[���h [pack]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * �p�b�N�K�p������
     *
     * @param string $argPack �t�B�[���h[pack]�Ɋi�[�������l
     */
    public /*.void.*/ function setPack(/*.string.*/ $argPack) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setPack �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argPack) !== 'string' && gettype($argPack) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setPack ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argPack) . ']�^���^�����܂����B');
        }

        $this->fPack = $argPack;
    }

    /**
     * �t�B�[���h[pack]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * �p�b�N�K�p������
     *
     * @return string �t�B�[���h[pack]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getPack() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getPack �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fPack;
    }

    /**
     * �t�B�[���h [plan]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Plan]
     * �����v����
     *
     * @param Plan $argPlan �t�B�[���h[plan]�Ɋi�[�������l
     */
    public /*.void.*/ function setPlan(/*.Plan.*/ $argPlan) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setPlan �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argPlan instanceof Plan === FALSE) {
            throw new Exception('[ArgumentException]: Reserve.setPlan ��1�Ԗڂ̃p�����[�^��[Plan]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argPlan) . ']�^���^�����܂����B');
        }

        $this->fPlan = $argPlan;
    }

    /**
     * �t�B�[���h[plan]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Plan]
     * �����v����
     *
     * @return Plan �t�B�[���h[plan]�Ɋi�[����Ă���l
     */
    public /*.Plan.*/ function getPlan() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getPlan �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fPlan;
    }

    /**
     * �t�B�[���h [totalTime]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * �\�񎞊�
     *
     * @param string $argTotalTime �t�B�[���h[totalTime]�Ɋi�[�������l
     */
    public /*.void.*/ function setTotalTime(/*.string.*/ $argTotalTime) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setTotalTime �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argTotalTime) !== 'string' && gettype($argTotalTime) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setTotalTime ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argTotalTime) . ']�^���^�����܂����B');
        }

        $this->fTotalTime = $argTotalTime;
    }

    /**
     * �t�B�[���h[totalTime]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     * �\�񎞊�
     *
     * @return string �t�B�[���h[totalTime]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getTotalTime() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getTotalTime �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fTotalTime;
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
            throw new Exception('[ArgumentException]: Reserve.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.Reserve[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',station=' . (string) $this->fStation;
        $buf = $buf . ',car=' . (string) $this->fCar;
        $buf = $buf . ',from=' . $this->fFrom;
        $buf = $buf . ',to=' . $this->fTo;
        $buf = $buf . ',change=' . ($this->fChange ? 'true' : 'false');
        $buf = $buf . ',expand=' . ($this->fExpand ? 'true' : 'false');
        $buf = $buf . ',cancel=' . ($this->fCancel ? 'true' : 'false');
        $buf = $buf . ',begin=' . ($this->fBegin ? 'true' : 'false');
        $buf = $buf . ',end=' . ($this->fEnd ? 'true' : 'false');
        $buf = $buf . ',open=' . ($this->fOpen ? 'true' : 'false');
        $buf = $buf . ',close=' . ($this->fClose ? 'true' : 'false');
        $buf = $buf . ',moveup=' . ($this->fMoveup ? 'true' : 'false');
        $buf = $buf . ',withinOneDays=' . ($this->fWithinOneDays ? 'true' : 'false');
        $buf = $buf . ',price=' . (string) $this->fPrice;
        $buf = $buf . ',pack=' . $this->fPack;
        $buf = $buf . ',plan=' . (string) $this->fPlan;
        $buf = $buf . ',totalTime=' . $this->fTotalTime;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
