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
define('DB_NAME', 'bridge2bridge');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'v=q#D 8G)n Wc!o6[8h;&c-2xwVQGy;JHh|TU;=bB._78D1($5|1onh?;l|g4nBH');
define('SECURE_AUTH_KEY',  'OG!:*9=EOCZHf:`!sA2gSND}A|k3G +? +(j[KHrh[c|6DrwH/GRS#D<Pm(0rFrt');
define('LOGGED_IN_KEY',    'w$,4`/@qay!bd{9[Q!G4~Naj#%PXAF(78O`nRIc -fto0nTNO6Z[4X9riN0bX{.!');
define('NONCE_KEY',        'la`ucP5Wnj4!V_!n{%Rm;W}T~m<ci;r?i@wd/fiTeHB{m#_bC0_+YbaW!~m<{l !');
define('AUTH_SALT',        '{eqWvW[|-o-j/5VN1S#m3I$#{+50N<M@1hhSxv:A5s Z%vIpj?nYG<U&:G##CYG6');
define('SECURE_AUTH_SALT', '(nD#-FG5eh.o/roTo/9-l|6q(9Yoq._ge<s5h}%^;svYp=i^gs2KlP%KmHxV^%&Y');
define('LOGGED_IN_SALT',   'cuU263zlNTNSx?W1Uy-1O.e>#o$(sVpM,KDzB-.SJ3O>WX)l&a9H%XF2W.-2Hhx^');
define('NONCE_SALT',       'E3ZN_{K)N.~>;Qf0hKmxg]noV;`7$@BgeDZa,Q]_N_U.F]];zp%@,Y3#Y,+ZLCrv');

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
