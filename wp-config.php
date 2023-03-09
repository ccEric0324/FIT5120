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

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', 'e96edd3cd7f522d806904f9188d38d41afa57f73b2f91bdbf9db58372168ac7a' );


/** Database hostname */

define( 'DB_HOST', '127.0.0.1:3306' );


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

define( 'AUTH_KEY',         '#s,Q.I6Vhb]$]/j-66blmG`d`>oc+^Q)Sx[{w40JjFY<!EHS+~dJdYTBmIEfr-nC' );

define( 'SECURE_AUTH_KEY',  'ZSno&Y[<cvyiTNibdVnw#s3 q;mHTj;26xgTm*K8Cwejs7#*C%Z.<Q)dGoJ$[|t#' );

define( 'LOGGED_IN_KEY',    '7OByH;jj*.~AKWdRX3:.%M1g[g;.6oj?{r1J*x6za9[X otRcy{ ,Z:lCmFU.N_r' );

define( 'NONCE_KEY',        '&DIR}a$&z4&aSf-Jli?y!B)h^<-:e%U-Gx{*OC<X%x7$%BRdN6q==xBp(J0H`dtt' );

define( 'AUTH_SALT',        'Bc_*`~gU,W_xQfRzelg,St7lyTgh#JYeB(8>^|pxbW!si[9Jy|<E32J_,,rekTRb' );

define( 'SECURE_AUTH_SALT', '|+~h!/C|di8 8#UQmaw}0O|1/aLx:N%!?8MaP8pZ[uWG$DS~OMu_Om<Wx~miuqd+' );

define( 'LOGGED_IN_SALT',   '.MCJ&Q[R1`OI[pZ/pIzRHulesq!)oOv]bz?+>4nnd;pvH6J_4m}Z:.J@Of8aK7[)' );

define( 'NONCE_SALT',       'oFOV&K<_>^c$t<Idk?_o lC 1=Me`zTOgXgm >OMyVISJcr2NL`UUlKiU2PC39)Q' );


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




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
