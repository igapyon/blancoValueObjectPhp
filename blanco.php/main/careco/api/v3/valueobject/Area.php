<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('AreaGroup.php');
/*. require_module 'standard'; .*/;

/**
 */
class Area {
    /**
     * フィールド [id]
     *
     * 項目の型 [integer]
     * エリアId
     */
    private /*.int.*/ $fId;

    /**
     * フィールド [name]
     *
     * 項目の型 [string]
     */
    private /*.string.*/ $fName;

    /**
     * フィールド [areagroup]
     *
     * 項目の型 [AreaGroup]
     * 所属するエリアグループ
     */
    private /*.AreaGroup.*/ $fAreagroup;

    /**
     * フィールド [id]のセッターメソッド
     *
     * 項目の型 [integer]
     * エリアId
     *
     * @param integer $argId フィールド[id]に格納したい値
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Area.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: Area.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
        }

        $this->fId = $argId;
    }

    /**
     * フィールド[id]のゲッターメソッド
     *
     * 項目の型 [integer]
     * エリアId
     *
     * @return integer フィールド[id]に格納されている値
     */
    public /*.int.*/ function getId() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Area.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
            throw new Exception('[ArgumentException]: Area.setName のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argName) !== 'string' && gettype($argName) !== 'NULL') {
            throw new Exception('[ArgumentException]: Area.setName の1番目のパラメータは[string]型でなくてはなりません。しかし実際には[' . gettype($argName) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: Area.getName のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fName;
    }

    /**
     * フィールド [areagroup]のセッターメソッド
     *
     * 項目の型 [AreaGroup]
     * 所属するエリアグループ
     *
     * @param AreaGroup $argAreagroup フィールド[areagroup]に格納したい値
     */
    public /*.void.*/ function setAreagroup(/*.AreaGroup.*/ $argAreagroup) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: Area.setAreagroup のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argAreagroup instanceof AreaGroup === FALSE) {
            throw new Exception('[ArgumentException]: Area.setAreagroup の1番目のパラメータは[AreaGroup]型でなくてはなりません。しかし実際には[' . get_class($argAreagroup) . ']型が与えられました。');
        }

        $this->fAreagroup = $argAreagroup;
    }

    /**
     * フィールド[areagroup]のゲッターメソッド
     *
     * 項目の型 [AreaGroup]
     * 所属するエリアグループ
     *
     * @return AreaGroup フィールド[areagroup]に格納されている値
     */
    public /*.AreaGroup.*/ function getAreagroup() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: Area.getAreagroup のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fAreagroup;
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
            throw new Exception('[ArgumentException]: Area.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.Area[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',name=' . $this->fName;
        $buf = $buf . ',areagroup=' . (string) $this->fAreagroup;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
