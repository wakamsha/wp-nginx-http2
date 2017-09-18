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
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'd+]7+uW5k>tfU1Xct, $c,#GtY/`;`mwU{0BV?F6&$l(e8SIY{s5T&^{5,e,FP4[');
define('SECURE_AUTH_KEY',  '2|Cb&)nAbT,hP 3pMZnD6BBIz1GZkz?nYpZYaR^#`*?QR4@&/c#P7H[m`+?j|sH2');
define('LOGGED_IN_KEY',    ']Qe#8`PT=nMORo6]V&_6J|sb3C10a~R$WWE)nNjwwS;(h: sln1MKgU_]{T%g+~z');
define('NONCE_KEY',        '}7>pPb!uy9>XLS<4&O7SxDdL+@lFhu,)/uA6_IsM2DoAV?&2j3$9zkIc%MQuO3qk');
define('AUTH_SALT',        'a[|B]M]d:Tfqo:{R0=e:9{HQpnvVsye:>!}Q9*,pjD//s:eI>X85h#RK=Tf5E*1(');
define('SECURE_AUTH_SALT', ' cdsyS ),rvZb!SV4SXVtM(3SdYrDyg}&!bL?]+NwteGf4+J]t[xn Z^5s6Ln&fT');
define('LOGGED_IN_SALT',   '70T#d[#6Mg#[SU~ pM[^-IwheE/IDaHE3GwTymR _V+Ns8PeKp.4d0-:Ad3=h@1!');
define('NONCE_SALT',       'Ykw~p-HoaC@X)YzOQNl9q29Xc3q5)(-Y_zBi#45XJH|_7}cU;Yteq+56`~sc+g>+');

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
