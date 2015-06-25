<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
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
     * フィールド [id]
     *
     * 項目の型 [integer]
     */
    private /*.int.*/ $fId;

    /**
     * フィールド [station]
     *
     * 項目の型 [Station]
     */
    private /*.Station.*/ $fStation;

    /**
     * フィールド [car]
     *
     * 項目の型 [Car]
     */
    private /*.Car.*/ $fCar;

    /**
     * フィールド [from]
     *
     * 項目の型 [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     */
    private /*.string.*/ $fFrom;

    /**
     * フィールド [to]
     *
     * 項目の型 [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     */
    private /*.string.*/ $fTo;

    /**
     * フィールド [change]
     *
     * 項目の型 [boolean]
     * 予約の変更が可能かどうか。可能な場合は1、不可能な場合は0
     */
    private /*.boolean.*/ $fChange;

    /**
     * フィールド [expand]
     *
     * 項目の型 [boolean]
     * 予約の延長が可能かどうか。変更と延長のどちらも可能ということはありません
     */
    private /*.boolean.*/ $fExpand;

    /**
     * フィールド [cancel]
     *
     * 項目の型 [boolean]
     * 予約のキャンセルが可能かどうか。可能な場合は1、不可能な場合は0
     */
    private /*.boolean.*/ $fCancel;

    /**
     * フィールド [begin]
     *
     * 項目の型 [boolean]
     * 利用開始が可能かどうか。可能な場合は1、不可能な場合は0
     */
    private /*.boolean.*/ $fBegin;

    /**
     * フィールド [end]
     *
     * 項目の型 [boolean]
     * 利用終了が可能かどうか。可能な場合は1、不可能な場合は0
     */
    private /*.boolean.*/ $fEnd;

    /**
     * フィールド [open]
     *
     * 項目の型 [boolean]
     * 開錠が可能かどうか。可能な場合は1、不可能な場合は0
     */
    private /*.boolean.*/ $fOpen;

    /**
     * フィールド [close]
     *
     * 項目の型 [boolean]
     * 施錠が可能かどうか。可能な場合は1、不可能な場合は0
     */
    private /*.boolean.*/ $fClose;

    /**
     * フィールド [moveup]
     *
     * 項目の型 [boolean]
     * 10分前倒しが可能かどうか。可能な場合は1、不可能な場合は0
     */
    private /*.boolean.*/ $fMoveup;

    /**
     * フィールド [withinOneDays]
     *
     * 項目の型 [boolean]
     * 予約が24時間以内かどうか。24時間以内の場合は1、24時間より多い場合は0
     */
    private /*.boolean.*/ $fWithinOneDays;

    /**
     * フィールド [price]
     *
     * 項目の型 [integer]
     * 概算料金
     */
    private /*.int.*/ $fPrice;

    /**
     * フィールド [pack]
     *
     * 項目の型 [string]
     * パック適用文字列
     */
    private /*.string.*/ $fPack;

    /**
     * フィールド [plan]
     *
     * 項目の型 [Plan]
     * 料金プラン
     */
    private /*.Plan.*/ $fPlan;

    /**
     * フィールド [totalTime]
     *
     * 項目の型 [string]
     * 予約時間
     */
    private /*.string.*/ $fTotalTime;

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
            throw new Exception('[ArgumentException]: Reserve.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Reserve.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fId;
    }

    /**
     * フィールド [station]のセッターメソッド
     *
     * 項目の型 [Station]
     *
     * @param Station $argStation フィールド[station]に格納したい値
     */
    public /*.void.*/ function setStation(/*.Station.*/ $argStation) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setStation のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argStation instanceof Station === FALSE) {
            throw new Exception('[ArgumentException]: Reserve.setStation の1番目のパラメータは[Station]型でなくてはなりません。しかし実際には[' . get_class($argStation) . ']型が与えられました。');
        }

        $this->fStation = $argStation;
    }

    /**
     * フィールド[station]のゲッターメソッド
     *
     * 項目の型 [Station]
     *
     * @return Station フィールド[station]に格納されている値
     */
    public /*.Station.*/ function getStation() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getStation のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fStation;
    }

    /**
     * フィールド [car]のセッターメソッド
     *
     * 項目の型 [Car]
     *
     * @param Car $argCar フィールド[car]に格納したい値
     */
    public /*.void.*/ function setCar(/*.Car.*/ $argCar) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setCar のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argCar instanceof Car === FALSE) {
            throw new Exception('[ArgumentException]: Reserve.setCar の1番目のパラメータは[Car]型でなくてはなりません。しかし実際には[' . get_class($argCar) . ']型が与えられました。');
        }

        $this->fCar = $argCar;
    }

    /**
     * フィールド[car]のゲッターメソッド
     *
     * 項目の型 [Car]
     *
     * @return Car フィールド[car]に格納されている値
     */
    public /*.Car.*/ function getCar() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getCar のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fCar;
    }

    /**
     * フィールド [from]のセッターメソッド
     *
     * 項目の型 [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @param string $argFrom フィールド[from]に格納したい値
     */
    public /*.void.*/ function setFrom(/*.string.*/ $argFrom) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setFrom のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argFrom) !== 'string' && gettype($argFrom) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setFrom の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argFrom) . ']型が与えられました。');
        }

        $this->fFrom = $argFrom;
    }

    /**
     * フィールド[from]のゲッターメソッド
     *
     * 項目の型 [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @return string フィールド[from]に格納されている値
     */
    public /*.string.*/ function getFrom() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getFrom のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fFrom;
    }

    /**
     * フィールド [to]のセッターメソッド
     *
     * 項目の型 [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @param string $argTo フィールド[to]に格納したい値
     */
    public /*.void.*/ function setTo(/*.string.*/ $argTo) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setTo のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argTo) !== 'string' && gettype($argTo) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setTo の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argTo) . ']型が与えられました。');
        }

        $this->fTo = $argTo;
    }

    /**
     * フィールド[to]のゲッターメソッド
     *
     * 項目の型 [string]
     * <date>0000/00/00</date><time>00:00</time><wday>0</wday>
     *
     * @return string フィールド[to]に格納されている値
     */
    public /*.string.*/ function getTo() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getTo のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fTo;
    }

    /**
     * フィールド [change]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 予約の変更が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @param boolean $argChange フィールド[change]に格納したい値
     */
    public /*.void.*/ function setChange(/*.boolean.*/ $argChange) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setChange のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argChange) !== 'boolean' && gettype($argChange) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setChange の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argChange) . ']型が与えられました。');
        }

        $this->fChange = $argChange;
    }

    /**
     * フィールド[change]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 予約の変更が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @return boolean フィールド[change]に格納されている値
     */
    public /*.boolean.*/ function getChange() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getChange のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fChange;
    }

    /**
     * フィールド [expand]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 予約の延長が可能かどうか。変更と延長のどちらも可能ということはありません
     *
     * @param boolean $argExpand フィールド[expand]に格納したい値
     */
    public /*.void.*/ function setExpand(/*.boolean.*/ $argExpand) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setExpand のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argExpand) !== 'boolean' && gettype($argExpand) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setExpand の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argExpand) . ']型が与えられました。');
        }

        $this->fExpand = $argExpand;
    }

    /**
     * フィールド[expand]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 予約の延長が可能かどうか。変更と延長のどちらも可能ということはありません
     *
     * @return boolean フィールド[expand]に格納されている値
     */
    public /*.boolean.*/ function getExpand() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getExpand のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fExpand;
    }

    /**
     * フィールド [cancel]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 予約のキャンセルが可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @param boolean $argCancel フィールド[cancel]に格納したい値
     */
    public /*.void.*/ function setCancel(/*.boolean.*/ $argCancel) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setCancel のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argCancel) !== 'boolean' && gettype($argCancel) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setCancel の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argCancel) . ']型が与えられました。');
        }

        $this->fCancel = $argCancel;
    }

    /**
     * フィールド[cancel]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 予約のキャンセルが可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @return boolean フィールド[cancel]に格納されている値
     */
    public /*.boolean.*/ function getCancel() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getCancel のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fCancel;
    }

    /**
     * フィールド [begin]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 利用開始が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @param boolean $argBegin フィールド[begin]に格納したい値
     */
    public /*.void.*/ function setBegin(/*.boolean.*/ $argBegin) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setBegin のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argBegin) !== 'boolean' && gettype($argBegin) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setBegin の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argBegin) . ']型が与えられました。');
        }

        $this->fBegin = $argBegin;
    }

    /**
     * フィールド[begin]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 利用開始が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @return boolean フィールド[begin]に格納されている値
     */
    public /*.boolean.*/ function getBegin() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getBegin のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fBegin;
    }

    /**
     * フィールド [end]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 利用終了が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @param boolean $argEnd フィールド[end]に格納したい値
     */
    public /*.void.*/ function setEnd(/*.boolean.*/ $argEnd) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setEnd のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argEnd) !== 'boolean' && gettype($argEnd) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setEnd の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argEnd) . ']型が与えられました。');
        }

        $this->fEnd = $argEnd;
    }

    /**
     * フィールド[end]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 利用終了が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @return boolean フィールド[end]に格納されている値
     */
    public /*.boolean.*/ function getEnd() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getEnd のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fEnd;
    }

    /**
     * フィールド [open]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 開錠が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @param boolean $argOpen フィールド[open]に格納したい値
     */
    public /*.void.*/ function setOpen(/*.boolean.*/ $argOpen) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setOpen のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argOpen) !== 'boolean' && gettype($argOpen) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setOpen の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argOpen) . ']型が与えられました。');
        }

        $this->fOpen = $argOpen;
    }

    /**
     * フィールド[open]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 開錠が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @return boolean フィールド[open]に格納されている値
     */
    public /*.boolean.*/ function getOpen() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getOpen のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fOpen;
    }

    /**
     * フィールド [close]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 施錠が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @param boolean $argClose フィールド[close]に格納したい値
     */
    public /*.void.*/ function setClose(/*.boolean.*/ $argClose) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setClose のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argClose) !== 'boolean' && gettype($argClose) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setClose の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argClose) . ']型が与えられました。');
        }

        $this->fClose = $argClose;
    }

    /**
     * フィールド[close]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 施錠が可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @return boolean フィールド[close]に格納されている値
     */
    public /*.boolean.*/ function getClose() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getClose のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fClose;
    }

    /**
     * フィールド [moveup]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 10分前倒しが可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @param boolean $argMoveup フィールド[moveup]に格納したい値
     */
    public /*.void.*/ function setMoveup(/*.boolean.*/ $argMoveup) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setMoveup のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argMoveup) !== 'boolean' && gettype($argMoveup) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setMoveup の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argMoveup) . ']型が与えられました。');
        }

        $this->fMoveup = $argMoveup;
    }

    /**
     * フィールド[moveup]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 10分前倒しが可能かどうか。可能な場合は1、不可能な場合は0
     *
     * @return boolean フィールド[moveup]に格納されている値
     */
    public /*.boolean.*/ function getMoveup() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getMoveup のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fMoveup;
    }

    /**
     * フィールド [withinOneDays]のセッターメソッド
     *
     * 項目の型 [boolean]
     * 予約が24時間以内かどうか。24時間以内の場合は1、24時間より多い場合は0
     *
     * @param boolean $argWithinOneDays フィールド[withinOneDays]に格納したい値
     */
    public /*.void.*/ function setWithinOneDays(/*.boolean.*/ $argWithinOneDays) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setWithinOneDays のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argWithinOneDays) !== 'boolean' && gettype($argWithinOneDays) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setWithinOneDays の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argWithinOneDays) . ']型が与えられました。');
        }

        $this->fWithinOneDays = $argWithinOneDays;
    }

    /**
     * フィールド[withinOneDays]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 予約が24時間以内かどうか。24時間以内の場合は1、24時間より多い場合は0
     *
     * @return boolean フィールド[withinOneDays]に格納されている値
     */
    public /*.boolean.*/ function getWithinOneDays() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getWithinOneDays のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fWithinOneDays;
    }

    /**
     * フィールド [price]のセッターメソッド
     *
     * 項目の型 [integer]
     * 概算料金
     *
     * @param integer $argPrice フィールド[price]に格納したい値
     */
    public /*.void.*/ function setPrice(/*.int.*/ $argPrice) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setPrice のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argPrice) !== 'integer' && gettype($argPrice) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setPrice の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argPrice) . ']型が与えられました。');
        }

        $this->fPrice = $argPrice;
    }

    /**
     * フィールド[price]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 概算料金
     *
     * @return integer フィールド[price]に格納されている値
     */
    public /*.int.*/ function getPrice() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getPrice のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fPrice;
    }

    /**
     * フィールド [pack]のセッターメソッド
     *
     * 項目の型 [string]
     * パック適用文字列
     *
     * @param string $argPack フィールド[pack]に格納したい値
     */
    public /*.void.*/ function setPack(/*.string.*/ $argPack) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setPack のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argPack) !== 'string' && gettype($argPack) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setPack の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argPack) . ']型が与えられました。');
        }

        $this->fPack = $argPack;
    }

    /**
     * フィールド[pack]のゲッターメソッド
     *
     * 項目の型 [string]
     * パック適用文字列
     *
     * @return string フィールド[pack]に格納されている値
     */
    public /*.string.*/ function getPack() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getPack のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fPack;
    }

    /**
     * フィールド [plan]のセッターメソッド
     *
     * 項目の型 [Plan]
     * 料金プラン
     *
     * @param Plan $argPlan フィールド[plan]に格納したい値
     */
    public /*.void.*/ function setPlan(/*.Plan.*/ $argPlan) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setPlan のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argPlan instanceof Plan === FALSE) {
            throw new Exception('[ArgumentException]: Reserve.setPlan の1番目のパラメータは[Plan]型でなくてはなりません。しかし実際には[' . get_class($argPlan) . ']型が与えられました。');
        }

        $this->fPlan = $argPlan;
    }

    /**
     * フィールド[plan]のゲッターメソッド
     *
     * 項目の型 [Plan]
     * 料金プラン
     *
     * @return Plan フィールド[plan]に格納されている値
     */
    public /*.Plan.*/ function getPlan() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getPlan のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fPlan;
    }

    /**
     * フィールド [totalTime]のセッターメソッド
     *
     * 項目の型 [string]
     * 予約時間
     *
     * @param string $argTotalTime フィールド[totalTime]に格納したい値
     */
    public /*.void.*/ function setTotalTime(/*.string.*/ $argTotalTime) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Reserve.setTotalTime のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argTotalTime) !== 'string' && gettype($argTotalTime) !== 'NULL') {
            throw new Exception('[ArgumentException]: Reserve.setTotalTime の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argTotalTime) . ']型が与えられました。');
        }

        $this->fTotalTime = $argTotalTime;
    }

    /**
     * フィールド[totalTime]のゲッターメソッド
     *
     * 項目の型 [string]
     * 予約時間
     *
     * @return string フィールド[totalTime]に格納されている値
     */
    public /*.string.*/ function getTotalTime() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Reserve.getTotalTime のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fTotalTime;
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
            throw new Exception('[ArgumentException]: Reserve.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
