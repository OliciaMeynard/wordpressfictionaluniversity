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
define( 'DB_NAME', 'fictional_university' );

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
define( 'AUTH_KEY',         'vP&N|>y$8&u?dV`Do1nn6K=8jsdL?xuv0#+>Z{xoM~AVqgu8uA6>TeQq)&V3[a_?' );
define( 'SECURE_AUTH_KEY',  'sM_s {~VO/)s,UIps&X&5m^hcTO2A9)`*~*zUzN*YT6_6lTBR8_bg0vQMm:NQ!Cx' );
define( 'LOGGED_IN_KEY',    'n4V>%}a7dEENy/-d.Gy&5v>4(8`/GoMXG>.#+p$a3?yK?0:?8[<QNEBZq8xc@`Df' );
define( 'NONCE_KEY',        '6l/u6sV]!@]lzY~[ O}~qcjnn#_E6}vYLwu%dV`T?BGhW*;X3eI<*Z[,WZ$dG{8L' );
define( 'AUTH_SALT',        'XgrTN=l[#*ymXq5J]}iy)oX}}2~|fbJ}cDO-!(~ qLsG7}rQ?Alwogx^a^NjSxkt' );
define( 'SECURE_AUTH_SALT', 'L]+o%+3-hLGPQy@ra~h VNz!tv_bZ0Q9{fig6IG;1&t[#X(%4x~D{ Fie1ABY-6!' );
define( 'LOGGED_IN_SALT',   'yJ522=0CJ:[?ecZ*?@h^>{kaemby z@rf`y-,WfpzMa6|^RI+aA8Fui(.JTTb#/Z' );
define( 'NONCE_SALT',       ';*d*k*5A={Rmh]/Cv~1Z+oxDsZkX}xY>[@1Eq>L$ HAfkNuy8WUkIrwkLuV_]-8l' );

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
