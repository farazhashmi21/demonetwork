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
define( 'DB_NAME', 'multidemo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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

// define( 'AUTH_KEY',         'put your unique phrase here' );
// define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
// define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
// define( 'NONCE_KEY',        'put your unique phrase here' );
// define( 'AUTH_SALT',        'put your unique phrase here' );
// define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
// define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
// define( 'NONCE_SALT',       'put your unique phrase here' );

define('AUTH_KEY',         '=wz`C:sFza9j]a#+]zvR&Ek>m7L:x5E`CPn=![xqX^Hs =]kHy@@I55%Y=pLh0sl');
define('SECURE_AUTH_KEY',  'a`gS-<{Ahz)jF)jL@QugSUE!8-K#5-e87k>Iwk_K@KtavvV,x@B$!8 4PrA[?q/C');
define('LOGGED_IN_KEY',    'bb}QEc*>N?P(r8Y4PfW69iuuH]O|DOz%#&I`(Q|u)^M8Nn%x>u#<OU3*s,|b,M86');
define('NONCE_KEY',        'eS&ii[*3ZNZ>TrLM{:n&&)kEBH9$Un};}K:-c-tD<Kx3JyE!L4|e4D*r;-/GlM^2');
define('AUTH_SALT',        'Vvi]E4CZcIB`KPJ~Z<]n(-7$?/!8jU{*ote?^+x~a]C+kf!l/Pq6$5ry>2|0 ]_N');
define('SECURE_AUTH_SALT', 'P+RWzWo)Fsvz{-T7|%Pkkw|Wz@p_q[q$]lt]zU(rxze}/1fGtbm&98!-R.+J-Uro');
define('LOGGED_IN_SALT',   '-+-`s|is=Je6Ee|lC/Kb0= e=aAktU>sA+YLpS76m=5[2+]qJen[.UZU^ZAv!^*e');
define('NONCE_SALT',       '>:No_#}#;`##N&m_K-x5JS2+a=Rx74i~8 =WALzsy(KA~vYnx`xejz}WW`3bU)jF');

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
