<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db755419184' );

/** MySQL database username */
define( 'DB_USER', 'dbo755419184' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oXgqmeunwLyXWnCNKDyR' );

/** MySQL hostname */
define( 'DB_HOST', 'db755419184.db.1and1.com' );

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
define('AUTH_KEY',         '_$+,e5ipog!D$dpLauxuA~|s!e~4^-)F%gZv=wt<P/+sN<%C=|!_UE$XwiEL6;r0');
define('SECURE_AUTH_KEY',  '+Wv17-@[c9<<U0{qeKz[y!N-2d:r>=sOu[,y-I.hJHnh25!: N(N(cg|KIPIa1O6');
define('LOGGED_IN_KEY',    '7{OB)-fZ6X1%0E?|b^PWBi^|-h(JQ7[&<*G1cCtb88FOqQ]?:--}zp=7baJk[UIF');
define('NONCE_KEY',        '$VT+s-B&oN){h0Jv_!Ku.Ii*:bQ)4~p|O1KKyqgG,u>3@B<+*+Sl0hYtw0+E|@yD');
define('AUTH_SALT',        '<&1t;)* ivHl-gC$892JP@2(wObVPr alMJ%P+o]!HVzyv4F]ZysDY_`(yTTOl3q');
define('SECURE_AUTH_SALT', '8<9WW+B&v6,nHViU2F7W*9yJl353%D@^G1BnSoX|aXatD}pu%?.F^4=arS*`L%8y');
define('LOGGED_IN_SALT',   '6|9;*?k[V?Y+? `skyukn``dwQtZ~7Sw5-aT1Pf9O`HN{p#-;^zV~R)nUmW(-Rj<');
define('NONCE_SALT',       'Sxc9I4LsC2cDCYT[@Owuf JPEIe09GJC-^0vrQ&h/esoRD,{e3G=a./7nfX=3E;c');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QTDBZTGI';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
