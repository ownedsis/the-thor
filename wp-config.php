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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HsR533UxpOFuTSLf40W4iH3zkhk8VDcSEgTdtXN2HZDcSK/7kJpPNcvROes+1qLQEqSNEZMYhmtq7rYEM0YAMg==');
define('SECURE_AUTH_KEY',  'J0VItCdKWX5Vn/lvx69h3u/yg/e5X+S18ViIJ4RKYLeILrX1zpyN/mRE1AtJAEy7rYsPDF3THt0ei9vtblAb/A==');
define('LOGGED_IN_KEY',    'ln92v7gh3JQJ3SJyR/Ej2wwOal1hd1GN8wMvbLaxn05tC/8XyWjLHBjVMepQd8ATsEy5CzqlOFoTBJvjy/hHKA==');
define('NONCE_KEY',        '/HntSuuhDq8e3NGYDzojRW9IUnc2s9ntxJiBwMSfSh06Pim/5Wnmat49bQmCF5EFpcT8FTG8sVDjE+ahB3i5tQ==');
define('AUTH_SALT',        '3hyJZRK8bvoG/Hz4rkfg7cDmvnjVXSbif3peCATw26o3T02UgATFGk0QjDXS7paOsMGL0Swb9nJhdFevAoB60w==');
define('SECURE_AUTH_SALT', '3+PKt1ceiJfvtZ/Gbxq9liieBQZPDCRAEHQ9JHPjDzJQdc3L2qELVxN15X8ScQIdUbj3lV79pZaZQIodgv1OiQ==');
define('LOGGED_IN_SALT',   'GOKFvygKMUH5+AjCzE1fMW2KYwelGRn+0oQM/LgQvgRJSuLADXdJkJtIWhcebDeojY24QgXr9m0fZP/ADjOBwQ==');
define('NONCE_SALT',       'KBDoD5saisOTeFMCN3DCslxpR6CXmSJ+01DxlvjiqhpJoGa0lh5+sDOn6PIgbh37n6vMVw7LZTOcGBtVnv0fgQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
