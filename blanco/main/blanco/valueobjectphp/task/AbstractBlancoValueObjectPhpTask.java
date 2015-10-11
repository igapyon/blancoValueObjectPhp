/*
 * このソースコードは blanco Frameworkによって自動生成されています。
 * Apache Antタスク [BlancoValueObjectPhp]の抽象親クラス
 */
package blanco.valueobjectphp.task;

import org.apache.tools.ant.BuildException;
import org.apache.tools.ant.Task;

/**
 * Apache Antタスク [BlancoValueObjectPhp]の抽象親クラス。
 *
 * バリューオブジェクト定義書からバリューオブジェクトクラスを自動生成するためのAntTaskです。<br>
 * この抽象親クラスでは、Apache Antタスクで一般的に必要なチェックなどのコーディングを肩代わりします。
 * このクラスを継承して、パッケージ[blanco.valueobjectphp.task]にBlancoValueObjectPhpTaskクラスを作成してください。そしてAntタスクの処理内容を記述してください。<br>
 * <br>
 * Antタスクへの組み込み例<br>
 * <pre>
 * &lt;taskdef name=&quot;blancovalueobjectphp&quot; classname=&quot;blanco.valueobjectphp.task.BlancoValueObjectPhpTask">
 *     &lt;classpath&gt;
 *         &lt;fileset dir=&quot;lib&quot; includes=&quot;*.jar&quot; /&gt;
 *         &lt;fileset dir=&quot;lib.ant&quot; includes=&quot;*.jar&quot; /&gt;
 *     &lt;/classpath&gt;
 * &lt;/taskdef&gt;
 * </pre>
 */
public abstract class AbstractBlancoValueObjectPhpTask extends Task {
    /**
     * Verboseモードで動作させるかどうか。
     */
    private String fVerbose = "false";

    /**
     * Antタスクの[metadir]アトリビュート。
     *
     * 項目番号: 1<br>
     * メタディレクトリ。xlsファイルの格納先または xmlファイルの格納先を指定します。<br>
     * 必須項目<br>
     */
    private String fMetadir;

    /**
     * Antタスクの[targetdir]アトリビュート。
     *
     * 項目番号: 2<br>
     * 出力先フォルダを指定します。無指定の場合にはカレント直下のblancoを用います。<br>
     */
    private String fTargetdir;

    /**
     * Antタスクの[tmpdir]アトリビュート。
     *
     * 項目番号: 3<br>
     * テンポラリディレクトリを指定します。無指定の場合にはカレント直下のtmpを用います。<br>
     */
    private String fTmpdir;

    /**
     * Antタスクの[nameAdjust]アトリビュート。
     *
     * 項目番号: 4<br>
     * フィールド名やメソッド名を名前変形を実施するかどうか。<br>
     */
    private String fNameAdjust;

    /**
     * Verboseモードで動作させるかどうか。
     *
     * @param arg Verboseモードで動作させるかどうか。
     */
    public void setVerbose(final String arg) {
        fVerbose = arg;
    }

    /**
     * Verboseモードで動作させるかどうか。
     *
     * @return Verboseモードで動作させるかどうか。
     */
    public String getVerbose() {
        return fVerbose;
    }

    /**
     * Antタスクの[metadir]アトリビュートのセッターメソッド。
     *
     * 項目番号: 1<br>
     * メタディレクトリ。xlsファイルの格納先または xmlファイルの格納先を指定します。<br>
     *
     * @param arg セットしたい値
     */
    public void setMetadir(final String arg) {
        fMetadir = arg;
    }

    /**
     * Antタスクの[metadir]アトリビュートのゲッターメソッド。
     *
     * 項目番号: 1<br>
     * メタディレクトリ。xlsファイルの格納先または xmlファイルの格納先を指定します。<br>
     * 必須アトリビュートです。Apache Antタスク上で必ず値が指定されます。<br>
     *
     * @return このフィールドの値
     */
    public String getMetadir() {
        return fMetadir;
    }

    /**
     * Antタスクの[targetdir]アトリビュートのセッターメソッド。
     *
     * 項目番号: 2<br>
     * 出力先フォルダを指定します。無指定の場合にはカレント直下のblancoを用います。<br>
     *
     * @param arg セットしたい値
     */
    public void setTargetdir(final String arg) {
        fTargetdir = arg;
    }

    /**
     * Antタスクの[targetdir]アトリビュートのゲッターメソッド。
     *
     * 項目番号: 2<br>
     * 出力先フォルダを指定します。無指定の場合にはカレント直下のblancoを用います。<br>
     * デフォルト値[blanco]が設定されています。Apache Antタスク上でアトリビュートの指定が無い場合には、デフォルト値が設定されます。<br>
     *
     * @return このフィールドの値
     */
    public String getTargetdir() {
        return fTargetdir;
    }

    /**
     * Antタスクの[tmpdir]アトリビュートのセッターメソッド。
     *
     * 項目番号: 3<br>
     * テンポラリディレクトリを指定します。無指定の場合にはカレント直下のtmpを用います。<br>
     *
     * @param arg セットしたい値
     */
    public void setTmpdir(final String arg) {
        fTmpdir = arg;
    }

    /**
     * Antタスクの[tmpdir]アトリビュートのゲッターメソッド。
     *
     * 項目番号: 3<br>
     * テンポラリディレクトリを指定します。無指定の場合にはカレント直下のtmpを用います。<br>
     * デフォルト値[tmp]が設定されています。Apache Antタスク上でアトリビュートの指定が無い場合には、デフォルト値が設定されます。<br>
     *
     * @return このフィールドの値
     */
    public String getTmpdir() {
        return fTmpdir;
    }

    /**
     * Antタスクの[nameAdjust]アトリビュートのセッターメソッド。
     *
     * 項目番号: 4<br>
     * フィールド名やメソッド名を名前変形を実施するかどうか。<br>
     *
     * @param arg セットしたい値
     */
    public void setNameAdjust(final String arg) {
        fNameAdjust = arg;
    }

    /**
     * Antタスクの[nameAdjust]アトリビュートのゲッターメソッド。
     *
     * 項目番号: 4<br>
     * フィールド名やメソッド名を名前変形を実施するかどうか。<br>
     * デフォルト値[true]が設定されています。Apache Antタスク上でアトリビュートの指定が無い場合には、デフォルト値が設定されます。<br>
     *
     * @return このフィールドの値
     */
    public String getNameAdjust() {
        return fNameAdjust;
    }

    /**
     * 実際のAntTaskの処理について、このメソッドをオーバーライドします。
     *
     * @throws IllegalArgumentException 引数や入出力などについて例外が発生した場合。
     */
    protected abstract void process() throws IllegalArgumentException;

    /**
     * Antタスクのメイン処理。Apache Antから このメソッドが呼び出されます。
     *
     * @throws BuildException タスクとしての例外が発生した場合。
     */
    public final void execute() throws BuildException {
        System.out.println("BlancoValueObjectPhpTask begin.");

        // 項目番号[1]、アトリビュート[metadir]は必須入力です。入力チェックを行います。
        if (getMetadir() == null) {
            throw new BuildException("アトリビュート[metadir]が設定されていません。処理を中断します。");
        }
        // 項目番号[2]、アトリビュート[targetdir]にはデフォルトが設定されています。入力がnullの場合にはデフォルト値をセットします。
        if (getTargetdir() == null) {
            setTargetdir("blanco");
        }
        // 項目番号[3]、アトリビュート[tmpdir]にはデフォルトが設定されています。入力がnullの場合にはデフォルト値をセットします。
        if (getTmpdir() == null) {
            setTmpdir("tmp");
        }
        // 項目番号[4]、アトリビュート[nameAdjust]にはデフォルトが設定されています。入力がnullの場合にはデフォルト値をセットします。
        if (getNameAdjust() == null) {
            setNameAdjust("true");
        }

        if ("true".equals(getVerbose())) {
            System.out.println("- verbose:[true]");
            System.out.println("- metadir:[" + getMetadir() + "]");
            System.out.println("- targetdir:[" + getTargetdir() + "]");
            System.out.println("- tmpdir:[" + getTmpdir() + "]");
            System.out.println("- nameAdjust:[" + getNameAdjust() + "]");
        }

        try {
            // 実際のAntタスクの主処理を実行します。
            process();
        } catch (IllegalArgumentException e) {
            if ("true".equals(getVerbose())) {
                e.printStackTrace();
            }
            throw new BuildException(e.getMessage());
        } catch (Exception e) {
            e.printStackTrace();
            throw new BuildException("タスクを処理中に例外が発生しました。処理を中断します。" + e.toString());
        } catch (Error e) {
            e.printStackTrace();
            throw new BuildException("タスクを処理中にエラーが発生しました。処理を中断します。" + e.toString());
        }
    }
}
