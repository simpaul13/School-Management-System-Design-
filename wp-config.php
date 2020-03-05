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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'R+&$Ynz[Om89gC`#qXC)=C&zcOz}?N13>#p(,/G.e#wC__ JZP81BWEh8CB.C,GO' );
define( 'SECURE_AUTH_KEY',  'QSNk(P,<2QyGSNVdQYv$9>U@c:gQy=F=r7sYZ=[z{<a3g_}xrXA,ES|Fys}+?..}' );
define( 'LOGGED_IN_KEY',    '96G~QR<Y)|#*/9/1`x=yH0Bke%;kM~sMs%Ov[)b#=VV:;}7>|R];2cXg$Uuf4;H`' );
define( 'NONCE_KEY',        'gL7;4A8W3&L<FY9MM $vMcoxS4_srFri^Z8U:px57_A/A<-yg(!SEm(G`R!cXS6d' );
define( 'AUTH_SALT',        '$J/{;7O0^,_u v3s4yW9]tB4)UzjL{&d3G>AIAD$00(u>ZJb]@sHyuA==e0Vpt^x' );
define( 'SECURE_AUTH_SALT', 'Hz3w.0HOh#8DZwTHH,kgg;>47[rh=r<R.-GMU>_j/<cS7/)~J~@n-v%#4e-d9Zr/' );
define( 'LOGGED_IN_SALT',   '[C|%h.g[3bn3x{p~{gP(b!w][vRu(rsMo/N<1^y#zJ0P+e>Ww%!ze3FM$n9:HU+e' );
define( 'NONCE_SALT',       '#h$LBu)].rkEe#hFxo~:/p;OOJH[.R-}[;GcHc&wO=rBAov`zff:yA6q?BqSr^!<' );

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
