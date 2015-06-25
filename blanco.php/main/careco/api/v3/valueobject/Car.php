<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

/*. require_module 'standard'; .*/;

/**
 */
class Car {
    /**
     * フィールド [id]
     *
     * 項目の型 [integer]
     */
    private /*.int.*/ $fId;

    /**
     * フィールド [name]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fName;

    /**
     * フィールド [number]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fNumber;

    /**
     * フィールド [timePrice]
     *
     * 項目の型 [integer]
     * 10分あたりの時間単価
     */
    private /*.int.*/ $fTimePrice;

    /**
     * フィールド [milePrice]
     *
     * 項目の型 [integer]
     * 距離単価
     */
    private /*.int.*/ $fMilePrice;

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
            throw new Exception('[ArgumentException]: Car.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Car.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fId;
    }

    /**
     * フィールド [name]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argName フィールド[name]に格納したい値
     */
    public /*.void.*/ function setName(/*.string.*/ $argName) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Car.setName のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setName の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argName) . ']型が与えられました。');
        }

        $this->fName = $argName;
    }

    /**
     * フィールド[name]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[name]に格納されている値
     */
    public /*.string.*/ function getName() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Car.getName のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fName;
    }

    /**
     * フィールド [number]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argNumber フィールド[number]に格納したい値
     */
    public /*.void.*/ function setNumber(/*.string.*/ $argNumber) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Car.setNumber のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argNumber) !== 'string' && gettype($argNumber) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setNumber の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argNumber) . ']型が与えられました。');
        }

        $this->fNumber = $argNumber;
    }

    /**
     * フィールド[number]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[number]に格納されている値
     */
    public /*.string.*/ function getNumber() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Car.getNumber のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fNumber;
    }

    /**
     * フィールド [timePrice]のセッターメソッド
     *
     * 項目の型 [integer]
     * 10分あたりの時間単価
     *
     * @param integer $argTimePrice フィールド[timePrice]に格納したい値
     */
    public /*.void.*/ function setTimePrice(/*.int.*/ $argTimePrice) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Car.setTimePrice のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argTimePrice) !== 'integer' && gettype($argTimePrice) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setTimePrice の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argTimePrice) . ']型が与えられました。');
        }

        $this->fTimePrice = $argTimePrice;
    }

    /**
     * フィールド[timePrice]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 10分あたりの時間単価
     *
     * @return integer フィールド[timePrice]に格納されている値
     */
    public /*.int.*/ function getTimePrice() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Car.getTimePrice のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fTimePrice;
    }

    /**
     * フィールド [milePrice]のセッターメソッド
     *
     * 項目の型 [integer]
     * 距離単価
     *
     * @param integer $argMilePrice フィールド[milePrice]に格納したい値
     */
    public /*.void.*/ function setMilePrice(/*.int.*/ $argMilePrice) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Car.setMilePrice のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argMilePrice) !== 'integer' && gettype($argMilePrice) !== 'NULL') {
            throw new Exception('[ArgumentException]: Car.setMilePrice の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argMilePrice) . ']型が与えられました。');
        }

        $this->fMilePrice = $argMilePrice;
    }

    /**
     * フィールド[milePrice]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 距離単価
     *
     * @return integer フィールド[milePrice]に格納されている値
     */
    public /*.int.*/ function getMilePrice() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Car.getMilePrice のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fMilePrice;
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
            throw new Exception('[ArgumentException]: Car.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
