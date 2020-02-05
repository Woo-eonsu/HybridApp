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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'M%K&*[2r(9L7YK}-?PMMv~wV54m7):L=I|y]h!Fc}l~cL~!4X>{xBvKCW{ Wz&@e' );
define( 'SECURE_AUTH_KEY',  'g=Gm9*[H*r>1{S%0O~*[u:t{QAgi.~Y,tQ7%j#^zvB{!e?(% DS7*=5%n/ V4CH]' );
define( 'LOGGED_IN_KEY',    'KQcv2-RjS5w}2<Pb1AqdybaqM_A7wF$sEW04qZd4[^|)yE#`77D9JjHlPp%/>a{@' );
define( 'NONCE_KEY',        'T>%>vpBrm8ScJ#@xT;%$u]+f)jv57%qTlASC |~MJ2^;;uwpO^^iYt3C^MnSLnkL' );
define( 'AUTH_SALT',        'B?UQXJ9bM}#8>U-RS{u|4mfK#tHgpTDcW.!Z?4A@$`v_8vpMe#-k]<Fn;az 3m#Z' );
define( 'SECURE_AUTH_SALT', 'Rq9uK/L+TCwf/^r?Iz_JcC>fjh!/t`#JKRQm3&_`Y4CBd_=$jbb}01|1ZmRW@,sm' );
define( 'LOGGED_IN_SALT',   '1eMBQ)>!=Qu#?3dyHC&D>Z8xLK[3t=YXcI_AUSBSlPr*{}GnLwUk?=Br{9,s`~/]' );
define( 'NONCE_SALT',       'm<UvH}_}3-tK[j*ZIyX-0AG1v^FK~nTG2 =2BxAeQWWIn^]0)HB2V]hM/fSX~Iai' );

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
