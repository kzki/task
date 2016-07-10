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
define('DB_NAME', 'wp_blog');

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
define('AUTH_KEY',         's3Dm`6Q;PWb_l.j[/5,Tu!LGQ7Q+{>Bi,]#a#*ElY[!csbJGwAfZP6Q3VU~hws:S');
define('SECURE_AUTH_KEY',  '@fAedT|TjM|6|u|vszi^ma&BwdaN]-:|QT[<[(+,EJSv[ZCH*&DygXGjs,j3AT<e');
define('LOGGED_IN_KEY',    'CC89dD5&1NpuI9$v?@ho5{FAA`FH;hv@[s2QWR2Gl@2ib49M}SZpPL+vJaBtSs}M');
define('NONCE_KEY',        '1NIv2eela3xy!W7IA.!9SW]hmkHc?Pp: ^A`@!rsQV2Y>EF)>VNpQKy]_M*Razd~');
define('AUTH_SALT',        '#:&#+.!U3?/&H%fI8*l,(oj6KTrfYg}EUGS=RG6drRMgap%6{V3YLPw|rd=K+7go');
define('SECURE_AUTH_SALT', 'sF#qsk4&~h2.Z0@0OFwLTRSx{GFTpC5R/^1-v/eH}IJZ`}5c~)25@MT-VQ,7&td8');
define('LOGGED_IN_SALT',   ',UQ3gE&9=j*QjqXeW,i 2&%[*YPw?cCbf#8imd.G[hb/h%jzRT)xP,]5MTU6TTJ2');
define('NONCE_SALT',       ')iu=R[4F+$GOE0>7-Ngc}A{o0OI!zQt6VJMVa4I7_fV`1jc1lr>7ET.BxqT+^=]W');

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
