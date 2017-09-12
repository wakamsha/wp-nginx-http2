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
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wp_user');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'foo');

/** MySQL のホスト名 */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         ';3I|t8&Vutt}`.:N,iE?2%{87^a+3n40.~RoE2La<Fim3,rkXl!Vu(2Jm=Ri,G<P');
define('SECURE_AUTH_KEY',  'y1!!m<eH;/i+boPW/jnv42k&]ifvQ *7/rcch+<-(jMk*^~Qp|W:bBXm+@:CZ{5r');
define('LOGGED_IN_KEY',    '/&.GB*Yv6]0fiG06j^Y)XjQK|6Lqi;X=38@-^$cLSu5=z8awR,J&DWaKfORPr7;>');
define('NONCE_KEY',        '##_QOHNfKK8k0=zXIQX,|1)qM5cfV%B{(Pe)pClx83-!o.#!<VNWfCQTljhkO]t%');
define('AUTH_SALT',        'F9mQdg64~!f1W9/u -*9LE7 4J3Vs^EBwvkh[&[d/K`C@^-?jJS_/;dXGQ!B8w^_');
define('SECURE_AUTH_SALT', '/&bmi:^%eS7j;iBk7QMAYgrdtW(D1n^CMvvj-7xLQ.9Jj/pmXsD&S{;{t_Uz(ah`');
define('LOGGED_IN_SALT',   '%-osE-s.,ow4Rxf]RW;c6quRz.g,Fdg0_H0vk@uwFb~McO!`U{ptDdD#HGU$0pLa');
define('NONCE_SALT',       'c&wt7(CEVx1NS<$C`tHB|W4QqDL_%[=eiF=!VaO3/WlyFM:i%A~Sb^R<:u]M? mS');

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

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
