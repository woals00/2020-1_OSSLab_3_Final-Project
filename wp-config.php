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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'raspberry' );

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
define( 'AUTH_KEY',         'Ydtmhz1)+JL_<UA}{JB(+Ot[D3oOsO_wj/0gG o&^zA)p5z({F@XTDSVIo%Aw+Mi' );
define( 'SECURE_AUTH_KEY',  'x/OnMk>fiojnBi<CGlin/b>:]ob}:d2,}kw4??1y-mi$R]U$0C8(rIUx9:30$mwg' );
define( 'LOGGED_IN_KEY',    'D()C|zq|N7+65dpa{YrMc]Mv}LD1CJ/$%7c*|+(>c) 5k`(5rxG#Oh5Hc$}2=Wm$' );
define( 'NONCE_KEY',        'B|@C{.vH=CN23mcNd=^X3U[muVO*4}@%)WVCke atjIl;YjjG6#bl}Uya7j*FN2*' );
define( 'AUTH_SALT',        '6y);Jfm00`p6|4=l_Q`PC!=gDx@zmW/N/}Kg<tZ>e8Ce g%!o4FM}3Q!mTwtj-Su' );
define( 'SECURE_AUTH_SALT', '#lg:If^u]Mi#ksoJ;,U9&K`LY]VC-%L^O[9~4$(3m{yL6Dm6Tb,J0B5%jEDQb5Hz' );
define( 'LOGGED_IN_SALT',   '#X!W`g(qOF87u5MWyEw^9wX+oXKllGTg$P06X([~*>8o;pf:eyDY -}-rdhjwOKa' );
define( 'NONCE_SALT',       '>ON=HB4~Z5f^xVms<tPNr0TIfF8~-Jc#f*Y&mbc~3]gKRj]VpcyHLDV!<p;}):~i' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
