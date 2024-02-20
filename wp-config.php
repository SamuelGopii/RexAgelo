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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rexangelo' );

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
define( 'AUTH_KEY',         ';##73K<FpB9oF^2S!R+9CVWSOnW%}Xug<Gd+7.i:dM!ndzUs_&?q%l|pV)!fgQ)N' );
define( 'SECURE_AUTH_KEY',  'r6#+1_sS3C$In5C/<JJ2MMR^1.bw[o=n/V:Onvc=};.X)%S4/TpT[@-Jb)xB!6)C' );
define( 'LOGGED_IN_KEY',    '(XU!4q(4<ZjNW9o}h>]bRym(q>$r&Fu*2]pCZ0ak`bmgh>TLP^ho/saC0OP~yuQ;' );
define( 'NONCE_KEY',        'Hb#AJtr-75+>G..M>nJ~E!x[:~sGf[4xw,bDcPW,JuS>Fx=W$D:x;ANg8uSv+Q7L' );
define( 'AUTH_SALT',        '(isM<(1v.h,`d[X&[iO:Gm>9[DovbC8iv*15[zbT=2|Kfcm{ouXne?ZTnvf.!}/*' );
define( 'SECURE_AUTH_SALT', 'xFUf2p) K|ve:;Q,ES:7iX<Ra+8<-95.v=r_*Rk][;mKP}1yn*dW|IqIpM>n8:Y_' );
define( 'LOGGED_IN_SALT',   'Zp2N#;0Z@OFdT.)#Dav&2HQ_<_GrLpEIz}yeu!WC1Dg&[gz(?H}M0KfPG:i`As~?' );
define( 'NONCE_SALT',       'jR:kJP69,If6@>mN@Qm=|p7eEm8q>T/JR)j1d8[D=^(eROF}RJAshINBU1OdRNjf' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
