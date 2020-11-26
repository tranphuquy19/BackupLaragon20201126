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
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root@123' );

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
define( 'AUTH_KEY',         'Q4mk055FXkbCofKnGTXqTUgNF2uPOWie429Un2w7KyewbkOFi5uw5WnbfKuhD77c' );
define( 'SECURE_AUTH_KEY',  'oXiPutkHaBtE4pmhU12eP0hXQwUGmsWIqItvTHPgPQTNIm54wE9qqHWVRyCMlJ1I' );
define( 'LOGGED_IN_KEY',    'Nl04bsjXjdV33G9OEq4eq4z9Z1h74ctshkVYdoDtzXNGfsEBY9bCqBAU6gXYsVTj' );
define( 'NONCE_KEY',        'jjSZAMMj4PGkDCy9A701QvjEjCXk8xJONt2231oNu1APHMXcfvGDvNoDKXO8zyG1' );
define( 'AUTH_SALT',        'yETmOWuZlajR4O7uUxOP6XlkianUygDl2JtWG8B9ncdpP1eP37ZQi6GwscIWbonF' );
define( 'SECURE_AUTH_SALT', '2BJUH7d87tZa4jttdrVmgyqkjCryfEDRmvIvF4uOwQYgseTGrkrw7mcxbxNmOYtp' );
define( 'LOGGED_IN_SALT',   'yXJagNvqBJI95tBo1xgkvPB60KSShGU8vGxAwFB7vGXhEN7dFJldhwIXXu7Ayt1Q' );
define( 'NONCE_SALT',       'oMO4qinCATYs1BPWSjBD5Y4zu7kpnxcVmdbjWKsuwKDqCfcQkN5bEXryVlYUus2U' );

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
