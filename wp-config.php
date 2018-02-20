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
define('DB_NAME', 'bluebaydatabase');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '*K&,<<MNZP:/a2&u<jiV)bmJ4}{^V~)P:MX}[6WZXblN (sKdKS{u}->h1F[8(G9');
define('SECURE_AUTH_KEY',  'v#X~PQ|J630MB?+/)N2,~Lfo ,k4R|D,~|#^xJJ;@NIaZOAhtzPDl3m7XUMe3HcH');
define('LOGGED_IN_KEY',    'Lh^y+Z]-#Fd(OC]bqm4CW.d&HNfvv*|1xNih.s<y0KJM{6ChM/yXiq&j<?T&An|H');
define('NONCE_KEY',        'JidmK +Igqi_3/i=yy(BqY( hcGRo4yIeMU2}oEEf)Q+N3,qWa3WC0#huk.$~}`}');
define('AUTH_SALT',        'Ab7VEoaHU!lNbyre5ZJ=8fvSk=[T?+KDf3nKwzdT#<rnMtM|Je5cV+4Xv<}4kD?/');
define('SECURE_AUTH_SALT', 'H7ybW&(MT8S_aHj@B;RcPt(3(LS0BUe<IBs[]YJtYv(rqMGyEdW{&y0>`3k)R$F|');
define('LOGGED_IN_SALT',   'U&zyp4UE*gy%KTxN(YzNi,(j:Q(efcv$b6 Mg6sT<(BB-t4 hB{2tiNm&U;R,OH^');
define('NONCE_SALT',       'ePY_fuwcd;(oh;zwap#R9a1(SM;>4PBxL>8jrqL1?dJhHQ `XO/sX.EO-O}:jV_=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
