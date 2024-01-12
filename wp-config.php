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
define( 'DB_NAME', 'fictionalUniversity' );

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
define( 'AUTH_KEY',         'jqqzf%7$K]TEGup6[*E<iPv!$s(T0kf`7paE8q/)G$3EMo:@E0){g.34G5QWjtmf' );
define( 'SECURE_AUTH_KEY',  'y[8 `./L$E:5R}.f.7~k&Ikz~v%<M;m{*fm/=>:jo|]D1:n1gmb]wp)<afH>l<kL' );
define( 'LOGGED_IN_KEY',    'E#ss9}j.+3`LDLOU/*X-]HTr2O%nyWaPs5ggmfr27f?ro~ERqlbMx@LRir7YEY2+' );
define( 'NONCE_KEY',        ' VT8#(([C-{-rL=r[o@GB(Dv_HkApwp]/JSnQP;:+kCPP*)6Aj7E0!R<:!gI;V1p' );
define( 'AUTH_SALT',        'XiMqXGpNQaqqF[fo@{kFx*J7p%HTO |wwPVdxI.G5o: =#~gUu1]3JvL^-;CZyF]' );
define( 'SECURE_AUTH_SALT', 'e#YzAU3-)Gh&e?ZGQ11||uM7CGRBdz^WCK&IoqO0)jV~i:ioFLImYJeX8Q%-VJ-:' );
define( 'LOGGED_IN_SALT',   '}CrJcA@13]A3~JnzQ{ZD3a%{LuD>^A:#1x; kN[P<t~ j)doZ#vo3Z5awBr{-wtN' );
define( 'NONCE_SALT',       'JJsA*W&3]{=Uybj$t)BLDlx4f}D#o g6W+w#z81W![HzYY+Tn6X(|W6C {|+ L:7' );

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
