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
define( 'DB_NAME', 'tecshop' );

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
define( 'AUTH_KEY',         'N6@fK[:_LF[4`xbo8@D(H>I=5Ks5fnG[8A>5-2I( l< :#U!=k8:S{^Y}w=yWQ9J' );
define( 'SECURE_AUTH_KEY',  '#t-76UORrD5Cee$ca7vlBG4R+SYVA9DbK<TOv%:Uo*UidxDw3`lC&daf;D1kgBAQ' );
define( 'LOGGED_IN_KEY',    '9nhm7PEbcmGWbNi:YXY]5*4ORm+}Mc.gA_o)CX6UGT3v!O|G/FT*A<^/P65bvEz3' );
define( 'NONCE_KEY',        '#zIr6=bE]CbH;BDVJ:U&j?Ic9O.FY,!B|epqR5zh4{x>E?,F/eZCFxU27J#{2v~ ' );
define( 'AUTH_SALT',        'Fms>L*.wyj<Pl[eh,zmlH0)!sYFZ3pGZ{_hxn7w?M1F{SwxHL/]^;G4((-av1zcw' );
define( 'SECURE_AUTH_SALT', '5{]ipeX6G4[e EeCpzRkvVX=g:ow/8uk5EBj~r6-Fi/f6#Jh.ro^TNs*Z:w4omlb' );
define( 'LOGGED_IN_SALT',   '.z@$Vt(Zasn@JC]dPR[J?e CW0NT.8RP<VX_(I43$}Yuz0+)..S/nW^+&S/Dcc#r' );
define( 'NONCE_SALT',       ',_-n>&y0qTmBPk+i-mQ6TMKN^-h~;-7o%39^f_8J0?N{s=v65mZQhA~08Q}y]^(+' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
