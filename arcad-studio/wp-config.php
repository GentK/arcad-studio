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
define( 'DB_NAME', 'wordpress_hamdi' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3309' );

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
define( 'AUTH_KEY',         '1o[1Ary7WpGe3[@rHUG7(_nrAsbD9K8=@,Ov;?-tE/ ,7>c9 G`IJ#t)qF(#7WFP' );
define( 'SECURE_AUTH_KEY',  ')[G7SUv(Tg8i(;M!:X:sA8t$[9!75e`B;jKH<`:RQat!!N^s/8MsFcj(UX|5b%d.' );
define( 'LOGGED_IN_KEY',    '/VcIX6i#xf$Zd{68A`65zMhgdgx{3=|*dwWie[aNDA_uJ<w+jHg;1Q>&);tfw1|o' );
define( 'NONCE_KEY',        ',c!.@`*7;5G7YadoWBZ I3Ziza<5cfPFF3N(YCw-9_&1T%-*Ls.E?L9eqcx7teNo' );
define( 'AUTH_SALT',        '|8;=3t]5+f<ruvyPYbF^lf+JL*Z+uK=!CV;(?<ufTW$I@f?wuHlm-4@lue>/+eBF' );
define( 'SECURE_AUTH_SALT', 'w#J]U,1=%rIPSy&niP70BD5B@z$2z(=ad_,WQD^)R4U~G$.w<k(Gkqfn99Wdd`B7' );
define( 'LOGGED_IN_SALT',   'Ld`Ge&=sA6ISL{W3dF[j7yF9~8:G4sfovv)+IR=(AMoao8b8pc}cV=#Ufi!{oDI ' );
define( 'NONCE_SALT',       '9ZFP&GRYZk{Ed6[:}:Y@aCF%%Mv4HQ#,/vgy^L4?m,0L3SRV_ap>#UF8hb0 +3[Z' );

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
