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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwpdb' );

/** MySQL database username */
define( 'DB_USER', 'testwpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iQAvsBw34U' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+7j3]SHepP9_w!3#1g`{5BzU{Rd^c&4`G< .mGTr|]N`=r~i}W*&< 94N|B+ial<' );
define( 'SECURE_AUTH_KEY',  '%t7THqAIo.sKy9!Bo*y}>]_u+kV7v#pgEK|0S;?drDS@hax0m$ME{<X%ye_8lGb2' );
define( 'LOGGED_IN_KEY',    '=_7@p^ek?q%l.V3>H5$,VyGXS.K![VcQ{u:v2a0ydUQo_!O!cg;!VUp?javgsZVv' );
define( 'NONCE_KEY',        'T,*$^-*HT>aD[BG=:KMe8?d s`LS*kWdR4B@%eK^(X-*4P5?`@kA1IP_T#M,|YC~' );
define( 'AUTH_SALT',        'u-zG&i(Y,Y]ZIb-ho%tu|*s&iA6rh%gSmmr%!VAxDwT!riP2PFqZb0.]OUTKAa[[' );
define( 'SECURE_AUTH_SALT', '(nBYz9Rj?VFOw}Kx)-6~]b]$p@nJZ0<o-|;w)v 2#O1nU ;pz6NP8/USjBmT@qx}' );
define( 'LOGGED_IN_SALT',   'uMx2c1*wnT(P5)/5O1B83]hUPu(2m/.Z+cBETKgC7h@,``1J)+:Qx.K:#<s2X|qw' );
define( 'NONCE_SALT',       'U7Ure9>72J,XkN3YE@XrOqM:ilL,j]G~L7>Ct2os b4(4Sq_(0_&nNK)sLkGXn E' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

