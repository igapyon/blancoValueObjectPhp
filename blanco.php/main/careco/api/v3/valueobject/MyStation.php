<?php
/*
 * このソースコードは blanco Frameworkによって自動生成されています。
 */
/*. DOC <@package careco.api.v3.valueobject;>.*/

require_once('Station.php');
/*. require_module 'standard'; .*/;

/**
 * StationにmystationIDがふられるためクラスが必要？
 */
class MyStation {
    /**
     * フィールド [id]
     *
     * 項目の型 [integer]
     * myStationID
     */
    private /*.int.*/ $fId;

    /**
     * フィールド [station]
     *
     * 項目の型 [Station]
     */
    private /*.Station.*/ $fStation;

    /**
     * フィールド [id]のセッターメソッド
     *
     * 項目の型 [integer]
     * myStationID
     *
     * @param integer $argId フィールド[id]に格納したい値
     */
    public /*.void.*/ function setId(/*.int.*/ $argId) {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 1) {
            throw new Exception('[ArgumentException]: MyStation.setId のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if (gettype($argId) !== 'integer' && gettype($argId) !== 'NULL') {
            throw new Exception('[ArgumentException]: MyStation.setId の1番目のパラメータは[integer]型でなくてはなりません。しかし実際には[' . gettype($argId) . ']型が与えられました。');
        }

        $this->fId = $argId;
    }

    /**
     * フィールド[id]のゲッターメソッド
     *
     * 項目の型 [integer]
     * myStationID
     *
     * @return integer フィールド[id]に格納されている値
     */
    public /*.int.*/ function getId() {
        /* パラメータの数、型チェックを行います。 */
        if (func_num_args() !== 0) {
            throw new Exception('[ArgumentException]: MyStation.getId のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
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
            throw new Exception('[ArgumentException]: MyStation.setStation のパラメータは[1]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }
        if ($argStation instanceof Station === FALSE) {
            throw new Exception('[ArgumentException]: MyStation.setStation の1番目のパラメータは[Station]型でなくてはなりません。しかし実際には[' . get_class($argStation) . ']型が与えられました。');
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
            throw new Exception('[ArgumentException]: MyStation.getStation のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        return $this->fStation;
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
            throw new Exception('[ArgumentException]: MyStation.__toString のパラメータは[0]個である必要があります。しかし実際には[' . func_num_args() .  ']個のパラメータを伴って呼び出されました。');
        }

        $buf = '';
        $buf = $buf . 'careco.api.v3.valueobject.MyStation[';
        $buf = $buf . 'id=' . (string) $this->fId;
        $buf = $buf . ',station=' . (string) $this->fStation;
        $buf = $buf . ']';
        return $buf;
    }
}
?>
