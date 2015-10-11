<?php
/*
 * バリューオブジェクトのサンプル。このクラスは単にサンプルです。実際の動作には利用されません。
 */
/*. DOC <@package blanco.sample.valueobject;>.*/

/*. require_module 'standard'; .*/;

/**
 * バリューオブジェクトのサンプル。このクラスは単にサンプルです。実際の動作には利用されません。
 */
class Sample {
    /**
     * フィールド [stringField1]
     *
     * 項目の型 [string]
     * デフォルト値あり
     */
    private /*.string.*/ $fStringField1 = 'デフォルト';

    /**
     * フィールド [stringField2]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fStringField2;

    /**
     * フィールド [booleanField1]
     *
     * 項目の型 [boolean]
     * デフォルト値あり
     */
    private /*.boolean.*/ $fBooleanField1 = false;

    /**
     * フィールド [booleanField2]
     *
     * 項目の型 [boolean]
     */
    private /*.boolean.*/ $fBooleanField2;

    /**
     * フィールド [intField1]
     *
     * 項目の型 [integer]
     * デフォルト値あり
     */
    private /*.int.*/ $fIntField1 = 123;

    /**
     * フィールド [intField2]
     *
     * 項目の型 [integer]
     */
    private /*.int.*/ $fIntField2;

    /**
     * フィールド [floatField1]
     *
     * 項目の型 [float]
     * デフォルト値あり
     */
    private /*.float.*/ $fFloatField1 = 123.456;

    /**
     * フィールド [floatField2]
     *
     * 項目の型 [float]
     */
    private /*.float.*/ $fFloatField2;

    /**
     * フィールド [doubleField1]
     *
     * 項目の型 [double]
     * デフォルト値あり
     */
    private /*.float.*/ $fDoubleField1 = 123.456;

    /**
     * フィールド [doubleField2]
     *
     * 項目の型 [double]
     */
    private /*.float.*/ $fDoubleField2;

    /**
     * フィールド [stringField1]のセッターメソッド
     *
     * 項目の型 [string]
     * デフォルト値あり
     *
     * @param string $argStringField1 フィールド[stringField1]に格納したい値
     */
    public /*.void.*/ function setStringField1(/*.string.*/ $argStringField1) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setStringField1 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argStringField1) !== 'string' && gettype($argStringField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setStringField1 の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argStringField1) . ']型が与えられました。');
        }

        $this->fStringField1 = $argStringField1;
    }

    /**
     * フィールド[stringField1]のゲッターメソッド
     *
     * 項目の型 [string]
     * 規定値   [デフォルト]
     * デフォルト値あり
     *
     * @return string フィールド[stringField1]に格納されている値
     */
    public /*.string.*/ function getStringField1() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getStringField1 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fStringField1;
    }

    /**
     * フィールド [stringField2]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argStringField2 フィールド[stringField2]に格納したい値
     */
    public /*.void.*/ function setStringField2(/*.string.*/ $argStringField2) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setStringField2 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argStringField2) !== 'string' && gettype($argStringField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setStringField2 の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argStringField2) . ']型が与えられました。');
        }

        $this->fStringField2 = $argStringField2;
    }

    /**
     * フィールド[stringField2]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[stringField2]に格納されている値
     */
    public /*.string.*/ function getStringField2() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getStringField2 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fStringField2;
    }

    /**
     * フィールド [booleanField1]のセッターメソッド
     *
     * 項目の型 [boolean]
     * デフォルト値あり
     *
     * @param boolean $argBooleanField1 フィールド[booleanField1]に格納したい値
     */
    public /*.void.*/ function setBooleanField1(/*.boolean.*/ $argBooleanField1) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setBooleanField1 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argBooleanField1) !== 'boolean' && gettype($argBooleanField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setBooleanField1 の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argBooleanField1) . ']型が与えられました。');
        }

        $this->fBooleanField1 = $argBooleanField1;
    }

    /**
     * フィールド[booleanField1]のゲッターメソッド
     *
     * 項目の型 [boolean]
     * 規定値   [false]
     * デフォルト値あり
     *
     * @return boolean フィールド[booleanField1]に格納されている値
     */
    public /*.boolean.*/ function getBooleanField1() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getBooleanField1 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fBooleanField1;
    }

    /**
     * フィールド [booleanField2]のセッターメソッド
     *
     * 項目の型 [boolean]
     *
     * @param boolean $argBooleanField2 フィールド[booleanField2]に格納したい値
     */
    public /*.void.*/ function setBooleanField2(/*.boolean.*/ $argBooleanField2) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setBooleanField2 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argBooleanField2) !== 'boolean' && gettype($argBooleanField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setBooleanField2 の1番目のパラメータは[boolean]型でなくてはなりません。しかし実際には[' . gettype($argBooleanField2) . ']型が与えられました。');
        }

        $this->fBooleanField2 = $argBooleanField2;
    }

    /**
     * フィールド[booleanField2]のゲッターメソッド
     *
     * 項目の型 [boolean]
     *
     * @return boolean フィールド[booleanField2]に格納されている値
     */
    public /*.boolean.*/ function getBooleanField2() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getBooleanField2 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fBooleanField2;
    }

    /**
     * フィールド [intField1]のセッターメソッド
     *
     * 項目の型 [integer]
     * デフォルト値あり
     *
     * @param integer $argIntField1 フィールド[intField1]に格納したい値
     */
    public /*.void.*/ function setIntField1(/*.int.*/ $argIntField1) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setIntField1 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argIntField1) !== 'integer' && gettype($argIntField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setIntField1 の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argIntField1) . ']型が与えられました。');
        }

        $this->fIntField1 = $argIntField1;
    }

    /**
     * フィールド[intField1]のゲッターメソッド
     *
     * 項目の型 [integer]
     * 規定値   [123]
     * デフォルト値あり
     *
     * @return integer フィールド[intField1]に格納されている値
     */
    public /*.int.*/ function getIntField1() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getIntField1 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fIntField1;
    }

    /**
     * フィールド [intField2]のセッターメソッド
     *
     * 項目の型 [integer]
     *
     * @param integer $argIntField2 フィールド[intField2]に格納したい値
     */
    public /*.void.*/ function setIntField2(/*.int.*/ $argIntField2) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setIntField2 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argIntField2) !== 'integer' && gettype($argIntField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setIntField2 の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argIntField2) . ']型が与えられました。');
        }

        $this->fIntField2 = $argIntField2;
    }

    /**
     * フィールド[intField2]のゲッターメソッド
     *
     * 項目の型 [integer]
     *
     * @return integer フィールド[intField2]に格納されている値
     */
    public /*.int.*/ function getIntField2() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getIntField2 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fIntField2;
    }

    /**
     * フィールド [floatField1]のセッターメソッド
     *
     * 項目の型 [float]
     * デフォルト値あり
     *
     * @param float $argFloatField1 フィールド[floatField1]に格納したい値
     */
    public /*.void.*/ function setFloatField1(/*.float.*/ $argFloatField1) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setFloatField1 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argFloatField1) !== 'double' && gettype($argFloatField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setFloatField1 の1番目のパラメータは[float]型でなくてはなりません。しかし実際には[' . gettype($argFloatField1) . ']型が与えられました。');
        }

        $this->fFloatField1 = $argFloatField1;
    }

    /**
     * フィールド[floatField1]のゲッターメソッド
     *
     * 項目の型 [float]
     * 規定値   [123.456]
     * デフォルト値あり
     *
     * @return float フィールド[floatField1]に格納されている値
     */
    public /*.float.*/ function getFloatField1() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getFloatField1 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fFloatField1;
    }

    /**
     * フィールド [floatField2]のセッターメソッド
     *
     * 項目の型 [float]
     *
     * @param float $argFloatField2 フィールド[floatField2]に格納したい値
     */
    public /*.void.*/ function setFloatField2(/*.float.*/ $argFloatField2) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setFloatField2 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argFloatField2) !== 'double' && gettype($argFloatField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setFloatField2 の1番目のパラメータは[float]型でなくてはなりません。しかし実際には[' . gettype($argFloatField2) . ']型が与えられました。');
        }

        $this->fFloatField2 = $argFloatField2;
    }

    /**
     * フィールド[floatField2]のゲッターメソッド
     *
     * 項目の型 [float]
     *
     * @return float フィールド[floatField2]に格納されている値
     */
    public /*.float.*/ function getFloatField2() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getFloatField2 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fFloatField2;
    }

    /**
     * フィールド [doubleField1]のセッターメソッド
     *
     * 項目の型 [double]
     * デフォルト値あり
     *
     * @param double $argDoubleField1 フィールド[doubleField1]に格納したい値
     */
    public /*.void.*/ function setDoubleField1(/*.float.*/ $argDoubleField1) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setDoubleField1 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argDoubleField1) !== 'double' && gettype($argDoubleField1) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setDoubleField1 の1番目のパラメータは[double]型でなくてはなりません。しかし実際には[' . gettype($argDoubleField1) . ']型が与えられました。');
        }

        $this->fDoubleField1 = $argDoubleField1;
    }

    /**
     * フィールド[doubleField1]のゲッターメソッド
     *
     * 項目の型 [double]
     * 規定値   [123.456]
     * デフォルト値あり
     *
     * @return double フィールド[doubleField1]に格納されている値
     */
    public /*.float.*/ function getDoubleField1() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getDoubleField1 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fDoubleField1;
    }

    /**
     * フィールド [doubleField2]のセッターメソッド
     *
     * 項目の型 [double]
     *
     * @param double $argDoubleField2 フィールド[doubleField2]に格納したい値
     */
    public /*.void.*/ function setDoubleField2(/*.float.*/ $argDoubleField2) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Sample.setDoubleField2 のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argDoubleField2) !== 'double' && gettype($argDoubleField2) !== 'NULL') {
            throw new Exception('[ArgumentException]: Sample.setDoubleField2 の1番目のパラメータは[double]型でなくてはなりません。しかし実際には[' . gettype($argDoubleField2) . ']型が与えられました。');
        }

        $this->fDoubleField2 = $argDoubleField2;
    }

    /**
     * フィールド[doubleField2]のゲッターメソッド
     *
     * 項目の型 [double]
     *
     * @return double フィールド[doubleField2]に格納されている値
     */
    public /*.float.*/ function getDoubleField2() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Sample.getDoubleField2 のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fDoubleField2;
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
            throw new Exception('[ArgumentException]: Sample.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
