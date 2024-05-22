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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nova_web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '0mEz>aOmjD0yIzULuJCAR[Duja;(+u.)Piv]TFcKxg1|GVwrYv&81V18 /~>:|`S' );
define( 'SECURE_AUTH_KEY',  ',N&D]TR}bu1l|>>Xnsfri:>hA6G<XTrvn4wKr5[UXeLO^0y96nnhUT-,`9zz9ef7' );
define( 'LOGGED_IN_KEY',    '@#98$80/1#N4$<}-89:42k9K)Fu0EuX?G.*OVkq%6# I$lW?$0DAz,2iV3mERKR|' );
define( 'NONCE_KEY',        'd~AFQ(~>x+<~L_uOH!Tpw?Bl=|jl,q.nC1.h`N._@>ou/)<7t1})J4~>.g5is&]%' );
define( 'AUTH_SALT',        '/$+Xx$K]M1zZ1Bu=T`j8[YPD=DGCeb`/(9@u]C#LqjC^?cEoq3aeKaI[ -V[62X2' );
define( 'SECURE_AUTH_SALT', 'I0P<1xjPXqn?x,x)3P22N%tVkAv4k^[>5tfUmfO)kds71]T03J;M;o/H[X[jL=8p' );
define( 'LOGGED_IN_SALT',   'pr.gi}*&vk=[&Tdvmy#^AXzJ8Jv1gU1QN&GeJ,y]R6`t%3sQj9?ox~i.8S)-+Ul`' );
define( 'NONCE_SALT',       'c1/fc:K7Py}-X*[S9v?wfalj5~?8{(by8}6CPX:F6g}I$mX(AYB<DaxI^^xuQb2j' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
