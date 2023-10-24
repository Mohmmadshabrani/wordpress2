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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:4306' );

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
define( 'AUTH_KEY',         'a6L_:al4?ou~2_g^pg?VMY(lG7*MtToPZyLUVhlJAD+!V3r<z0G3tnulv*C,YkvU' );
define( 'SECURE_AUTH_KEY',  '6bl>}oumxRqhg;V(8NYpr5:;WYY&|@>&~+u 3GrWEZ+6;D*[F,P/l6gZ7#857/R5' );
define( 'LOGGED_IN_KEY',    '2?0RByz|UC39WNn2xx)!Bh$U)3{AF>a_zTk|b<,uo>A&>s625rG%}9S>E<xpf/(3' );
define( 'NONCE_KEY',        'bX.Pp =3dJjq-3hK~R0N[AssN|u>gfEHPj3h1b&p{Vf *#KUz-4p/{irz5):QMkt' );
define( 'AUTH_SALT',        'K(_&,<(x5}hmFPt6(OLL,+Fq)15i`.,eb;b5k}71V~jU%06(0i3Dok./zp%yY:Mx' );
define( 'SECURE_AUTH_SALT', ')uy32Uq8]r99X!3:w$=VIl*,JDu!#wPq`gI=xAq[V()`hLVu?XP}ZQ?.ASy-m hF' );
define( 'LOGGED_IN_SALT',   'P4!5/R$t/oR]:/7nb=RD27g]YdS^q&U@14^_6WG8s{6rqqJDn#WrE+_2i1k7RT:F' );
define( 'NONCE_SALT',       'zH(5}b{Q [uo]o961&S(v}@schP(R}H+.SWb#B3<2#p5$v-#/1Vf!qu^rV(}!e8|' );

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
