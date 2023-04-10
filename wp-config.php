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
define( 'DB_NAME', 'jac p connectie' );

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
define( 'AUTH_KEY',         'SK;uB8LqqW)(b|+`|%IXwukdK,mgcoj8@5Dc*kk)W!DC$vHtJk9y1d9jTLKC&IuO' );
define( 'SECURE_AUTH_KEY',  'l.rsheC|IKBa88;YS.zkx1E!A/_xa>H6IxtjrLO_Cm0$hwSEDD3*ag!P`B*ep*KO' );
define( 'LOGGED_IN_KEY',    'TE0>^7D}hc3&:oYNCI?%1S3XG1GLsOtL<21k(m1XXQcRzCk#1W1|er^l/-+L_>()' );
define( 'NONCE_KEY',        '%eS[%c`)$_|`R/};J8D2c17VAU }@@UNaxApbeUXY5.0qC9)Ak;}}1XNE:T(Ao]=' );
define( 'AUTH_SALT',        '_08f?pc5:DOk-|{4ghRa[Qu25)Gu8FM&oGNpZjfOh-IHw8^tWxm}^Re#O< Wlh%)' );
define( 'SECURE_AUTH_SALT', '8YEuUNn>!RZr3+|B=%qWBeeP3V=@%c4kp.XKa ^,T9&%E+Z$YSR||Vz;QD~EXpr]' );
define( 'LOGGED_IN_SALT',   '5v;?2iZrZG7*LW^QTv9Q_Q}g=(_~A8|MY7-QYdDq*4]zLgK)VazVArp?C[tQ&hj*' );
define( 'NONCE_SALT',       '2oN{197}hl[.gK3Mr!dfA2UA<8{2h/uVlc%Eh>jt&Ur3i.,`)h]f7 $VsYr+T`El' );

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
