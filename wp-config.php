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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'G`;I}>yi{b7R]`pyI_Ld7Le)JK)K0{CgM<9N10]bx4kWo320sH?r9}}duA!eJ)|P' );
define( 'SECURE_AUTH_KEY',   'DW@|:0D$-zn!vP8,W8H[`F#}MZa;$<jU71C?2?wwz&lCf$|H*c/?g1OZ!Ae(OPm*' );
define( 'LOGGED_IN_KEY',     'CjDchhDt%b?}*k8H,E9M9h ftvOJxkQ^znBf5f/?RUs)0qL&jtrt`%J&Z}PWqE4Q' );
define( 'NONCE_KEY',         'Vlqtpz+dmIl#eN4 DjLQeg_n9O3h}Iryu`$K^mMTB5c&:vy3s:IQqN9vpiZ0FE;7' );
define( 'AUTH_SALT',         'l%g]{8tD7k>7_hCGSpSMW@m13F&/FgdC}-[y8*.j 9JuDHt%U#5K$+HxPVG-t>=h' );
define( 'SECURE_AUTH_SALT',  'LDyvZjHpL g]kal.;K-U5^`vYFe6_GIdj+GnyfRuh%]{:T|y!9q?ZJ}d<$xT@m8 ' );
define( 'LOGGED_IN_SALT',    'dmY13f>:YIWFCys&|Hv<Ds-`*}~p0J#}F!i;-c`)_c[Z:SI>/pUd|dA`2B_0@3*{' );
define( 'NONCE_SALT',        'h2BwMcKvKl8`R*s65iee_@A%)1]d(mo?yenF>RGbV{JxaGPGvcs.I@@wLvd9,MF7' );
define( 'WP_CACHE_KEY_SALT', 'zV<YAsh1xz%-E7Op{h=dKhXi?y,e_a]kyiFipUXV$ehEO*oYU&ujQ`E^o#ehF89}' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
