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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'TeAIr3tgkm' );

/** MySQL database username */
define( 'DB_USER', 'TeAIr3tgkm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'R6peKnlUbu' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '3xKl#(i6lI!ahGCr9Zt!<Vc1JuGB85o_C2%>R60T1/={hpQKziY<Do}stetrcE`l' );
define( 'SECURE_AUTH_KEY',  'GM wzs5!T`Ju08<&!^JIJ!N`D^Jg03Vh+doaMT3#dmXN=vmoQ.WeN~r*yF{s*CNv' );
define( 'LOGGED_IN_KEY',    'VOu|n_~+lDN+I1t?[#YUAm[rQ>>N6F*%`i#$m`zdev)3N{sx.,;-E[z9w #X[<WY' );
define( 'NONCE_KEY',        'CR<Md-I8PB94+Q_]wPm1pPdvwt9c$vI/8a!0I05-SNZM0(Fr9`{Fy/Wx7o=DtC-2' );
define( 'AUTH_SALT',        ',XK1{tFPFTm]~P-[F%`vTx|D_|6C`Sc`oP]P4,qKt? 4IP{|-7u~@mOiPwMc_P,3' );
define( 'SECURE_AUTH_SALT', '[:yQbY>OTL|u]hWW@U@6 P^%[5opZ6K9kZipz[s%N6*f7cefe]gfGR2@ZJ)Kf1m1' );
define( 'LOGGED_IN_SALT',   '9 RZf=9)@BrGiFnxM%E_C{R;lvp2)u)aKX:1&3HYz-S[J+FC/HD2v7m+eyH_7<b>' );
define( 'NONCE_SALT',       '5RE2k|h!jbpr{c{q*opNH$V7gFX]@]Lz+iV.GyDx3=ze?M5[D]86hx2 car,`,aJ' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
