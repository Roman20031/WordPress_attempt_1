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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '++e_[79^ysN#{[2}`K>?/t$ sk5Nq[q/|W(T2XR<h.f9fc=e6.0+S97g1E~v]1yY' );
define( 'SECURE_AUTH_KEY',  'Dl4!{6W&3c/E*l^DU<}}j*Cjb]M~W]QL.sBDHR5njbU2BKC*#UmOxBlg1E : TWj' );
define( 'LOGGED_IN_KEY',    '.xr(YLPJmkN_rl}#SklhOz %N<ot?V6o3k0N69]vogFmxS6tG6M{6%wMDfy+0Iia' );
define( 'NONCE_KEY',        'Uw!ACS4D]wkeq!KdHccJk^eDP3TCl&g,InCE.`9gbe,pr[K|+w3e,,:[hd:]a!6F' );
define( 'AUTH_SALT',        '2,9$QMG9b(e4nUEKh6s66 b}]W:lBk:)y|vV~4cRUFFdQV%i<afGyBS)zFfoSeuu' );
define( 'SECURE_AUTH_SALT', 'Gkwl}n3tDV^(;K{l@Cjv|c:B$~Gpzo4bt9DtEeK>)OG9(hw;Zz:Zd*VWUG607FSr' );
define( 'LOGGED_IN_SALT',   'IRHPEAKlIi]/ojN}tvv_RR@TGO?sLvi.(0RFfE AlJt!qs<q`eYZes@E waVZ}0C' );
define( 'NONCE_SALT',       'w;SNn^MIX#d!z6wABs=pfnOqfr58X*Og<tYp}x9G!Qj%}[4MOs+3/rBkTSbRA=sy' );

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
