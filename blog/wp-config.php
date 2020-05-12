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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codexdru_wpvl' );

/** MySQL database username */
define( 'DB_USER', 'codexdru_wpvl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qMSp(F550.' );

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
define( 'AUTH_KEY',         'tvamystksxc9lgl8qj3661qv5z6nczfpwrzexvj83a3lbvhgs2xh22woefnryi6i' );
define( 'SECURE_AUTH_KEY',  '8ogslbhtldqvsenaxvv4eivu0xbetjy9ir4twvrhpor49ognshcjieh4sxdr5lfo' );
define( 'LOGGED_IN_KEY',    'prcp20e2c7qmzo56ibu6ydnmvgjts8pcbvdiipisyr9pt4pjuyjqtlv8cutkql2u' );
define( 'NONCE_KEY',        'ufrjjq1fxddpbhmrokutik9qzq7hzmnrc77r1idroowhqcut5b0xxkijfri3wci6' );
define( 'AUTH_SALT',        'nq2azarr7ueqykkyy0lhdaawum0j3flzo1zfebrd7elouctrmtewki8hyz0evyco' );
define( 'SECURE_AUTH_SALT', '0swxwxjwhztpsj14scycrciiwbgbzd2sy3ygliqps46kf2kntdj31kti3wplbunp' );
define( 'LOGGED_IN_SALT',   'dbl5tainbnf6jy7al5errj94qgufmcryk6slqlyn87qokqekjylclpl0wmln4km0' );
define( 'NONCE_SALT',       'jitbmu2o11c964mh8ajbaq3gtizype0agmcezw1norxdttzeyu9q9yqfsv1goc8j' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpVL_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

