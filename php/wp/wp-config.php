<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'password');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+{!Hm~_3bcr?Y@]4~VbLkNOk_U:WBh(3#J7O*3UhzT<H.@Vj<!4zJ]-$Db.?^n,*');
define('SECURE_AUTH_KEY',  '~>-C7<u&& /KNg)c2MIvyq?^`PEb4<mL]UU9WTD!v!a}-3#b=w0u2J,9Aoj>l>vQ');
define('LOGGED_IN_KEY',    '2^IJ59W]Xv2t&)CgMeX-:IHgzy1tI{o;H?4Nf$ so=kY#i8G@ ==go8fA-c9HZ,:');
define('NONCE_KEY',        ',T`h1&q]v.5b[l[H%zMbX4*z)1e!|b>.HN[j]hTAr_id/~PztkK(spO~vrGy6_1y');
define('AUTH_SALT',        'O,hA gMN>Cm>7b-UQ9u7kV+wK[o8euE}9CH|xCA}R,a~O@Y2W}[IkPasQ9s@e{u7');
define('SECURE_AUTH_SALT', 'f}Q>bq{,ekn#Y%5} kcn6m8n_/hPg8k4FsFhBMD4:j5jU0i/f0CRO#|%#g%E4{Mm');
define('LOGGED_IN_SALT',   'aeYQ+D6>Ff27L):Y]n+~c|CqkWXlbd];B$N1|SnC,(>9z[oLA{?U^zI>2:%Ki>J>');
define('NONCE_SALT',       ']F;]6n(;bRA`<8]0)pT>[dS=?/7CE^BunEgsu9}~!x!Or9,N@P!n*E{@/;_+!CvT');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');