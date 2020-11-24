<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_innels' );

/** MySQL database username */
define( 'DB_USER', 'wp_innels' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_innels' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jg%}c]GMi61oE*6.ZIUS[Uh0*|77+a4|Gl6-_Rn_l<2*f4}/@;RWwEP_-%shKaiW' );
define( 'SECURE_AUTH_KEY',  ',aCJ#/u)9x~HI=`W6Z}Gm??J{^s}$ym*vd<+;cq*8Q@w-slQU[IQ]n,i lfqN0[_' );
define( 'LOGGED_IN_KEY',    'r7(:b5*2(c{q4*Dl`hhGRn9hx/!6 ?T6R`1fP^l51VMqg[=Fomo!P-eY_IgItlil' );
define( 'NONCE_KEY',        'iO=5PN 0H9P<$_tI;nkC<+0]CWLZB}^tJUWynp;iHPW>7CTb0YfeS&^<WvetDD!|' );
define( 'AUTH_SALT',        'H40c771w`]^Wi]JTcgabh!~{n-cCTS1*!OW[=pw9.c6/.yF+VGE^:xYzB]#?@;OT' );
define( 'SECURE_AUTH_SALT', '2|t^5R&TkDB{*TC@e3.1J7*}RU6XAbE*=S*r]+@1G ]%Putp*@d{WJ&=}v/h 2O-' );
define( 'LOGGED_IN_SALT',   '5>IaR.Od6Pwo e@66PChr8$<5G]e]W!wDsJNY8nT1y&}iV+p1Xa@2DOWPRf<dq)Q' );
define( 'NONCE_SALT',       'hz4]7CFZ@e=M,k29m6Vib_8Z C0!gY@@El%d_{V63Mrwt}MC)tEiargum5D>+2oe' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

define( 'WP_CACHE', true ); // Added by Hummingbird
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
