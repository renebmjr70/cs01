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
define('DB_NAME', 'renebmjr01');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'renebmjr01');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 's7upuyUtruw6');
/** Nome do host do MySQL */
define('DB_HOST', 'mysv205.beesoft.com.br');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9M2|O{k4HFtA8>+i69^?2m)mHb[MTYvaT=)2+]3O=afVzPNkjDA+k*(C[1Bw$_xw');
define('SECURE_AUTH_KEY',  'M-_MS&.lrNG%e[e4!L894R55l[bt<gf?)A`Q*|Npm|$tw=mk@,QHRZhrBskdzmPz');
define('LOGGED_IN_KEY',    '0rg.2Ofzj+Vz`^ ckP2khdBa4~?&@=_MjH``^M>z[{g;r7.yECb<Z}cjyM/xKYAw');
define('NONCE_KEY',        'QKr1)iz}psqgaxq8(<j4+7h2BJI($ fx*GpmeGfr`Quv :dP/d$Fj3~+qj.7]CGz');
define('AUTH_SALT',        'xq<&bV{3OOTG*buU+=]n?b3vAO%Mt_+Gr(QQH]QiM1+mpFB8/{I-MB4.kH+[HwJ]');
define('SECURE_AUTH_SALT', 'L31KXN/ 1!XE<aU[kp3Q-,cc U-Tg.gVsd0^`gGN.=Is(rvTK~{Y+K~uBM<Yk~Su');
define('LOGGED_IN_SALT',   'GyvE%)=[?|]aYRz%()Hs|pZ*Ogj[+n@5G)uY;-I(X,Ir%P6 [gHRxY2e~Z-~<j5J');
define('NONCE_SALT',       'Y+CR3`W:UI:5/[2C6ns[n?mtm*ZM*+ypW>tkF;V/AS!(Rwmy&+Qm1X>`3(Aqn>V-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpcs01_';

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
