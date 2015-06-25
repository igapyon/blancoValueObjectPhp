<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

/*. require_module 'standard'; .*/;

/**
 * 駐車場グレード
 */
class ParkingGrade {
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
     * フィールド [kana]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fKana;

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
            throw new Exception('[ArgumentException]: ParkingGrade.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: ParkingGrade.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: ParkingGrade.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
            throw new Exception('[ArgumentException]: ParkingGrade.setName のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: ParkingGrade.setName の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argName) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: ParkingGrade.getName のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fName;
    }

    /**
     * フィールド [kana]のセッターメソッド
     *
     * 項目の型 [string]
     *
     * @param string $argKana フィールド[kana]に格納したい値
     */
    public /*.void.*/ function setKana(/*.string.*/ $argKana) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: ParkingGrade.setKana のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argKana) !== 'string' && gettype($argKana) !== 'NULL') {
            throw new Exception('[ArgumentException]: ParkingGrade.setKana の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argKana) . ']型が与えられました。');
        }

        $this->fKana = $argKana;
    }

    /**
     * フィールド[kana]のゲッターメソッド
     *
     * 項目の型 [string]
     *
     * @return string フィールド[kana]に格納されている値
     */
    public /*.string.*/ function getKana() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: ParkingGrade.getKana のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fKana;
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
            throw new Exception('[ArgumentException]: ParkingGrade.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.ParkingGrade[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',name=' . $this->fName;
        $buf = $buf . ',kana=' . $this->fKana;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
