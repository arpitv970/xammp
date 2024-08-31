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
define( 'AUTH_KEY',         ' h<N>0V_ykEipf`3h03Am/MkblQnvsq6hfN}2QJ6y)^PAFi^MwMP2b?,M%2|h&%O' );
define( 'SECURE_AUTH_KEY',  '~o8PM4mtRLP[@/^Y=SbO!O,ela%UStQ7`=tTf=vzG^oc_6aIra.+,`<iV]r%)T,c' );
define( 'LOGGED_IN_KEY',    'PMI4Zk0JK$Sg%1<e~?XxAi@AJ dGk,e=*dWdb?)xD&3XroCXU.cxmq0uL5g))%qY' );
define( 'NONCE_KEY',        '3ZxAA:?N+8D$`RK>r^2z_W7XS~8Q755=z}nHvMDbn(liYUMDR8N@N >m7L_=z^<a' );
define( 'AUTH_SALT',        '`|:G(EQN8r/8qi(H&|a!V<S``7=&Zwmreru!p_H56*}x}lL5T`@RAEHCIcL6i]r-' );
define( 'SECURE_AUTH_SALT', 'O%442uOkZvJvh?BJT qem_,6;l_Ze>@ZIiT`~.>7./*%i]MM>644%gpC8p+:i1t5' );
define( 'LOGGED_IN_SALT',   '}H+v*Musve&Rz)Er7RAavqy5Jf&S64 3&kJx&c1l$Kp * <-%)5G>}aU|@2S|({m' );
define( 'NONCE_SALT',       'Gw=FM-f73<2mC^Sf85q]zUpYH{T% 9eobM1re6<8bDXA|jhR)|(vwCpl:wU%n;uR' );

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
