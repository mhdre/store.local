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
define( 'DB_NAME', 'store.local' );

/** MySQL database username */
define( 'DB_USER', 'mhdr1990' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mamali9552092' );

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
define( 'AUTH_KEY',         'sk.#H*GGn{{Z7#EI/>$3g%[a532,.DugK}$e@tyxxn`whbe!!] qq:.JZ/)M6TYf' );
define( 'SECURE_AUTH_KEY',  '|Fk6/qf}<BoMIuDY!5g?T-fqX;9*6~clP~8BzQdGS9]k]sW7Krvf3CmY_c!!8z]T' );
define( 'LOGGED_IN_KEY',    '#8EFHAi<Qv/<x-HLK|gXrhEgGCU/(9|`t~qe.WPe(VD;K~GF3R8&uF99<mIub!?c' );
define( 'NONCE_KEY',        'Fgapg$?OP808jX`f4l}7L.4fy9)_o]A{ZPtj3!NM;$XmPFFjb~]+yng,`Uct#<Vt' );
define( 'AUTH_SALT',        'nbBV@{uJ#Zt/S|5d}l.n-B)O(?`FbihX1IoHwX`OyJEu$Y*TuCH4AW[=UViW^3&f' );
define( 'SECURE_AUTH_SALT', 't=]v[hKolT Q?j}v(i]{h/Z@str HxM&2)?1G/G7En[:iWc]a(4G $$O].#VQL{a' );
define( 'LOGGED_IN_SALT',   'pj/iE]7yN(<NR~d dI>o%mDRv:*i?3O#?_|_}/ZRz/;#68HqHpZq#PgkxD79,Pj/' );
define( 'NONCE_SALT',       'LXw2`H?>roIF[.}$[F4=v?wwBAjxM_yL>ODwp6U#Wl<A9>K6bQ@z~9nzFGIWRuHi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mhd_';

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
