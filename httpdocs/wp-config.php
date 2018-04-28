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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'db_wordpress_2');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'kam_admin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'hoge1234');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'SY&le^w^o2Kmi0]zusSa*)P(l/Zgb7N1YV9[CMa[OF!o[DR.W=SXHRAX(_]Z&[{L');
define('SECURE_AUTH_KEY',  'G(F8IqIi[Ornoj+J6vweM-Zg.+1nv-ExZk=wNw|tfdsbLG=QO.C^v-qsDWqNyIv!');
define('LOGGED_IN_KEY',    'I$e8ZWMz>>k[bQAi1a)?lqU#BAf$aU(NBI/;k=0JkXhAYz8WaosiFrcdkYMUjgyI');
define('NONCE_KEY',        '%U}vLF1KM8c6A94}U jwBc8kp=l4CRC`Tx.d~YVpp(+^J Yh4$i}HWmFL:sP[lE`');
define('AUTH_SALT',        'rsgr/1br?;J](`a/aTFC*sxKCEbbh34G7t#e!Av(o3&,P]cOq#0{M=uVH2wXy#va');
define('SECURE_AUTH_SALT', '7wG/iI >`Ew.2n<j*|MzX{_p!hR}#XtMQ(D?M9bmgoiSZ?5Gn!e6/t^|4ra}Jpkj');
define('LOGGED_IN_SALT',   '!Nn(66(%)kMeo&&WcxU5BE>uAL14Yo#,0*R)x!>]T~]DtS?sQz[4tq@4*n6D JrD');
define('NONCE_SALT',       'B|w/OUedtF n..NxZoeg&M.iyi3;/,N7_!qoF_ Y4K!jG)R=gv#[Q,wE)ua]Rj&}');

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
define('WP_DEBUG', true);

/** 
* WP_DEBUG_LOG
* WP_DEBUG_LOG は WP_DEBUG と一緒に使用して、すべてのエラーをディレクトリ wp-content 下の
* ログファイル debug.log に保存します。これはあとですべての通知を確認したり、
* 画面の外で生成される通知を確認する場合に便利です
* (たとえば AJAX リクエスト中や wp-cron 実行中など)。
* 注意: この状態で PHP のビルトイン関数 error_log() を使用すると 
* wp-content/debug.log に出力できます。これはたとえば AJAX のイベントをデバッグする際に便利です。
*/
define( 'WP_DEBUG_LOG', true );

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

// TODO:{これからここを修正すること}
/** Absolute path to the WordPress directory. */
/**
* ABSPATHの指定を変更
* コアファイル（index.php含む）のディレクトリが/home/に配置しているので、それをABSPATHに指定する
*/
if ( !defined('ABSPATH') )
//	define('ABSPATH', dirname(__FILE__) . '/home/');
    define('ABSPATH', dirname(__FILE__) . '/');   
    //初期のABSPATH指定

/**
* WP_CONTENT_DIRの定義
* /Users/kamogashiratsuyoshi/Dropbox/_local_mamp/wp2/wp2content/wp-content
* となる
*/
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );

define('WP_SITEURL' , 'http://wp2.localhost/wordpress-core/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
