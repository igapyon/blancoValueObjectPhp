<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
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
     * フィールド [id]
     *
     * 項目の型 [integer]
     * 運転者オートID（半角数字）
     */
    private /*.int.*/ $fId;

    /**
     * フィールド [kbn]
     *
     * 項目の型 [integer]
     * 会員区分 (1：法人、2：個人)
     */
    private /*.int.*/ $fKbn;

    /**
     * フィールド [loginID]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fLoginID;

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
     * フィールド [fnameKana]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fFnameKana;

    /**
     * フィールド [lnameKana]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fLnameKana;

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
     * フィールド [myArea]
     *
     * 項目の型 [Area]
     */
    private /*.Area.*/ $fMyArea;

    /**
     * フィールド [myStation]
     *
     * 項目の型 [MyStation[]]
     */
    private /*.MyStation[].*/ $fMyStation;

    /**
     * フィールド [myStationHistory]
     *
     * 項目の型 [Station[]]
     */
    private /*.Station[].*/ $fMyStationHistory;

    /**
     * フィールド [reserveLimit]
     *
     * 項目の型 [integer]
     * 予約制限本数。-1：無制限
     */
    private /*.int.*/ $fReserveLimit;

    /**
     * フィールド [reserveNum]
     *
     * 項目の型 [integer]
     * 現在の予約数
     */
    private /*.int.*/ $fReserveNum;

    /**
     * フィールド [isAdmin]
     *
     * 項目の型 [boolean]
     * 管理者フラグ。0：無し、1：有り
     */
    private /*.boolean.*/ $fIsAdmin;

    /**
     * フィールド [id]のセッターメソッド
     *
     * 項目の型 [integer]
     * 運転者オートID（半角数字）
     *
     * @param integer $argId フィールド[id]に格納したい値
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
        }

        $this->fId = $argId;
    }

    /**
     * フィールド[id]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 運転者オートID（半角数字）
     *
     * @return integer フィールド[id]に格納されている値
     */
    public /*.int.*/ function getId() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fId;
    }

    /**
     * フィールド [kbn]のセッターメソッド
     *
     * 項目の型 [integer]
     * 会員区分 (1：法人、2：個人)
     *
     * @param integer $argKbn フィールド[kbn]に格納したい値
     */
    public /*.void.*/ function setKbn(/*.int.*/ $argKbn) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setKbn のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argKbn) !== 'integer' && gettype($argKbn) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setKbn の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argKbn) . ']型が与えられました。');
        }

        $this->fKbn = $argKbn;
    }

    /**
     * フィールド[kbn]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 会員区分 (1：法人、2：個人)
     *
     * @return integer フィールド[kbn]に格納されている値
     */
    public /*.int.*/ function getKbn() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getKbn のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fKbn;
    }

    /**
     * フィールド [loginID]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argLoginID フィールド[loginID]に格納したい値
     */
    public /*.void.*/ function setLoginID(/*.string.*/ $argLoginID) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setLoginID のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argLoginID) !== 'string' && gettype($argLoginID) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setLoginID の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argLoginID) . ']型が与えられました。');
        }

        $this->fLoginID = $argLoginID;
    }

    /**
     * フィールド[loginID]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[loginID]に格納されている値
     */
    public /*.string.*/ function getLoginID() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getLoginID のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fLoginID;
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
            throw new Exception('[ArgumentException]: Driver.setFname のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argFname) !== 'string' && gettype($argFname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setFname の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argFname) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Driver.getFname のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
            throw new Exception('[ArgumentException]: Driver.setLname のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argLname) !== 'string' && gettype($argLname) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setLname の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argLname) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Driver.getLname のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fLname;
    }

    /**
     * フィールド [fnameKana]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argFnameKana フィールド[fnameKana]に格納したい値
     */
    public /*.void.*/ function setFnameKana(/*.string.*/ $argFnameKana) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setFnameKana のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argFnameKana) !== 'string' && gettype($argFnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setFnameKana の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argFnameKana) . ']型が与えられました。');
        }

        $this->fFnameKana = $argFnameKana;
    }

    /**
     * フィールド[fnameKana]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[fnameKana]に格納されている値
     */
    public /*.string.*/ function getFnameKana() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getFnameKana のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fFnameKana;
    }

    /**
     * フィールド [lnameKana]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argLnameKana フィールド[lnameKana]に格納したい値
     */
    public /*.void.*/ function setLnameKana(/*.string.*/ $argLnameKana) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setLnameKana のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argLnameKana) !== 'string' && gettype($argLnameKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setLnameKana の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argLnameKana) . ']型が与えられました。');
        }

        $this->fLnameKana = $argLnameKana;
    }

    /**
     * フィールド[lnameKana]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[lnameKana]に格納されている値
     */
    public /*.string.*/ function getLnameKana() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getLnameKana のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fLnameKana;
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
            throw new Exception('[ArgumentException]: Driver.setTel のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argTel) !== 'string' && gettype($argTel) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setTel の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argTel) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Driver.getTel のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
            throw new Exception('[ArgumentException]: Driver.setMail のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argMail) !== 'string' && gettype($argMail) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setMail の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argMail) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Driver.getMail のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fMail;
    }

    /**
     * フィールド [myArea]のセッターメソッド
     *
     * 項目の型 [Area]
     *
     * @param Area $argMyArea フィールド[myArea]に格納したい値
     */
    public /*.void.*/ function setMyArea(/*.Area.*/ $argMyArea) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setMyArea のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argMyArea instanceof Area === FALSE) {
            throw new Exception('[ArgumentException]: Driver.setMyArea の1番目のパラメータは[Area]型でなくてはなりません。しかし実際には[' . get_class($argMyArea) . ']型が与えられました。');
        }

        $this->fMyArea = $argMyArea;
    }

    /**
     * フィールド[myArea]のゲッターメソッド
     *
     * 項目の型 [Area]
     *
     * @return Area フィールド[myArea]に格納されている値
     */
    public /*.Area.*/ function getMyArea() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getMyArea のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fMyArea;
    }

    /**
     * フィールド [myStation]のセッターメソッド
     *
     * 項目の型 [MyStation[]]
     *
     * @param MyStation[] $argMyStation フィールド[myStation]に格納したい値
     */
    public /*.void.*/ function setMyStation(/*.MyStation[].*/ $argMyStation) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setMyStation のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argMyStation instanceof MyStation[] === FALSE) {
            throw new Exception('[ArgumentException]: Driver.setMyStation の1番目のパラメータは[MyStation[]]型でなくてはなりません。しかし実際には[' . get_class($argMyStation) . ']型が与えられました。');
        }

        $this->fMyStation = $argMyStation;
    }

    /**
     * フィールド[myStation]のゲッターメソッド
     *
     * 項目の型 [MyStation[]]
     *
     * @return MyStation[] フィールド[myStation]に格納されている値
     */
    public /*.MyStation[].*/ function getMyStation() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getMyStation のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fMyStation;
    }

    /**
     * フィールド [myStationHistory]のセッターメソッド
     *
     * 項目の型 [Station[]]
     *
     * @param Station[] $argMyStationHistory フィールド[myStationHistory]に格納したい値
     */
    public /*.void.*/ function setMyStationHistory(/*.Station[].*/ $argMyStationHistory) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setMyStationHistory のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argMyStationHistory instanceof Station[] === FALSE) {
            throw new Exception('[ArgumentException]: Driver.setMyStationHistory の1番目のパラメータは[Station[]]型でなくてはなりません。しかし実際には[' . get_class($argMyStationHistory) . ']型が与えられました。');
        }

        $this->fMyStationHistory = $argMyStationHistory;
    }

    /**
     * フィールド[myStationHistory]のゲッターメソッド
     *
     * 項目の型 [Station[]]
     *
     * @return Station[] フィールド[myStationHistory]に格納されている値
     */
    public /*.Station[].*/ function getMyStationHistory() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getMyStationHistory のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fMyStationHistory;
    }

    /**
     * フィールド [reserveLimit]のセッターメソッド
     *
     * 項目の型 [integer]
     * 予約制限本数。-1：無制限
     *
     * @param integer $argReserveLimit フィールド[reserveLimit]に格納したい値
     */
    public /*.void.*/ function setReserveLimit(/*.int.*/ $argReserveLimit) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setReserveLimit のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argReserveLimit) !== 'integer' && gettype($argReserveLimit) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setReserveLimit の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argReserveLimit) . ']型が与えられました。');
        }

        $this->fReserveLimit = $argReserveLimit;
    }

    /**
     * フィールド[reserveLimit]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 予約制限本数。-1：無制限
     *
     * @return integer フィールド[reserveLimit]に格納されている値
     */
    public /*.int.*/ function getReserveLimit() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getReserveLimit のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fReserveLimit;
    }

    /**
     * フィールド [reserveNum]のセッターメソッド
     *
     * 項目の型 [integer]
     * 現在の予約数
     *
     * @param integer $argReserveNum フィールド[reserveNum]に格納したい値
     */
    public /*.void.*/ function setReserveNum(/*.int.*/ $argReserveNum) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setReserveNum のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argReserveNum) !== 'integer' && gettype($argReserveNum) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setReserveNum の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argReserveNum) . ']型が与えられました。');
        }

        $this->fReserveNum = $argReserveNum;
    }

    /**
     * フィールド[reserveNum]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 現在の予約数
     *
     * @return integer フィールド[reserveNum]に格納されている値
     */
    public /*.int.*/ function getReserveNum() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getReserveNum のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fReserveNum;
    }

    /**
     * フィールド [isAdmin]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 管理者フラグ。0：無し、1：有り
     *
     * @param boolean $argIsAdmin フィールド[isAdmin]に格納したい値
     */
    public /*.void.*/ function setIsAdmin(/*.boolean.*/ $argIsAdmin) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Driver.setIsAdmin のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argIsAdmin) !== 'boolean' && gettype($argIsAdmin) !== 'NULL') {
            throw new Exception('[ArgumentException]: Driver.setIsAdmin の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argIsAdmin) . ']型が与えられました。');
        }

        $this->fIsAdmin = $argIsAdmin;
    }

    /**
     * フィールド[isAdmin]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 管理者フラグ。0：無し、1：有り
     *
     * @return boolean フィールド[isAdmin]に格納されている値
     */
    public /*.boolean.*/ function getIsAdmin() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Driver.getIsAdmin のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fIsAdmin;
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
            throw new Exception('[ArgumentException]: Driver.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
