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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'pf?7gTucCX[uGk8cwy_{;o:k`Z@X,,537d2Ck.[w2F>qkF!g2*6?s7hb?BOuYGtZ' );
define( 'SECURE_AUTH_KEY',  'ySz~}[VrZ/^~PIti{{+O#/~!GwRr+oC2Zd^X[mi:x_=NZ^S%]luk$dIHJ#%FTT<c' );
define( 'LOGGED_IN_KEY',    '>thqpw;s>#kI2!acgfj^@bk$Z_<@[7:08fMz+$@W _):_P_;3dA9?H!=G<dmR9- ' );
define( 'NONCE_KEY',        '=^e{C|eJdM/-a:yW:eb19Yc[/IPNYP}w;U8QP*~4$Nz[(aIP~Q]2`UN$bGOEKNfI' );
define( 'AUTH_SALT',        'I;8EcmN7`n.%2FZ5v/wD{L!d.rlDed4nmeakBTiZY,OT];zdb^~RL5CWC[wyS@:H' );
define( 'SECURE_AUTH_SALT', '<.^EWz[sfj{=*V(524u1o3QeYd(+@UBiWJ/jva0V-_]ug<w&Xw*0N{aT`OlOa5~e' );
define( 'LOGGED_IN_SALT',   'I-F;k^bTsUi.!Clnzl%|Jm[o^[:JRfxk#~x5#I.>*5^{&|e]u$m-Y}v)=*.}KL3H' );
define( 'NONCE_SALT',       'EPf(cy]L[;(3^k;~C1j=.HC|Gg0iS?,|RpE&lajRHHHIWj!rFdh0`q9uGaV61D30' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
