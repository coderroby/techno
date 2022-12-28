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
define( 'DB_NAME', '4square' );

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
define( 'AUTH_KEY',         '1ytuy~3)|x<g%GZCJG+]xKG@a/hsmol(FVwFVSJ`0#p~X(Ks]C%DD&IC/WB4Sj<*' );
define( 'SECURE_AUTH_KEY',  'NJHo3=}.IogzF38~Ju1LG~Me#5o4czSHX[3t{#((@>K(&jE9evFJ9J^r$4Q-?{-W' );
define( 'LOGGED_IN_KEY',    'k~)s%EBRL((7CvP0j:W;Jr@?[SC:LIiPRO8CyrqYic%YFfI#_x/~c>Sib$N6i*g>' );
define( 'NONCE_KEY',        't(_B2w{{$G(mHIQ*Pad+{Nbu=x&Com@XmGWh&_b{mV%ljFwjVc}J~Xm)Y~YiP_.&' );
define( 'AUTH_SALT',        'TM^SDx1,:{Yv62VfP}T1VVW`!#f9CV@uyY9+GsIaHAarh=&Nr1sk1HoB!H4-dhj6' );
define( 'SECURE_AUTH_SALT', 'Cz:-NekZTr$d`Z>i$>:d8%69%QVwKnUNcO`%)|TQ} lf9w{^hi2.+}p7+:umN#7>' );
define( 'LOGGED_IN_SALT',   'Bg-Gt Xf;=B+FL9Kjp]RZ*.]]!5ox@=HFh^mu`a+:i3Rr]y16w]{H.5I4h|G`-O]' );
define( 'NONCE_SALT',       '5LCaA`Uf3rNtMKD7mSP%pTQ`1RSlC@=6lbAmygI($Jtngll:.r5MgjX@pyGws:&U' );

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
