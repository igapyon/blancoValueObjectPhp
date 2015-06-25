<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('Area.php');
/*. require_module 'standard'; .*/;

/**
 */
class Station {
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
     * フィールド [area]
     *
     * 項目の型 [Area]
     * 所属するエリア
     */
    private /*.Area.*/ $fArea;

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
            throw new Exception('[ArgumentException]: Station.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Station.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Station.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
            throw new Exception('[ArgumentException]: Station.setName のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: Station.setName の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argName) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Station.getName のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fName;
    }

    /**
     * フィールド [area]のセッターメソッド
     *
     * 項目の型 [Area]
     * 所属するエリア
     *
     * @param Area $argArea フィールド[area]に格納したい値
     */
    public /*.void.*/ function setArea(/*.Area.*/ $argArea) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Station.setArea のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argArea instanceof Area === FALSE) {
            throw new Exception('[ArgumentException]: Station.setArea の1番目のパラメータは[Area]型でなくてはなりません。しかし実際には[' . get_class($argArea) . ']型が与えられました。');
        }

        $this->fArea = $argArea;
    }

    /**
     * フィールド[area]のゲッターメソッド
     *
     * 項目の型 [Area]
     * 所属するエリア
     *
     * @return Area フィールド[area]に格納されている値
     */
    public /*.Area.*/ function getArea() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Station.getArea のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fArea;
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
            throw new Exception('[ArgumentException]: Station.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.Station[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',name=' . $this->fName;
        $buf = $buf . ',area=' . (string) $this->fArea;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
