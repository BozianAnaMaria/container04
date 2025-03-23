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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'P-O8&M^/&0YX%s0~^L#7!^{k[gxwO^x5l<~gM&3^{/{T2pS%Ve7XW*k=n6CHy0Qd' );
define( 'SECURE_AUTH_KEY',  'H*w8;9u(vKV[F0`ahx4T6!/n<Mgu51R=){Wr!H1-sH7T8i+7.1j1DHYp~-X=z E*' );
define( 'LOGGED_IN_KEY',    'm7F)U&1]Aij(5o$8g74Hn?:j&4 ]6;;FojA}cbXes)iq4}0qRW(* Hf{ 5M)f3]R' );
define( 'NONCE_KEY',        'Xv>KK>!_YY(HH9{qW`7,1rUk[t?xQ:Mp];n|f>[l?5ZU>rl_2b.|cxUr-x}g$kuI' );
define( 'AUTH_SALT',        'I5U/D!9*I[=@$/tm?012;Yhw$x4l@S0]8N8j=,_:|V~7Kdc#}C*Kg],s=LduJeB*' );
define( 'SECURE_AUTH_SALT', 'M#o!ZjfuX*KsFPf$4v$3{cjuyYIQyvF2,Wf:bvEN:n_YnHwB }{2=xq~pf|Kb%|;' );
define( 'LOGGED_IN_SALT',   'oT]@Rj~v~h!NpPpl.UFViw89%*K@V<?mZ%1(,n/kG^QpjSX%BI&YrrEe?!P4fnz/' );
define( 'NONCE_SALT',       '1eVIwH&K6H.tbZ):AL;cEpQ}v8e}{a:c5zWAaL:$kRzWOMCQ&jqh,-CJ)L {7]XM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
