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
define( 'DB_NAME', 'menitcom' );

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
define( 'AUTH_KEY',         '0:./NZ.rR_FbZh?fN$/0/m.A<s2)8my?vU68O,m,%B%Y8c$t3]qyiKxLVyjp<LnP' );
define( 'SECURE_AUTH_KEY',  'h+nI0 F1(4SJo$0a&zOQ[|X/AN&L`bns`8%VU@1HjR2my)%.1o^lC@kIfp|#%4fo' );
define( 'LOGGED_IN_KEY',    '>t|Sc1R*C,t1Uk@5<gU}q#y(vb5Y7WC|Y7jC_!&~Pu+_v#;JS%[ YkGu$:U-V<Ax' );
define( 'NONCE_KEY',        '/hZ,^J4`PB&B$2T=+8xq45&C&lGw.K`JZ=H::ds@Hj}YwY/(+$B5-BR&%sFVU&?$' );
define( 'AUTH_SALT',        'I4{EvlCMNv,TE^%,ZOiK;7?1]~o`/]Fn]OwkP/GRCw2pT};YYm`kI3nne3&<L62h' );
define( 'SECURE_AUTH_SALT', ',YAZ6q0,QYE&nJ 6|eY4`0$%>.9b7|P(|=%#V4I;EN<;B%U~gL~&bmK4%}ZdLj 4' );
define( 'LOGGED_IN_SALT',   'X|&`6py^&Hhj/+/mQTk`rqM;1&/Ey*;JDJcO!Xbceuip j;e%dbCe_{?6/Nc(ya6' );
define( 'NONCE_SALT',       'J=f}VnpiQZF^2P6}T:WJND75ZYe/6)DDpt`xrf_Z7)?I?>[TPIUA81zNS`;5JUH1' );

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
