<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'arV71KGJ3f' );

/** MySQL database username */
define( 'DB_USER', 'arV71KGJ3f' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Cchlm9Lkki' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Db4RK{>-,zvR+WFC@Tw._xo/T>(Il{rk+w<H(<5<g(v| Ep_Xx{~`[N{x0k2.E&l' );
define( 'SECURE_AUTH_KEY',  '.b2pr6cE6kw.hATn}ovk7#JV5[b+A3<n{)]DxH1:*cIm:b9Dsm^i~])OQ7DVo_iP' );
define( 'LOGGED_IN_KEY',    'S)|}].Dk%Ao]9PX~sT`^k3fmZb3(O{*#CaO10/hx`8@&7> j~R(T*3|o:cF$,{]g' );
define( 'NONCE_KEY',        'p{HwCWtz8Vl{:$G(*APfhyY<M%Mm!IVg>GXP@(9@WkdZZ:A4etF^w!2@8<%Bi}+*' );
define( 'AUTH_SALT',        'Pul2FJTo;lsmRI6CEO|j3Rgs ^@k[c*Bu]q?V|)( WO+`[j2pe-G/R1)gW8rGwf-' );
define( 'SECURE_AUTH_SALT', 'y(|_Q^badM-H(:fCJiU=_D6DiT%Na%-3sQhv+,PdtkZI 84k9Ra]bc_^O~rQM%$c' );
define( 'LOGGED_IN_SALT',   'y~Wh<;KDRWxC#*lpWq]&Bc.meB6,76j#S%f!D3sKZ{`Aa$9DGa5u^R1^KhF;Fuw~' );
define( 'NONCE_SALT',       'ONO[CoI_uM$>9vR2&pR}y[r7HO9o;@sWYbL2`=%.oxyIs^wW?ls}5xbIs@h&?: V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
