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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?F3[!yUeq{&Si4A27`k=MP-.OI}|Q?LxOD%9-pX0![{`FdlDw7Rth~+I_woH@@Av' );
define( 'SECURE_AUTH_KEY',   'T5!epYs.J^ol&x0Ww -hG@~rH^C`eximBj{_ltWBR9BgZ*3Gi4@:CM9tJ^_enXqB' );
define( 'LOGGED_IN_KEY',     '[n6O9t#Ll)f2@jL9;FBt)8$DX1uSN[1JaVprmb6x.YuO@u;_I*y93/|R4E^12PWS' );
define( 'NONCE_KEY',         'G[gPW:}N UAC+643&N6=H[Y(<w[`%&7=xi#fK6b9r.#wCT`UP<jUH7~q@ufR?eFm' );
define( 'AUTH_SALT',         '0_rH[jt lW3KZTP|PFl@m;lP6.*ka9q]-Vjm[^wI&k744bTfsB 6m-0k-5fJ@#$I' );
define( 'SECURE_AUTH_SALT',  'i|(e2C!B{IFhCU-1+An2yunoul{vt7OqE9J:3HaywaEvK0|j8l:(YYw5%)`XwT5$' );
define( 'LOGGED_IN_SALT',    '7)yu24D9XsG(WLkQ1-+N_>h^bovp#a:X^ad6*3bJ`Z^aocV&sZuzgR:Jm<y;JjJ%' );
define( 'NONCE_SALT',        'B4IjT:Ah~W/|liDK(,z;ba;pQou4oPeQ;1C>II4(/-nMRYa$W4=`sw^/SB=T+/#M' );
define( 'WP_CACHE_KEY_SALT', 'BD0-r-e;&A+[6I/]SC^<_o-r[fMLv0_gMDf$wks~cXQfcNFM*>AUL,!h1^be--PT' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
