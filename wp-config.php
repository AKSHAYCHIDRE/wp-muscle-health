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
define( 'DB_NAME', 'muscle_health' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O:K*Slmy]x:|Je23H.Bk&3`?=xMJF+D_$aib!+WQULcj,]g/A]zH*U6(Hk{@paM_' );
define( 'SECURE_AUTH_KEY',  'u0}m%ii(F{%X_]]~>Sb169.V@o)L}oFNq#FdgwqXc$afA.`Y@EeCEXFhE=kGI#<Y' );
define( 'LOGGED_IN_KEY',    'tV]!UlJsdM>L@&buW?=rM{XrHE:SSxK*K|:4GHQt+D.mH`N$72k6ah<OJ u[SE30' );
define( 'NONCE_KEY',        'zz9vkyfC2ge`tFY@-yc:bja/CzjXM1SYY8a=:4Hnt46 ACFhMe,.fmG7b?Wio,!P' );
define( 'AUTH_SALT',        'QXN:uxU?<|?#9)]fOX,^b LM}nLRR$/]mBT)pqKL^]nnL,6o0prF .W/8wB_Zs&{' );
define( 'SECURE_AUTH_SALT', 'e=V>.YIS^w$gAz?`@ImCY+GFtiQ;R@t4Kytzd^Fx/b>P5J6V6*WGA9;!kkfgQu[W' );
define( 'LOGGED_IN_SALT',   ' (=}j]N`%_Z-c]WK/  &Nx9@fm<M6+@b+cL%s(E,+kx~tMXdy6Msh@m0l0!w=WZz' );
define( 'NONCE_SALT',       'f2]zadEgV$nc {3xm5yM7W1Fg2Bznki>3hJc$ZH;ctH|b6~d(dF2<Vh4QDb7yGtQ' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
