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
define( 'DB_NAME', 'sykos_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fF+[ECPB iD+]xP_. $x8 I??z>6(ACFxMHda_d6la5M!MW!U^)m616w@hvc~Iog' );
define( 'SECURE_AUTH_KEY',  '^5bAsm3>_TN2GcTN>GAOSfE4:@hg/5[ `}wAcRd6n!w[wZS$[pw8(qbj;v5;.q;q' );
define( 'LOGGED_IN_KEY',    '!lKb9:5sXmT_koQ3Z@diT3oMtV^i(?D/VxeW b9)7rAQ7Ayp6mi|[HX;{s7fyNrm' );
define( 'NONCE_KEY',        '_!He#9}NF0TaWLy{9T2[hR^uz~m{%.q8&n[+S&{]98/M@/ XcioRcXar,},zKlaK' );
define( 'AUTH_SALT',        '1.trYM3,j,1Tlt{VN]>?DN50%]lN<;V%IHgs}l %eva_B_/zYMv1qP#r7[M!o.}g' );
define( 'SECURE_AUTH_SALT', 'V.:Sas60pg9!=.,dh{8?Scq0D}+uq0Rep-)NAw|Vban}*#XZ#aADx+$?9U%v`G@A' );
define( 'LOGGED_IN_SALT',   'q$uxF04RyirB[MHuCD#xO{do~qNc^+#RJ7G#KJ#rjwM]^x*=T>LO5$R*tTqfuWr*' );
define( 'NONCE_SALT',       'QOQ5r[s7&86CLphZuW?Ur1@~-L])1,G;{brSc<0#I`7H6<IIBxJ^,JfY(18UFhy4' );

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
