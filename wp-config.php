<?php
/**
* The base configuration for WordPress
*
* The wp-config.php creation script uses this file during the installation.
* You don't have to use the web site, you can copy this file to "wp-config.php"
* and fill in the values.
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
define('DB_NAME', 'terpelsicumple');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//define('DISABLE_WP_CRON', true);

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
define('AUTH_KEY', '8opdnKUNa7fmJX0n74JZwWi5pzDJCexGZ6Lf9uQGAeqMgW1IhVFqcFVDkj9WnXwh');
define('SECURE_AUTH_KEY', 'kiNCRQB9dPF2X8mNJLFJdKsRuFGhdYRmVrylxPs7Zy6jkBtFcqSFs99ps9CqU9k4');
define('LOGGED_IN_KEY', 'ySejuOMS2GRCJuF6eYzPXh+WGPOp5fR9+S1v5yyTs0+3G4wmhgJy7UcPkodlohud');
define('NONCE_KEY', '60mo+3bZ/tpBqdhKeZc/AbslgDwwJ+jdxPwT7bPoM3UTmbVmtAZZ+NeeRBHYKuhi');
define('AUTH_SALT', 'tbCx0X0AK+fgttTHBbCLLCMaUD3RMRs9Kj9BZPKMNv6yMdnHsBI82ND6VzUdjWOC');
define('SECURE_AUTH_SALT', 'ryA1K7Zf3jT7MuWBDgaNX4p0TTXOLPTnDQUjf6t5zpr+lNSAFBNbsFdo5KUF3PPt');
define('LOGGED_IN_SALT', 'ljLjX+dedJfh/odIsWKlZkPN2AFcyE8RtFmV6p1RPVfCZ6x19iDKDhX8Q6NUgYrH');
define('NONCE_SALT', 'Yh05RG4qQTfESPbhG3Q3vexFFT5jASzJNWblUWcfu2t2sR6gQATZAd3AZaA3yO7T');

/**
* Other customizations.
*/
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
* Turn off automatic updates since these are managed externally by Installatron.
* If you remove this define() to re-enable WordPress's automatic background updating
* then it's advised to disable auto-updating in Installatron.
*/
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
* WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
