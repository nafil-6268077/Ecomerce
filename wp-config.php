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
define( 'DB_NAME', 'ecomerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'xM<_mVG+ixaewS#v8q/g!$PZj$/$Y,oQ>KcPo~m.]=bx_/<;>V)xvYr4;PC!E9= ' );
define( 'SECURE_AUTH_KEY',  '0|Md-_[7[7DWLUk&0evDFEI#1wxI5V+`t:}|4eX7J:hd$=p(;=5cQpvvrZURNk5F' );
define( 'LOGGED_IN_KEY',    'ET7D2Kjh_J^B1Pk9>uuk>aR,zW(%xHO^560y.L*1##Cn~5uBVX<MtOQs7BLiu|$C' );
define( 'NONCE_KEY',        'YkWlV!TDCp`ot%zRWS*J3BL325(2^xK{9ghZL eK~PLAFVVO,FXe}o2R0p*D&g05' );
define( 'AUTH_SALT',        ' ,xhN;H1UQvL1Rp}rxBmcJ}go3E0[S1}(2K,@9do60yZ!fG62t][ wg XXZf}9q[' );
define( 'SECURE_AUTH_SALT', '`uB<udd4{{j.%zc(,5|rdm?Z!3WRN>RmXF-iqZCiYD^(kKKIu1+]0Z>(ag?,dhR.' );
define( 'LOGGED_IN_SALT',   'DGP|QBjB1/*|vW7-R=&eT_aR,EHn~(<3g:&c8lr/W^g1@?M+MBSEbQ|Co,40?t|R' );
define( 'NONCE_SALT',       'Ui|>M$!(3!r54i<si,XSF{/7Q<_:dkF1XWt(km1XZDu.BljDI!foWJ8;9ai0!imp' );

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
