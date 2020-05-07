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
define( 'DB_NAME', 'sampleforgit' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5d16TIUCyKWo6e3Muh8y7njGDNXIYqmVKn9XDhmLR8JZ7QR44p4PaOkfqZwDbiEq' );
define( 'SECURE_AUTH_KEY',  'hWHL69SxqH0iXzOmiOXWpq3MlsxPe50iiXXCgdpOgqcOhNiXHpHGw1D5aMmO9jNI' );
define( 'LOGGED_IN_KEY',    'e2FS6m6NSpdqF0IXu5mmzu32I2SkR7BRxF0aJDUTESu58DJSQCaKAir4W6fEAxQZ' );
define( 'NONCE_KEY',        'hBEchxOGt5rlGojp3yrT0aOPz1yxQK4C2PWfoRYk3pl3dMNbOnAenFi6rHZS7V49' );
define( 'AUTH_SALT',        'pQkFh1fYb4tse5o8uRC02BLmMgNVKNQOlX0nQYr1rEfa9rCIDPiFZMxQsbYGZM3y' );
define( 'SECURE_AUTH_SALT', 'AJFh5LmH1lhLkbV6QYUacMTBjMBsyfYtt4Lw6YiWQBcqTDbtlYi4rBajWwc5f4Nd' );
define( 'LOGGED_IN_SALT',   'WB5jfpwG9ArD4BSMUxwofcyYQ96t5U7t65ALIBiAgHg70q2YGechlBUTUs9bDGSE' );
define( 'NONCE_SALT',       'rNQC3D5wurbTRUKZLIl7T8zL32HOpoTmm2e6UZ5IHep56hlWLSGqU5qUR9ytKcuB' );

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
