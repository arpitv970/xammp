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
define( 'DB_NAME', 'ehr_database' );

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
define( 'AUTH_KEY',         'R.sTeF(tsYd~N+A?LU.:}A $G]U0,gPM!S8rWdX@k]A:5JL#7 ;Fl2ODcOC`OO`c' );
define( 'SECURE_AUTH_KEY',  'bIpUhncq%i)lq9Z;|@@Y-T232a[|;|VWd:O&@ =!O5Yk.MO1:kA}gNn5VhT#_Xf0' );
define( 'LOGGED_IN_KEY',    '6nVn<5A[7 5QECU[[A&?SjOl1MEYriA3a!p9W]#^3l4KyG~[gwQ^<B;zyc9|^J$s' );
define( 'NONCE_KEY',        'l`C7qs%%d<pUJP}S(/)lW69(E3)/;gTO>D25ljs%1C6R+8c`}PygP| Hj#@.Cijp' );
define( 'AUTH_SALT',        'XWXwLLQFf_l!L-Qy2o|8(#s$8Do:h7d#`_K7v0T|ss{*y|JPRw$QF7.`}CdCCNAf' );
define( 'SECURE_AUTH_SALT', ';?}7m]xO2t@ZTtF]xtV+svV/_ZasBJ`mMd~uB^|==Y}]?B~AMpIS-.[|!lW]CMr1' );
define( 'LOGGED_IN_SALT',   'ItO_[+!,]+%J^cu9LX2gxUu:nYj:XO:[xIi%:~uR>=3%|~x=Y#HE0&tutc>SR[HM' );
define( 'NONCE_SALT',       'cD&QO!I 0VLKg3a3,H+ovFlu4RFxNq,II2pvfZMn<P58<eL6jUVNgHA>jtc%gSTx' );

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
