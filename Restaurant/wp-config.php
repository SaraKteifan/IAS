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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         ';;e[>i@x:UW(h*cz%iA1NC.Xgo&nWIechqMG%mOtg2>G35we,?ED:F#+^qHMugez' );
define( 'SECURE_AUTH_KEY',  'N5`5]<E.Ou<Jrq/VDV(xe+28/jAh7b*?J=~wSx<ovmfyt8h5{2MTTY(vQ7PrR-Qg' );
define( 'LOGGED_IN_KEY',    '(=er3G)pmcwt=:yxOI.*o~bZ=q^rkK(kdb9 y !XhX|xyR2Gr|;2%_uEimfDJCO_' );
define( 'NONCE_KEY',        'i)I9?h}xKl[Okd}qJAq2;Ww#E!#Oz_1V^Jj40RF[|4Wyv(zv_gl]qI]T64ZqcJK`' );
define( 'AUTH_SALT',        '0}A?^<R4ao[kf/Z!/3bU$4<jr`%*,ISd-?eQkM7q#`+L$`s?7,zw=,7]J,^Ueh5u' );
define( 'SECURE_AUTH_SALT', 'VUfr7s:)j{llc%X$${9C<u69|e{Hxm-fTF= tGNgyzLZ8U(v<%VzeXsQjVT4CZ?F' );
define( 'LOGGED_IN_SALT',   'e}{fXb`:D^NxhU!UzeU5{6<&qZ1(DA6bt^z4l)v#`kBD4FEsxfb/Z9O/c2N%6cc,' );
define( 'NONCE_SALT',       '5}e/+O<pwKK[KGvXlPDIF?G;F)NEDfL[pqQ:wkFUp(Pd/U)&Kdoz2~aOaTG#}<M4' );

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
