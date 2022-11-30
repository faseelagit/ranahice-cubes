<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u345576959_gcKj5' );

/** MySQL database username */
define( 'DB_USER', 'u345576959_Alwyp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kSq6SAFpiW' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '6wbT]sz*_J%Po%!+g?G9{+spcN]&?&ZYT/xvS5Ijn(=EVn^0is>xakC)D}D&%O6$' );
define( 'SECURE_AUTH_KEY',   '7:{=flly4It.35Ap*<Jl|(Y%+et`I`8,bV$ 5z[|oVFFZbhbb(qyCE)],]YjvR1x' );
define( 'LOGGED_IN_KEY',     '>W,Ea9dD:Hx+fvd?};J5agxIO|]BnSb}u9G{V_9t*KnC-lUN~NSE3gD[A6ojg:D}' );
define( 'NONCE_KEY',         'E6l*[zN5 Fczmj(L?x?QF0~OD+boSKgU`1$;+t|p`s08!MUI=>|aL[HM6bbd0Ms:' );
define( 'AUTH_SALT',         'zO^{toMM^6RY#(_K6Cg=A7#3Ja{=V(v?2;AKYU8u.vGFt@=h|]CuY+%|>IBuEQZe' );
define( 'SECURE_AUTH_SALT',  '?#%3d2E3a711 R.TwA=e5f?6Ex]2_euCqedv!7D%)eKf~!}Ug@w>Opj@w4>2 M_1' );
define( 'LOGGED_IN_SALT',    '4b~7Vem+>9p^(Jgn>*c5D[k|euhL&2b96=b_POF#:/u0JozN;5jGrEg+d{;Jcz/-' );
define( 'NONCE_SALT',        '33D2rq]-d90(0H,F/uSaX#[g|.&3uqr|X[9{jcBQ4,VWr7:f9kELwtW)03z}Z<.u' );
define( 'WP_CACHE_KEY_SALT', 'Yq/Mqq*klvo(o+D%b>Z][3+=a/PDtdh/2v]xYM6DcxBY<?NDQR1U51TGiCq:MA[8' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
