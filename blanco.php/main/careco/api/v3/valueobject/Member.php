<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('Plan.php');
/*. require_module 'standard'; .*/;

/**
 */
class Member {
    /**
     * フィールド [id]
     *
     * 項目の型 [integer]
     */
    private /*.int.*/ $fId;

    /**
     * フィールド [kbn]
     *
     * 項目の型 [integer]
     */
    private /*.int.*/ $fKbn;

    /**
     * フィールド [loginkd]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fLoginkd;

    /**
     * フィールド [corporate_name]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fCorporateName;

    /**
     * フィールド [corporate_kana]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fCorporateKana;

    /**
     * フィールド [fname]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fFname;

    /**
     * フィールド [lname]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fLname;

    /**
     * フィールド [fname_kana]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fFnameKana;

    /**
     * フィールド [lname_kana]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fLnameKana;

    /**
     * フィールド [zip]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fZip;

    /**
     * フィールド [prefecture]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fPrefecture;

    /**
     * フィールド [address1]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fAddress1;

    /**
     * フィールド [address2]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fAddress2;

    /**
     * フィールド [tel]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fTel;

    /**
     * フィールド [mail]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fMail;

    /**
     * フィールド [plan]
     *
     * 項目の型 [Plan]
     */
    private /*.Plan.*/ $fPlan;

    /**
     * フィールド [id]のセッターメソッド
     *
     * 項目の型 [integer]
     *
     * @param integer $argId フィールド[id]に格納したい値
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
        }

        $this->fId = $argId;
    }

    /**
     * フィールド[id]のゲッターメソッド
     *
     * 項目の型 [integer]
     *
     * @return integer フィールド[id]に格納されている値
     */
    public /*.int.*/ function getId() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fId;
    }

    /**
     * フィールド [kbn]のセッターメソッド
     *
     * 項目の型 [integer]
     *
     * @param integer $argKbn フィールド[kbn]に格納したい値
     */
    public /*.void.*/ function setKbn(/*.int.*/ $argKbn) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setKbn のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argKbn) !== 'integer' && gettype($argKbn) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setKbn の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argKbn) . ']型が与えられました。');
        }

        $this->fKbn = $argKbn;
    }

    /**
     * フィールド[kbn]のゲッターメソッド
     *
     * 項目の型 [integer]
     *
     * @return integer フィールド[kbn]に格納されている値
     */
    public /*.int.*/ function getKbn() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getKbn のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fKbn;
    }

    /**
     * フィールド [loginkd]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argLoginkd フィールド[loginkd]に格納したい値
     */
    public /*.void.*/ function setLoginkd(/*.string.*/ $argLoginkd) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setLoginkd のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argLoginkd) !== 'string' && gettype($argLoginkd) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setLoginkd の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argLoginkd) . ']型が与えられました。');
        }

        $this->fLoginkd = $argLoginkd;
    }

    /**
     * フィールド[loginkd]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[loginkd]に格納されている値
     */
    public /*.string.*/ function getLoginkd() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getLoginkd のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fLoginkd;
    }

    /**
     * フィールド [corporate_name]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argCorporateName フィールド[corporate_name]に格納したい値
     */
    public /*.void.*/ function setCorporateName(/*.string.*/ $argCorporateName) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setCorporateName のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argCorporateName) !== 'string' && gettype($argCorporateName) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setCorporateName の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argCorporateName) . ']型が与えられました。');
        }

        $this->fCorporateName = $argCorporateName;
    }

    /**
     * フィールド[corporate_name]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[corporate_name]に格納されている値
     */
    public /*.string.*/ function getCorporateName() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getCorporateName のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fCorporateName;
    }

    /**
     * フィールド [corporate_kana]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argCorporateKana フィールド[corporate_kana]に格納したい値
     */
    public /*.void.*/ function setCorporateKana(/*.string.*/ $argCorporateKana) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setCorporateKana のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argCorporateKana) !== 'string' && gettype($argCorporateKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setCorporateKana の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argCorporateKana) . ']型が与えられました。');
        }

        $this->fCorporateKana = $argCorporateKana;
    }

    /**
     * フィールド[corporate_kana]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[corporate_kana]に格納されている値
     */
    public /*.string.*/ function getCorporateKana() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getCorporateKana のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fCorporateKana;
    }

    /**
     * フィールド [fname]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argFname フィールド[fname]に格納したい値
     */
    public /*.void.*/ function setFname(/*.string.*/ $argFname) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setFname のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argFname) !== 'string' && gettype($argFname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setFname の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argFname) . ']型が与えられました。');
        }

        $this->fFname = $argFname;
    }

    /**
     * フィールド[fname]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[fname]に格納されている値
     */
    public /*.string.*/ function getFname() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getFname のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fFname;
    }

    /**
     * フィールド [lname]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argLname フィールド[lname]に格納したい値
     */
    public /*.void.*/ function setLname(/*.string.*/ $argLname) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setLname のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argLname) !== 'string' && gettype($argLname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setLname の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argLname) . ']型が与えられました。');
        }

        $this->fLname = $argLname;
    }

    /**
     * フィールド[lname]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[lname]に格納されている値
     */
    public /*.string.*/ function getLname() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getLname のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fLname;
    }

    /**
     * フィールド [fname_kana]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argFnameKana フィールド[fname_kana]に格納したい値
     */
    public /*.void.*/ function setFnameKana(/*.string.*/ $argFnameKana) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setFnameKana のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argFnameKana) !== 'string' && gettype($argFnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setFnameKana の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argFnameKana) . ']型が与えられました。');
        }

        $this->fFnameKana = $argFnameKana;
    }

    /**
     * フィールド[fname_kana]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[fname_kana]に格納されている値
     */
    public /*.string.*/ function getFnameKana() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getFnameKana のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fFnameKana;
    }

    /**
     * フィールド [lname_kana]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argLnameKana フィールド[lname_kana]に格納したい値
     */
    public /*.void.*/ function setLnameKana(/*.string.*/ $argLnameKana) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setLnameKana のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argLnameKana) !== 'string' && gettype($argLnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setLnameKana の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argLnameKana) . ']型が与えられました。');
        }

        $this->fLnameKana = $argLnameKana;
    }

    /**
     * フィールド[lname_kana]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[lname_kana]に格納されている値
     */
    public /*.string.*/ function getLnameKana() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getLnameKana のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fLnameKana;
    }

    /**
     * フィールド [zip]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argZip フィールド[zip]に格納したい値
     */
    public /*.void.*/ function setZip(/*.string.*/ $argZip) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setZip のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argZip) !== 'string' && gettype($argZip) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setZip の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argZip) . ']型が与えられました。');
        }

        $this->fZip = $argZip;
    }

    /**
     * フィールド[zip]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[zip]に格納されている値
     */
    public /*.string.*/ function getZip() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getZip のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fZip;
    }

    /**
     * フィールド [prefecture]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argPrefecture フィールド[prefecture]に格納したい値
     */
    public /*.void.*/ function setPrefecture(/*.string.*/ $argPrefecture) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setPrefecture のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argPrefecture) !== 'string' && gettype($argPrefecture) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setPrefecture の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argPrefecture) . ']型が与えられました。');
        }

        $this->fPrefecture = $argPrefecture;
    }

    /**
     * フィールド[prefecture]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[prefecture]に格納されている値
     */
    public /*.string.*/ function getPrefecture() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getPrefecture のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fPrefecture;
    }

    /**
     * フィールド [address1]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argAddress1 フィールド[address1]に格納したい値
     */
    public /*.void.*/ function setAddress1(/*.string.*/ $argAddress1) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setAddress1 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argAddress1) !== 'string' && gettype($argAddress1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setAddress1 の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argAddress1) . ']型が与えられました。');
        }

        $this->fAddress1 = $argAddress1;
    }

    /**
     * フィールド[address1]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[address1]に格納されている値
     */
    public /*.string.*/ function getAddress1() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getAddress1 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fAddress1;
    }

    /**
     * フィールド [address2]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argAddress2 フィールド[address2]に格納したい値
     */
    public /*.void.*/ function setAddress2(/*.string.*/ $argAddress2) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setAddress2 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argAddress2) !== 'string' && gettype($argAddress2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setAddress2 の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argAddress2) . ']型が与えられました。');
        }

        $this->fAddress2 = $argAddress2;
    }

    /**
     * フィールド[address2]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[address2]に格納されている値
     */
    public /*.string.*/ function getAddress2() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getAddress2 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fAddress2;
    }

    /**
     * フィールド [tel]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argTel フィールド[tel]に格納したい値
     */
    public /*.void.*/ function setTel(/*.string.*/ $argTel) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setTel のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argTel) !== 'string' && gettype($argTel) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setTel の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argTel) . ']型が与えられました。');
        }

        $this->fTel = $argTel;
    }

    /**
     * フィールド[tel]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[tel]に格納されている値
     */
    public /*.string.*/ function getTel() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getTel のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fTel;
    }

    /**
     * フィールド [mail]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argMail フィールド[mail]に格納したい値
     */
    public /*.void.*/ function setMail(/*.string.*/ $argMail) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setMail のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argMail) !== 'string' && gettype($argMail) !== 'NULL') {
            throw new Exception('[ArgumentException]: Member.setMail の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argMail) . ']型が与えられました。');
        }

        $this->fMail = $argMail;
    }

    /**
     * フィールド[mail]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[mail]に格納されている値
     */
    public /*.string.*/ function getMail() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getMail のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fMail;
    }

    /**
     * フィールド [plan]のセッターメソッド
     *
     * 項目の型 [Plan]
     *
     * @param Plan $argPlan フィールド[plan]に格納したい値
     */
    public /*.void.*/ function setPlan(/*.Plan.*/ $argPlan) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Member.setPlan のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argPlan instanceof Plan === FALSE) {
            throw new Exception('[ArgumentException]: Member.setPlan の1番目のパラメータは[Plan]型でなくてはなりません。しかし実際には[' . get_class($argPlan) . ']型が与えられました。');
        }

        $this->fPlan = $argPlan;
    }

    /**
     * フィールド[plan]のゲッターメソッド
     *
     * 項目の型 [Plan]
     *
     * @return Plan フィールド[plan]に格納されている値
     */
    public /*.Plan.*/ function getPlan() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.getPlan のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fPlan;
    }

    /**
     * このバリューオブジェクトの文字列表現を取得します。
     *
     * オブジェクトのシャロー範囲でしかtoStringされない点に注意して利用してください。
     *
     * @return string バリューオブジェクトの文字列表現。
     */
    public /*.string.*/ function __toString() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Member.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
