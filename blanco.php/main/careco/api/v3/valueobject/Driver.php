<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('Area.php');
require_once('MyStation.php');
require_once('Station.php');
/*. require_module 'standard'; .*/;

/**
 */
class Driver {
    /**
     * �t�B�[���h [id]
     *
     * ���ڂ̌^ [integer]
     * �^�]�҃I�[�gID�i���p�����j
     */
    private /*.int.*/ $fId;

    /**
     * �t�B�[���h [kbn]
     *
     * ���ڂ̌^ [integer]
     * ����敪 (1�F�@�l�A2�F�l)
     */
    private /*.int.*/ $fKbn;

    /**
     * �t�B�[���h [loginID]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fLoginID;

    /**
     * �t�B�[���h [fname]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fFname;

    /**
     * �t�B�[���h [lname]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fLname;

    /**
     * �t�B�[���h [fnameKana]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fFnameKana;

    /**
     * �t�B�[���h [lnameKana]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fLnameKana;

    /**
     * �t�B�[���h [tel]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fTel;

    /**
     * �t�B�[���h [mail]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fMail;

    /**
     * �t�B�[���h [myArea]
     *
     * ���ڂ̌^ [Area]
     */
    private /*.Area.*/ $fMyArea;

    /**
     * �t�B�[���h [myStation]
     *
     * ���ڂ̌^ [MyStation[]]
     */
    private /*.MyStation[].*/ $fMyStation;

    /**
     * �t�B�[���h [myStationHistory]
     *
     * ���ڂ̌^ [Station[]]
     */
    private /*.Station[].*/ $fMyStationHistory;

    /**
     * �t�B�[���h [reserveLimit]
     *
     * ���ڂ̌^ [integer]
     * �\�񐧌��{���B-1�F������
     */
    private /*.int.*/ $fReserveLimit;

    /**
     * �t�B�[���h [reserveNum]
     *
     * ���ڂ̌^ [integer]
     * ���݂̗\��
     */
    private /*.int.*/ $fReserveNum;

    /**
     * �t�B�[���h [isAdmin]
     *
     * ���ڂ̌^ [boolean]
     * �Ǘ��҃t���O�B0�F�����A1�F�L��
     */
    private /*.boolean.*/ $fIsAdmin;

    /**
     * �t�B�[���h [id]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �^�]�҃I�[�gID�i���p�����j
     *
     * @param integer $argId �t�B�[���h[id]�Ɋi�[�������l
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
        }

        $this->fId = $argId;
    }

    /**
     * �t�B�[���h[id]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �^�]�҃I�[�gID�i���p�����j
     *
     * @return integer �t�B�[���h[id]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getId() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fId;
    }

    /**
     * �t�B�[���h [kbn]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ����敪 (1�F�@�l�A2�F�l)
     *
     * @param integer $argKbn �t�B�[���h[kbn]�Ɋi�[�������l
     */
    public /*.void.*/ function setKbn(/*.int.*/ $argKbn) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setKbn �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argKbn) !== 'integer' && gettype($argKbn) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setKbn ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argKbn) . ']�^���^�����܂����B');
        }

        $this->fKbn = $argKbn;
    }

    /**
     * �t�B�[���h[kbn]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ����敪 (1�F�@�l�A2�F�l)
     *
     * @return integer �t�B�[���h[kbn]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getKbn() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getKbn �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fKbn;
    }

    /**
     * �t�B�[���h [loginID]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argLoginID �t�B�[���h[loginID]�Ɋi�[�������l
     */
    public /*.void.*/ function setLoginID(/*.string.*/ $argLoginID) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setLoginID �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argLoginID) !== 'string' && gettype($argLoginID) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setLoginID ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argLoginID) . ']�^���^�����܂����B');
        }

        $this->fLoginID = $argLoginID;
    }

    /**
     * �t�B�[���h[loginID]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[loginID]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getLoginID() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getLoginID �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fLoginID;
    }

    /**
     * �t�B�[���h [fname]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argFname �t�B�[���h[fname]�Ɋi�[�������l
     */
    public /*.void.*/ function setFname(/*.string.*/ $argFname) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setFname �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argFname) !== 'string' && gettype($argFname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setFname ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argFname) . ']�^���^�����܂����B');
        }

        $this->fFname = $argFname;
    }

    /**
     * �t�B�[���h[fname]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[fname]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getFname() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getFname �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fFname;
    }

    /**
     * �t�B�[���h [lname]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argLname �t�B�[���h[lname]�Ɋi�[�������l
     */
    public /*.void.*/ function setLname(/*.string.*/ $argLname) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setLname �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argLname) !== 'string' && gettype($argLname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setLname ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argLname) . ']�^���^�����܂����B');
        }

        $this->fLname = $argLname;
    }

    /**
     * �t�B�[���h[lname]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[lname]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getLname() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getLname �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fLname;
    }

    /**
     * �t�B�[���h [fnameKana]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argFnameKana �t�B�[���h[fnameKana]�Ɋi�[�������l
     */
    public /*.void.*/ function setFnameKana(/*.string.*/ $argFnameKana) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setFnameKana �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argFnameKana) !== 'string' && gettype($argFnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setFnameKana ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argFnameKana) . ']�^���^�����܂����B');
        }

        $this->fFnameKana = $argFnameKana;
    }

    /**
     * �t�B�[���h[fnameKana]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[fnameKana]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getFnameKana() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getFnameKana �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fFnameKana;
    }

    /**
     * �t�B�[���h [lnameKana]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argLnameKana �t�B�[���h[lnameKana]�Ɋi�[�������l
     */
    public /*.void.*/ function setLnameKana(/*.string.*/ $argLnameKana) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setLnameKana �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argLnameKana) !== 'string' && gettype($argLnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setLnameKana ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argLnameKana) . ']�^���^�����܂����B');
        }

        $this->fLnameKana = $argLnameKana;
    }

    /**
     * �t�B�[���h[lnameKana]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[lnameKana]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getLnameKana() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getLnameKana �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fLnameKana;
    }

    /**
     * �t�B�[���h [tel]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argTel �t�B�[���h[tel]�Ɋi�[�������l
     */
    public /*.void.*/ function setTel(/*.string.*/ $argTel) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setTel �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argTel) !== 'string' && gettype($argTel) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setTel ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argTel) . ']�^���^�����܂����B');
        }

        $this->fTel = $argTel;
    }

    /**
     * �t�B�[���h[tel]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[tel]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getTel() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getTel �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fTel;
    }

    /**
     * �t�B�[���h [mail]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argMail �t�B�[���h[mail]�Ɋi�[�������l
     */
    public /*.void.*/ function setMail(/*.string.*/ $argMail) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setMail �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argMail) !== 'string' && gettype($argMail) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setMail ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argMail) . ']�^���^�����܂����B');
        }

        $this->fMail = $argMail;
    }

    /**
     * �t�B�[���h[mail]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[mail]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getMail() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getMail �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMail;
    }

    /**
     * �t�B�[���h [myArea]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Area]
     *
     * @param Area $argMyArea �t�B�[���h[myArea]�Ɋi�[�������l
     */
    public /*.void.*/ function setMyArea(/*.Area.*/ $argMyArea) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setMyArea �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argMyArea instanceof Area === FALSE) {
            throw new Exception('[ArgumentException]: Driver.setMyArea ��1�Ԗڂ̃p�����[�^��[Area]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argMyArea) . ']�^���^�����܂����B');
        }

        $this->fMyArea = $argMyArea;
    }

    /**
     * �t�B�[���h[myArea]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Area]
     *
     * @return Area �t�B�[���h[myArea]�Ɋi�[����Ă���l
     */
    public /*.Area.*/ function getMyArea() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getMyArea �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMyArea;
    }

    /**
     * �t�B�[���h [myStation]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [MyStation[]]
     *
     * @param MyStation[] $argMyStation �t�B�[���h[myStation]�Ɋi�[�������l
     */
    public /*.void.*/ function setMyStation(/*.MyStation[].*/ $argMyStation) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setMyStation �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argMyStation instanceof MyStation[] === FALSE) {
            throw new Exception('[ArgumentException]: Driver.setMyStation ��1�Ԗڂ̃p�����[�^��[MyStation[]]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argMyStation) . ']�^���^�����܂����B');
        }

        $this->fMyStation = $argMyStation;
    }

    /**
     * �t�B�[���h[myStation]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [MyStation[]]
     *
     * @return MyStation[] �t�B�[���h[myStation]�Ɋi�[����Ă���l
     */
    public /*.MyStation[].*/ function getMyStation() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getMyStation �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMyStation;
    }

    /**
     * �t�B�[���h [myStationHistory]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Station[]]
     *
     * @param Station[] $argMyStationHistory �t�B�[���h[myStationHistory]�Ɋi�[�������l
     */
    public /*.void.*/ function setMyStationHistory(/*.Station[].*/ $argMyStationHistory) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setMyStationHistory �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argMyStationHistory instanceof Station[] === FALSE) {
            throw new Exception('[ArgumentException]: Driver.setMyStationHistory ��1�Ԗڂ̃p�����[�^��[Station[]]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argMyStationHistory) . ']�^���^�����܂����B');
        }

        $this->fMyStationHistory = $argMyStationHistory;
    }

    /**
     * �t�B�[���h[myStationHistory]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Station[]]
     *
     * @return Station[] �t�B�[���h[myStationHistory]�Ɋi�[����Ă���l
     */
    public /*.Station[].*/ function getMyStationHistory() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getMyStationHistory �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMyStationHistory;
    }

    /**
     * �t�B�[���h [reserveLimit]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �\�񐧌��{���B-1�F������
     *
     * @param integer $argReserveLimit �t�B�[���h[reserveLimit]�Ɋi�[�������l
     */
    public /*.void.*/ function setReserveLimit(/*.int.*/ $argReserveLimit) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setReserveLimit �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argReserveLimit) !== 'integer' && gettype($argReserveLimit) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setReserveLimit ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argReserveLimit) . ']�^���^�����܂����B');
        }

        $this->fReserveLimit = $argReserveLimit;
    }

    /**
     * �t�B�[���h[reserveLimit]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * �\�񐧌��{���B-1�F������
     *
     * @return integer �t�B�[���h[reserveLimit]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getReserveLimit() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getReserveLimit �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fReserveLimit;
    }

    /**
     * �t�B�[���h [reserveNum]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ���݂̗\��
     *
     * @param integer $argReserveNum �t�B�[���h[reserveNum]�Ɋi�[�������l
     */
    public /*.void.*/ function setReserveNum(/*.int.*/ $argReserveNum) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setReserveNum �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argReserveNum) !== 'integer' && gettype($argReserveNum) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setReserveNum ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argReserveNum) . ']�^���^�����܂����B');
        }

        $this->fReserveNum = $argReserveNum;
    }

    /**
     * �t�B�[���h[reserveNum]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     * ���݂̗\��
     *
     * @return integer �t�B�[���h[reserveNum]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getReserveNum() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getReserveNum �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fReserveNum;
    }

    /**
     * �t�B�[���h [isAdmin]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �Ǘ��҃t���O�B0�F�����A1�F�L��
     *
     * @param boolean $argIsAdmin �t�B�[���h[isAdmin]�Ɋi�[�������l
     */
    public /*.void.*/ function setIsAdmin(/*.boolean.*/ $argIsAdmin) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setIsAdmin �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argIsAdmin) !== 'boolean' && gettype($argIsAdmin) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setIsAdmin ��1�Ԗڂ̃p�����[�^��[boolean]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argIsAdmin) . ']�^���^�����܂����B');
        }

        $this->fIsAdmin = $argIsAdmin;
    }

    /**
     * �t�B�[���h[isAdmin]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [boolean]
     * �Ǘ��҃t���O�B0�F�����A1�F�L��
     *
     * @return boolean �t�B�[���h[isAdmin]�Ɋi�[����Ă���l
     */
    public /*.boolean.*/ function getIsAdmin() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getIsAdmin �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fIsAdmin;
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
            throw new Exception('[ArgumentException]: Driver.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.Driver[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',kbn=' . (string) $this->fKbn;
        $buf = $buf . ',loginID=' . $this->fLoginID;
        $buf = $buf . ',fname=' . $this->fFname;
        $buf = $buf . ',lname=' . $this->fLname;
        $buf = $buf . ',fnameKana=' . $this->fFnameKana;
        $buf = $buf . ',lnameKana=' . $this->fLnameKana;
        $buf = $buf . ',tel=' . $this->fTel;
        $buf = $buf . ',mail=' . $this->fMail;
        $buf = $buf . ',myArea=' . (string) $this->fMyArea;
        $buf = $buf . ',myStation=' . (string) $this->fMyStation;
        $buf = $buf . ',myStationHistory=' . (string) $this->fMyStationHistory;
        $buf = $buf . ',reserveLimit=' . (string) $this->fReserveLimit;
        $buf = $buf . ',reserveNum=' . (string) $this->fReserveNum;
        $buf = $buf . ',isAdmin=' . ($this->fIsAdmin ? 'true' : 'false');
        $buf = $buf . ']';
        return $buf;
    }
}
?>
