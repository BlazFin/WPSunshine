<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'AUTH_KEY',         'Cyx3KL`}peM-L2Y^tlwb ZF2v.x[L~<v4jZq)y0to?{T7bO|=ZGgpX <jXDQ[<LC' );
define( 'SECURE_AUTH_KEY',  'tKtRbb`sMFWIP/%Gi?|z6_( (n%yc^z_z~JJD1qe*sF(I3}+W~_it-r`vRngR-wL' );
define( 'LOGGED_IN_KEY',    'Ni/.aHk|Y6}5!XS1LdGRg;zZBFww!bN[k|Y(;uX/68-S0>*T~:N@Y5ktt^C|~knU' );
define( 'NONCE_KEY',        ';.;H9Xx)KqjJb~+-N@xdj%`|8eWjGf4mS.Q:fy9@j3mF?01=&|sK>)mK)`LbU55q' );
define( 'AUTH_SALT',        'uUa>@2FUjG*-n.3ZWiuBz[P25?OFtbWf~XP58p0TiD*u^gn&OjcL_ac:W/pVsy!R' );
define( 'SECURE_AUTH_SALT', '3|S%*V%.wb6YRnPUQm@$X+Cj3&iy`dU<ZgpIh?3Cj]`)7g R5$D^}6<H~xW9aa`:' );
define( 'LOGGED_IN_SALT',   '[.b;c1=w63B17Ry?@;!uFy^mi5`q/;UV)nEL//Bw(*2S;;R{2KSly9e6n$W)2i1l' );
define( 'NONCE_SALT',       'C.G?SkcT^urn~&qxaEvurGn.IA-`JL.UKiI,2ViM_?sqbQ]O--9hNUzV25gs#?M$' );

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
