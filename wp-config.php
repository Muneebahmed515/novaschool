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
define( 'DB_NAME', 'novaschool' );

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
define( 'AUTH_KEY',         'XC0Ngs2XE%qV@x2r8G++L]ps6V;&!VN9l#JAWoY@}_r@ODC~B$XK<4Lc]t0CIoC#' );
define( 'SECURE_AUTH_KEY',  'f.plgO_1QC1YNfzJ]1UOWwU3]UYms20I_Ks;9yV|0Wz^=F|7`io9V+9}SW1w2:%[' );
define( 'LOGGED_IN_KEY',    'uHO?[=x9OJ-?/.zfa(</HS]9ZR3[K.&0*CTa9yBjC:77!VGc=/C!~0)`RT!Vi2:c' );
define( 'NONCE_KEY',        '3{?p/a91Z/]HI!x95)Ff.)(KXgn|k>R8%Y1zy{$Bjx/@]cT78%_VW`C2M(##FOfm' );
define( 'AUTH_SALT',        '>s8wNX2]INs/QGD.N.3v$o^k|OyS$)o@k*LR+nyN#Nn!Uw4QJH-@3J$]s5tL:2$T' );
define( 'SECURE_AUTH_SALT', 'HFfq#VEC^x]?!Pu/Q?GDqq6N^U$BVRhRH|^L~F8D721xm7FN/avjZNjCa>0m1Z-o' );
define( 'LOGGED_IN_SALT',   'CBq1d,d>s>jTz$MuR4)!,F%G?(aY8G)?rg,CvK}RA@$)&WA>UTE4Fj_T+?}is@YH' );
define( 'NONCE_SALT',       'qNxUxW,@--lF&}49of9:/O7*?kY4z?{eo[wG$8MXjNB+D~cIg)FiNJU?4jA~Tog1' );

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
