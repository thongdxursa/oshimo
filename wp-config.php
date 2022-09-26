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
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'oshimo' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's0z&f/g#/Ix@=*CA^&$$>ajm,SSBr>.1uNPJ}bq@i_:>w#!^T*ujHBq])R_`ystG' );
define( 'SECURE_AUTH_KEY',  '^gU&_{U/^FL!a>qseI/z<`nQ`dF`Ae;hf@CD3[2wrE7(Q<4f=We?LX/=`s2%}xz7' );
define( 'LOGGED_IN_KEY',    '<>|`X:!G~~qjSM>7;WI?R)9|ti>BueaXHH`|,PT*klV69LO+,5m?%#j}}g1Z*xrY' );
define( 'NONCE_KEY',        'Cbpk9&X )1(=DKMsgU#RyDLfW~e^%[r6R/R^_ Yj!(nXvhjRrUhd:Ch/CgRdFJ<C' );
define( 'AUTH_SALT',        'xWwPpPo,97qF?E+gh)!=PeXeh1p-*8E g34Q(zR^jIb07Z}4c!D3eCB,,!R^ ]wt' );
define( 'SECURE_AUTH_SALT', '0$g.W(d+3+5N Sik?Imxc:Q8GXxOT$7KcI Yuu#$hz^>g<+G:Gdq)<[Pxfj~@Ovm' );
define( 'LOGGED_IN_SALT',   'o`&<sRd#!6^YPsMV%t$tdo9Psk@6P)]wnKCulsr{#SMEGlljC{@8vxLXB+1us)H;' );
define( 'NONCE_SALT',       '^0}~*-wp4Dsaa6+8)cE9750K|On3_kTq1b1`=u.W~I!N+v1g3D/kNeMJ1;}hg(lm' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
