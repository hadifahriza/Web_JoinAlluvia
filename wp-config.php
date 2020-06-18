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
define( 'DB_NAME', 'u4512149_wp323' );

/** MySQL database username */
define( 'DB_USER', 'u4512149_wp323' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Sp1D-E)15O' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'mzepghgwuwv3k55qecr1xykkoz3ksgyp1cuowbe2ytek3xzomwk5dro39wdev4zo' );
define( 'SECURE_AUTH_KEY',  'z1cznrwgfuz8wgy0wzmaw72unpp3x04doo1x96chlgtcqppprqo2ggdwp2zil195' );
define( 'LOGGED_IN_KEY',    'hb4o8lqwsdvdmmkowl6sjitlaaeliovehlh855ykwafnha8nn6iljv8xhvx86vtu' );
define( 'NONCE_KEY',        'b96mvxekzjpr2czh6u8pfhpqxhtu8xm553ruk5jff7burlfqhkgmbvafnlet6vhk' );
define( 'AUTH_SALT',        'qlb7mzzeohi5bmxbcq4wbquzugfuqjjva2o3yk0lzbl9imls8iziqzx2z2kr0sfs' );
define( 'SECURE_AUTH_SALT', 'pj1gikkpwzidfieisjntrgpz0xbucpwugtgqu6gpcetp7om8owhpp9niz2cjn0fw' );
define( 'LOGGED_IN_SALT',   'jkvmmfolrxehk8qropqj8rcw78n9lz6k5uiakxy8xcssqq0fmfohsuvvyuhnlgyf' );
define( 'NONCE_SALT',       '1yevr86izvjzg1i53jqypcgjhomdppwdhgkwj10xdt1rr0nvrp0ndygazrigcbhf' );

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
