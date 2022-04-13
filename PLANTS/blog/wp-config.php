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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'U,2R1:28=^0GE(^|GGPJD{^p3dTb%m4=]JtmC&*9X|7iDx:^=i>Vd#eL/)HZss^$' );
define( 'SECURE_AUTH_KEY',  '@,5qnHWp!K1muF)9PjP(.cyDDWCB1}k;LF@*7q[=pqh,PhoRP$T1RH`:1wNOn/,l' );
define( 'LOGGED_IN_KEY',    'HTK_n>_{{$`HA]}a}&# q{,qQ?12x(QsY,hIc*x8*LTrF4m*`TV.JQ6FtLM:]9=7' );
define( 'NONCE_KEY',        'dc.6REeg4ro?2&hM#UFRazVKbbJ%|ZeJ&T*cZ>j!V?$Rv&]c-L`}`c*9vLR8nioF' );
define( 'AUTH_SALT',        'n,HPVZC71X/%)W;e-}6sZvxBE|Y F=,X54qPiuWm -7-W^-9/=S&CsdLedwf;WMW' );
define( 'SECURE_AUTH_SALT', '=UX;$]W%~&uG7cdT},0{3fHq8p?af~f,ni4;xy<l*V<C:ik~`t8;hl3$7Y~uH9$^' );
define( 'LOGGED_IN_SALT',   'g$rgt*W9-RyLq]{g8p_>N42/cO,VYq!b@}ghg+0Z=u:K<,@&s&_09M{.4,XtV,ye' );
define( 'NONCE_SALT',       'Mblv}OUb9oY8_/r!H%Y`*(KY_s[,tUNIKs.?S4P^c(j- c:16k.DjMYyu^-3$z7=' );

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
