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
define( 'AUTH_KEY',          'pE&c?m|5v:{_B%DwnQ=*w4W?uF@oZQR[{14Q|{g-?=me5a}e{9BsSOIT1>]vhgkl' );
define( 'SECURE_AUTH_KEY',   'Da!jt*+Dhgv*Mp{I-ZMN*aG*n2!b>3-GoG,m;>Tfe}D!nusoMlnSuA!hy)%Ui2-D' );
define( 'LOGGED_IN_KEY',     '%>81R)>U %`[0^0U$@cR5ue&Hf^#8^!>#LHuGvfL/2.muiKHY{>$~+$Q-(5eW)L0' );
define( 'NONCE_KEY',         '931WbI_[LdNu)ot6:,Erm^#bFcyMkP8YTf%otrt6gv=jl{J{6;t=]zdxP6Fon85y' );
define( 'AUTH_SALT',         '[MO0_]It^c1%M>_aVFpuTL%hyUb@i*!.`7V)MS:9MW4|M>#>TSP1nd.sUX<$.0t!' );
define( 'SECURE_AUTH_SALT',  'etb[*E1jS8QQr2*iu]n$c^$0ZeY;5KOw[ixA7=F.&KA+YQXeqUaz/#/6T[e/.Ar^' );
define( 'LOGGED_IN_SALT',    'i4KJbtlO%Mf}6eE>4E7~U15Q?y%A3%StdWSJehLQY(E#*T>=Yi#I4l KZB-cq;wc' );
define( 'NONCE_SALT',        'J/@<Ga>~)BY:X5#DIluW[ d2O`EuB4oXBX&4+>v$2nDl6cGBW9_3A.( ltyqQGKP' );
define( 'WP_CACHE_KEY_SALT', '@gL[^jglPX><,e:jH#u|>d!1@@*9(QP{  xtQ&.ga?AGmAY&N+1%Iqqr&FZ6V)vC' );


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
