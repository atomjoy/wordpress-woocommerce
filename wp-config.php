<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Password123#' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

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
define( 'AUTH_KEY',         'UVy$RiFt4U?z56S!CxS%:4h{m2@91P*4q?i]8}pozimo]UJ>ff=U(~Cz]Zr43KMb' );
define( 'SECURE_AUTH_KEY',  'w_YDlljQ~_4tt.ymv.4|X%y+}{:<@=)@NQK1Haiv?3^Hudd4={O/FzBHL(fF4]{}' );
define( 'LOGGED_IN_KEY',    'tcrM%$hcgX#4N{qDV>6pFYS@qe`%C%Cu!uG{mSO1uqL{6i4`:*kyJC_s%m;b/_#|' );
define( 'NONCE_KEY',        '?53ODjZjlDcOjH~j5cZd},_zkZ|2xt/A4;~F^$wukD6k0UH/=:S7hMQqjIk|me=Y' );
define( 'AUTH_SALT',        'Jr)n$m_+0He]r4*N.DUH?6.t[2_D2[Xps9w+YwawEZX$ce<UT7: {XZpm-0x_78Z' );
define( 'SECURE_AUTH_SALT', 'v 5o!7zd<Z<;k[-iZo ]ldZio9|+>{4k4Rw23ZwZ:E/$X#,9=Sg^/bv|:856*M<,' );
define( 'LOGGED_IN_SALT',   'rdM~HQ_RZsxI%HTgmLensu,3oq>M#xDe?MVU).LBW[@#!;_=3:%eys2P5=Zf8,7p' );
define( 'NONCE_SALT',       'P%U(7C;eh7-ny?9>3qrn&~8!J:LL8Gz@|1b:i7-g[mzL8y#|kwEgE^Do|WmCGzp(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
// define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define ('FORCE_SSL_ADMIN', true);
define( 'WP_MEMORY_LIMIT', '512M' );
define( 'WP_ENVIRONMENT_TYPE', 'local' );
define( 'WP_DEVELOPMENT_MODE', 'theme' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
