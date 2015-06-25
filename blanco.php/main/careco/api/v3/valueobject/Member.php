<?php
/*
 * ���̃\�[�X�R�[�h�� blanco Framework�ɂ���Ď�����������Ă��܂��B
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('Plan.php');
/*. require_module 'standard'; .*/;

/**
 */
class Member {
    /**
     * �t�B�[���h [id]
     *
     * ���ڂ̌^ [integer]
     */
    private /*.int.*/ $fId;

    /**
     * �t�B�[���h [kbn]
     *
     * ���ڂ̌^ [integer]
     */
    private /*.int.*/ $fKbn;

    /**
     * �t�B�[���h [loginkd]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fLoginkd;

    /**
     * �t�B�[���h [corporate_name]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fCorporateName;

    /**
     * �t�B�[���h [corporate_kana]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fCorporateKana;

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
     * �t�B�[���h [fname_kana]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fFnameKana;

    /**
     * �t�B�[���h [lname_kana]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fLnameKana;

    /**
     * �t�B�[���h [zip]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fZip;

    /**
     * �t�B�[���h [prefecture]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fPrefecture;

    /**
     * �t�B�[���h [address1]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fAddress1;

    /**
     * �t�B�[���h [address2]
     *
     * ���ڂ̌^ [string]
     */
    private /*.string.*/ $fAddress2;

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
     * �t�B�[���h [plan]
     *
     * ���ڂ̌^ [Plan]
     */
    private /*.Plan.*/ $fPlan;

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
            throw new Exception('[ArgumentException]: Member.setId �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setId ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argId) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Member.getId �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fId;
    }

    /**
     * �t�B�[���h [kbn]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     *
     * @param integer $argKbn �t�B�[���h[kbn]�Ɋi�[�������l
     */
    public /*.void.*/ function setKbn(/*.int.*/ $argKbn) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setKbn �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argKbn) !== 'integer' && gettype($argKbn) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setKbn ��1�Ԗڂ̃p�����[�^��[integer]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argKbn) . ']�^���^�����܂����B');
        }

        $this->fKbn = $argKbn;
    }

    /**
     * �t�B�[���h[kbn]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [integer]
     *
     * @return integer �t�B�[���h[kbn]�Ɋi�[����Ă���l
     */
    public /*.int.*/ function getKbn() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getKbn �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fKbn;
    }

    /**
     * �t�B�[���h [loginkd]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argLoginkd �t�B�[���h[loginkd]�Ɋi�[�������l
     */
    public /*.void.*/ function setLoginkd(/*.string.*/ $argLoginkd) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setLoginkd �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argLoginkd) !== 'string' && gettype($argLoginkd) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setLoginkd ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argLoginkd) . ']�^���^�����܂����B');
        }

        $this->fLoginkd = $argLoginkd;
    }

    /**
     * �t�B�[���h[loginkd]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[loginkd]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getLoginkd() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getLoginkd �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fLoginkd;
    }

    /**
     * �t�B�[���h [corporate_name]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argCorporateName �t�B�[���h[corporate_name]�Ɋi�[�������l
     */
    public /*.void.*/ function setCorporateName(/*.string.*/ $argCorporateName) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setCorporateName �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argCorporateName) !== 'string' && gettype($argCorporateName) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setCorporateName ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argCorporateName) . ']�^���^�����܂����B');
        }

        $this->fCorporateName = $argCorporateName;
    }

    /**
     * �t�B�[���h[corporate_name]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[corporate_name]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getCorporateName() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getCorporateName �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fCorporateName;
    }

    /**
     * �t�B�[���h [corporate_kana]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argCorporateKana �t�B�[���h[corporate_kana]�Ɋi�[�������l
     */
    public /*.void.*/ function setCorporateKana(/*.string.*/ $argCorporateKana) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setCorporateKana �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argCorporateKana) !== 'string' && gettype($argCorporateKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setCorporateKana ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argCorporateKana) . ']�^���^�����܂����B');
        }

        $this->fCorporateKana = $argCorporateKana;
    }

    /**
     * �t�B�[���h[corporate_kana]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[corporate_kana]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getCorporateKana() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getCorporateKana �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fCorporateKana;
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
            throw new Exception('[ArgumentException]: Member.setFname �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argFname) !== 'string' && gettype($argFname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setFname ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argFname) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Member.getFname �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
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
            throw new Exception('[ArgumentException]: Member.setLname �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argLname) !== 'string' && gettype($argLname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setLname ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argLname) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Member.getLname �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fLname;
    }

    /**
     * �t�B�[���h [fname_kana]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argFnameKana �t�B�[���h[fname_kana]�Ɋi�[�������l
     */
    public /*.void.*/ function setFnameKana(/*.string.*/ $argFnameKana) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setFnameKana �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argFnameKana) !== 'string' && gettype($argFnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setFnameKana ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argFnameKana) . ']�^���^�����܂����B');
        }

        $this->fFnameKana = $argFnameKana;
    }

    /**
     * �t�B�[���h[fname_kana]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[fname_kana]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getFnameKana() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getFnameKana �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fFnameKana;
    }

    /**
     * �t�B�[���h [lname_kana]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argLnameKana �t�B�[���h[lname_kana]�Ɋi�[�������l
     */
    public /*.void.*/ function setLnameKana(/*.string.*/ $argLnameKana) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setLnameKana �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argLnameKana) !== 'string' && gettype($argLnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setLnameKana ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argLnameKana) . ']�^���^�����܂����B');
        }

        $this->fLnameKana = $argLnameKana;
    }

    /**
     * �t�B�[���h[lname_kana]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[lname_kana]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getLnameKana() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getLnameKana �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fLnameKana;
    }

    /**
     * �t�B�[���h [zip]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argZip �t�B�[���h[zip]�Ɋi�[�������l
     */
    public /*.void.*/ function setZip(/*.string.*/ $argZip) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setZip �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argZip) !== 'string' && gettype($argZip) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setZip ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argZip) . ']�^���^�����܂����B');
        }

        $this->fZip = $argZip;
    }

    /**
     * �t�B�[���h[zip]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[zip]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getZip() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getZip �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fZip;
    }

    /**
     * �t�B�[���h [prefecture]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argPrefecture �t�B�[���h[prefecture]�Ɋi�[�������l
     */
    public /*.void.*/ function setPrefecture(/*.string.*/ $argPrefecture) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setPrefecture �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argPrefecture) !== 'string' && gettype($argPrefecture) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setPrefecture ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argPrefecture) . ']�^���^�����܂����B');
        }

        $this->fPrefecture = $argPrefecture;
    }

    /**
     * �t�B�[���h[prefecture]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[prefecture]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getPrefecture() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getPrefecture �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fPrefecture;
    }

    /**
     * �t�B�[���h [address1]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argAddress1 �t�B�[���h[address1]�Ɋi�[�������l
     */
    public /*.void.*/ function setAddress1(/*.string.*/ $argAddress1) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setAddress1 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argAddress1) !== 'string' && gettype($argAddress1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setAddress1 ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argAddress1) . ']�^���^�����܂����B');
        }

        $this->fAddress1 = $argAddress1;
    }

    /**
     * �t�B�[���h[address1]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[address1]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getAddress1() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getAddress1 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fAddress1;
    }

    /**
     * �t�B�[���h [address2]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @param string $argAddress2 �t�B�[���h[address2]�Ɋi�[�������l
     */
    public /*.void.*/ function setAddress2(/*.string.*/ $argAddress2) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setAddress2 �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argAddress2) !== 'string' && gettype($argAddress2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setAddress2 ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argAddress2) . ']�^���^�����܂����B');
        }

        $this->fAddress2 = $argAddress2;
    }

    /**
     * �t�B�[���h[address2]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [string]
     *
     * @return string �t�B�[���h[address2]�Ɋi�[����Ă���l
     */
    public /*.string.*/ function getAddress2() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getAddress2 �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fAddress2;
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
            throw new Exception('[ArgumentException]: Member.setTel �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argTel) !== 'string' && gettype($argTel) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setTel ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argTel) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Member.getTel �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
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
            throw new Exception('[ArgumentException]: Member.setMail �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if (gettype($argMail) !== 'string' && gettype($argMail) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setMail ��1�Ԗڂ̃p�����[�^��[string]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . gettype($argMail) . ']�^���^�����܂����B');
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
            throw new Exception('[ArgumentException]: Member.getMail �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fMail;
    }

    /**
     * �t�B�[���h [plan]�̃Z�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Plan]
     *
     * @param Plan $argPlan �t�B�[���h[plan]�Ɋi�[�������l
     */
    public /*.void.*/ function setPlan(/*.Plan.*/ $argPlan) {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setPlan �̃p�����[�^��[1]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }
        if ($argPlan instanceof Plan === FALSE) {
            throw new Exception('[ArgumentException]: Member.setPlan ��1�Ԗڂ̃p�����[�^��[Plan]�^�łȂ��Ă͂Ȃ�܂���B���������ۂɂ�[' . get_class($argPlan) . ']�^���^�����܂����B');
        }

        $this->fPlan = $argPlan;
    }

    /**
     * �t�B�[���h[plan]�̃Q�b�^�[���\�b�h
     *
     * ���ڂ̌^ [Plan]
     *
     * @return Plan �t�B�[���h[plan]�Ɋi�[����Ă���l
     */
    public /*.Plan.*/ function getPlan() {
        /* �p�����[�^�̐��A�^�`�F�b�N���s���܂��B */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getPlan �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        return $this->fPlan;
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
            throw new Exception('[ArgumentException]: Member.__toString �̃p�����[�^��[0]�ł���K�v������܂��B���������ۂɂ�[' . func_num_args() .  ']�̃p�����[�^�𔺂��ČĂяo����܂����B');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.Member[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',kbn=' . (string) $this->fKbn;
        $buf = $buf . ',loginkd=' . $this->fLoginkd;
        $buf = $buf . ',corporate_name=' . $this->fCorporateName;
        $buf = $buf . ',corporate_kana=' . $this->fCorporateKana;
        $buf = $buf . ',fname=' . $this->fFname;
        $buf = $buf . ',lname=' . $this->fLname;
        $buf = $buf . ',fname_kana=' . $this->fFnameKana;
        $buf = $buf . ',lname_kana=' . $this->fLnameKana;
        $buf = $buf . ',zip=' . $this->fZip;
        $buf = $buf . ',prefecture=' . $this->fPrefecture;
        $buf = $buf . ',address1=' . $this->fAddress1;
        $buf = $buf . ',address2=' . $this->fAddress2;
        $buf = $buf . ',tel=' . $this->fTel;
        $buf = $buf . ',mail=' . $this->fMail;
        $buf = $buf . ',plan=' . (string) $this->fPlan;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
