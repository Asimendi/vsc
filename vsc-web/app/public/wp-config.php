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
define('AUTH_KEY',         '8hi87NUTexEJ99dn5PSd+tdUfHKcVn2XRlBjl1IB7bpmb84x/98+u18n8fhKZh32hjJ0zdXHlXWhTg+6zByx3w==');
define('SECURE_AUTH_KEY',  'TvUt98zk1P1Razh4+Zstl6Erz77ViCF4ywKEpp6V2L7595DynWb0Toc2SAPDdPdafdy9bXAT1mBhNoUOEjGJSg==');
define('LOGGED_IN_KEY',    'wRTOTR3on+kBdpQT3gy6dGprUuBKPun32i53Sq3u5zmYs20sgbiJEEA33OvX/bJh//vvtt15EgLNjRN+M8GqNA==');
define('NONCE_KEY',        'rJ9V1HkoUiEXsxRfq/UP1jiWnUv/SKpmutY0qzd2lelBA8fhmZ64U/zPP65/yWdC9XwPlyKtbCWAgd3WEK9QxQ==');
define('AUTH_SALT',        'oTaW6IbLROb8mTpe2z7MzPWDwMjwiwqmd9hf+kXXbRdmlXepu/zRLZ8atBMGjNGH9vq7v06vT5/AE60pAPYTpg==');
define('SECURE_AUTH_SALT', 'abRzDF6g62OX2LLKKoVI2HBlXuWrDnaUYNLYeD99EYG3KVshGG1Eqbuhd+rpQee48LU9YZyWZ5Sv0atsPNa4Sg==');
define('LOGGED_IN_SALT',   '27wUo49OecxKqJgGOsjKEHv6ynJQ3Mu5rzYpYx2ToUDQe70VdCM2DNayY0LtSE0HN4hm5KqJTHOctoeLjjj7wA==');
define('NONCE_SALT',       '4Rm9oWdCWUa4XxtVtbiHVMq82IoQhZ391cIT8m+P25Kg5HkLfAwrFW5eQ0IkiERBxWZ3Du0qZc7hup7DXoFTrw==');

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
