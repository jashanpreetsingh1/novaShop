<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ' T<Lk @nL[CKh.ZzYv(){u+mxmy$[q4:gntYS>+$73pl6.ab{l0v_J2T^WS{pfzZ' );
define( 'SECURE_AUTH_KEY',   'D}rR,tnR4&0pwJiP&i0YsDdf*pvQ7/2Uo61p2zzcuhsu9{^=bPuNB@6>J +jABR0' );
define( 'LOGGED_IN_KEY',     'TEaFRFAB$J}_(*:9gtRr[o2*J?E/A>@GT8c*1ipa%_yp2iA24SyC-cvVg J b4M3' );
define( 'NONCE_KEY',         '94VW9TyF4PD+]pBR;i%zVvX$IqtV*a611f_E9l)/>$?F{*}(Ni!M&q@(N][p{CZ4' );
define( 'AUTH_SALT',         'j/K#(OVe%Z1E?^(8WhGQ}g0%nQvEIQ;Ll7Eo ynl8wD.iksMo|T^IW1%@[~{>*3/' );
define( 'SECURE_AUTH_SALT',  'DK,bE.SS~u/I_0hccwQ4_L tg]]X~m [@]^ScD%Zqu%OS>k`7pU*a]:y|K~(4]0Y' );
define( 'LOGGED_IN_SALT',    'wAn5tgzJu9/5igZV%tw!w],/x($2f?zsZbo$5_lfT&5PV8wj!2 O2PM*EU@6WH1#' );
define( 'NONCE_SALT',        '-_#W}7WfrC4klLBjpNl ef}eEDMuH8%;v_!iu[Gr^sIHE,Od]1rjfF}X$%>S]ekI' );
define( 'WP_CACHE_KEY_SALT', 'fYuXtr7_08Ut@{iZ`xb?/cG=_fj0zoDE(I?8:71=?]h,8DeUt&N|}4|PTb_B^ztW' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
