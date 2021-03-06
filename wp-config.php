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
define( 'DB_NAME', 'bazeechapakistan_db' );

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
define( 'AUTH_KEY',         'xZAe2<B #]_P~RJ8L}f= [Pk:c5ba3;c@qv!|n/ ~95RIuUDjyqaI{Q(R:GWItzj' );
define( 'SECURE_AUTH_KEY',  ':Er73_P}w(#n{h_i$aN$8%P}E9GHDc]PP#8i=L6w^.,~7*;BKmY!g9^vB59(Pj,P' );
define( 'LOGGED_IN_KEY',    'U#c%[,Q8AnzQ@{29NXSM^eioCXov>Eal.hiJP6Q:%D^6cABJ2xl^9dgrUCWw+BE*' );
define( 'NONCE_KEY',        '=5_{%]bT(`_=,v[(#2d7ZbN25AL+%^e7DulJ|jtN?MAY%x$HXY8yGj/@&yg>jZ`=' );
define( 'AUTH_SALT',        'rwVT[`*d>Yzhts9 {`=RyUaOrqoj0kt5cf<=&D_=Pr@RBx-}a7d|*OZ?$4#cuvoI' );
define( 'SECURE_AUTH_SALT', 'G12XXXfPxeS1D=?^@^f!5S)DKgptQPwK1K2b[hkWP#t)Y_2mYk.MWIWvpxhUhmO?' );
define( 'LOGGED_IN_SALT',   '^gdO>A7OSyz/y^~YS1j?^Qft._,-A3o-~M~}i#5kOf75LT0G;x[T@q,SS7L3CQJH' );
define( 'NONCE_SALT',       '`dByg%(isKLErOdZFki1lKUs c=YX3_0$~k%_w@yjX5>Xh!`Aa7p;okw[$l]G0HN' );

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
define('WP_HOME','https://www.bazeechapakistan.com');
define('WP_SITEURL','https://www.bazeechapakistan.com');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
