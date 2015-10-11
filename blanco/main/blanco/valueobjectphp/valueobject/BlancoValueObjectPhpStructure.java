/*
 * このソースコードは blanco Frameworkにより自動生成されました。
 */
package blanco.valueobjectphp.valueobject;

import java.util.ArrayList;

/**
 * BlancoValueObjectPhpのなかで利用されるValueObjectです。
 */
public class BlancoValueObjectPhpStructure {
    /**
     * メッセージ定義IDを指定します。必須項目です。
     *
     * フィールド: [name]。
     */
    private String fName;

    /**
     * パッケージ名を指定します。必須項目です。
     *
     * フィールド: [package]。
     */
    private String fPackage;

    /**
     * メッセージ定義の説明を記載します。
     *
     * フィールド: [description]。
     */
    private String fDescription;

    /**
     * ファイル説明
     *
     * フィールド: [fileDescription]。
     */
    private String fFileDescription;

    /**
     * フィールドを保持するリスト。
     *
     * フィールド: [listField]。
     * デフォルト: [new java.util.ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure>()]。
     */
    private ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure> fListField = new java.util.ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure>();

    /**
     * フィールド [name] の値を設定します。
     *
     * フィールドの説明: [メッセージ定義IDを指定します。必須項目です。]。
     *
     * @param argName フィールド[name]に設定する値。
     */
    public void setName(final String argName) {
        fName = argName;
    }

    /**
     * フィールド [name] の値を取得します。
     *
     * フィールドの説明: [メッセージ定義IDを指定します。必須項目です。]。
     *
     * @return フィールド[name]から取得した値。
     */
    public String getName() {
        return fName;
    }

    /**
     * フィールド [package] の値を設定します。
     *
     * フィールドの説明: [パッケージ名を指定します。必須項目です。]。
     *
     * @param argPackage フィールド[package]に設定する値。
     */
    public void setPackage(final String argPackage) {
        fPackage = argPackage;
    }

    /**
     * フィールド [package] の値を取得します。
     *
     * フィールドの説明: [パッケージ名を指定します。必須項目です。]。
     *
     * @return フィールド[package]から取得した値。
     */
    public String getPackage() {
        return fPackage;
    }

    /**
     * フィールド [description] の値を設定します。
     *
     * フィールドの説明: [メッセージ定義の説明を記載します。]。
     *
     * @param argDescription フィールド[description]に設定する値。
     */
    public void setDescription(final String argDescription) {
        fDescription = argDescription;
    }

    /**
     * フィールド [description] の値を取得します。
     *
     * フィールドの説明: [メッセージ定義の説明を記載します。]。
     *
     * @return フィールド[description]から取得した値。
     */
    public String getDescription() {
        return fDescription;
    }

    /**
     * フィールド [fileDescription] の値を設定します。
     *
     * フィールドの説明: [ファイル説明]。
     *
     * @param argFileDescription フィールド[fileDescription]に設定する値。
     */
    public void setFileDescription(final String argFileDescription) {
        fFileDescription = argFileDescription;
    }

    /**
     * フィールド [fileDescription] の値を取得します。
     *
     * フィールドの説明: [ファイル説明]。
     *
     * @return フィールド[fileDescription]から取得した値。
     */
    public String getFileDescription() {
        return fFileDescription;
    }

    /**
     * フィールド [listField] の値を設定します。
     *
     * フィールドの説明: [フィールドを保持するリスト。]。
     *
     * @param argListField フィールド[listField]に設定する値。
     */
    public void setListField(final ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure> argListField) {
        fListField = argListField;
    }

    /**
     * フィールド [listField] の値を取得します。
     *
     * フィールドの説明: [フィールドを保持するリスト。]。
     * デフォルト: [new java.util.ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure>()]。
     *
     * @return フィールド[listField]から取得した値。
     */
    public ArrayList<blanco.valueobjectphp.valueobject.BlancoValueObjectPhpFieldStructure> getListField() {
        return fListField;
    }

    /**
     * このバリューオブジェクトの文字列表現を取得します。
     *
     * <P>使用上の注意</P>
     * <UL>
     * <LI>オブジェクトのシャロー範囲のみ文字列化の処理対象となります。
     * <LI>オブジェクトが循環参照している場合には、このメソッドは使わないでください。
     * </UL>
     *
     * @return バリューオブジェクトの文字列表現。
     */
    @Override
    public String toString() {
        final StringBuffer buf = new StringBuffer();
        buf.append("blanco.valueobjectphp.valueobject.BlancoValueObjectPhpStructure[");
        buf.append("name=" + fName);
        buf.append(",package=" + fPackage);
        buf.append(",description=" + fDescription);
        buf.append(",fileDescription=" + fFileDescription);
        buf.append(",listField=" + fListField);
        buf.append("]");
        return buf.toString();
    }
}
