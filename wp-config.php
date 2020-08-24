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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '~]&AN.SJdT-altHEzMG7]ap;yQWMsg6g+n5TNQ`gt lR/-q>&v/_k$Ic8;r@4^>>' );
define( 'SECURE_AUTH_KEY',  'YsYtOyN hS+(x88ZJ|^4Vf)XmZ_7P[{w`S]c,i>@g%c^i c3d1@m*YSS30kg7SCK' );
define( 'LOGGED_IN_KEY',    '8L$>:y|BvcBqOi/Y.#/Pt#R`5S}xsda%9g~D2_T,bI|]33qS9hRDBzMAsp|a>=+r' );
define( 'NONCE_KEY',        ';2*o;Er:$@qTZV6MxTa###Y_}fDODhQRWroWk:8U]%u=eN9D4BV|s)oKLSGc!FeW' );
define( 'AUTH_SALT',        ',FU#o+iW<WwM1Fcofd!5VI{815uou/i[QI~sY!; <1G;=S gG%.OCy}QK^RwVZvj' );
define( 'SECURE_AUTH_SALT', '8jH*-^E?~.-LZ2Lf!tIGU1*Z.4-n>`jTmB@5BKtb|5UUQc9LN+&u 8aevp!GKX`k' );
define( 'LOGGED_IN_SALT',   'D!zmvux_wq76;{yLEG7|2f+;i|&5b7(9)S w6 vAc0GenmSg5|@lJ&I[OA%Eu(x8' );
define( 'NONCE_SALT',       '&A?zCHu;(YV~0&]:m@ujiW+q<C#n,rsuE:h(hp@<3.{8GB@:gU3>xEEK]n3!OYvS' );

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
