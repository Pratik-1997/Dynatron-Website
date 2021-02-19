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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'W=js{`dTi}P#LGcOMgT|5k6J/V~m*qn]gTtlrDO+Y|A6tLsolJWoJckd@=>YPJh2' );
define( 'SECURE_AUTH_KEY',  '+./);<r}`~44`cMPs:dG0R`e7w|T@j@R&6 .a&x2`TvQf:}^,8HP Dxs%b5zg3_c' );
define( 'LOGGED_IN_KEY',    '_`M_:tV, ^>*M,Ljq;CuBgq_} _+T<a$LJ;p|i^;/@cS%`N.QtK,AWhFUZ>-.CJW' );
define( 'NONCE_KEY',        ':?7+D_nv)&0^V96FAHN$)G7*:%O[Jm:g[*[x1OKY|=~@?mrpsnj>[ZyW?@=UiKO#' );
define( 'AUTH_SALT',        '#m>wM#R?H AFRKE:Wt=`F;AK;mR_F7s/xZKJC~e&xRBPMk K($rm`B!n:v(3D`Ma' );
define( 'SECURE_AUTH_SALT', '6.lb$,v>3a(Rk?Cl6y,,o{?0|y=@B`CDkNu]S6vLpltUgS;+d>.=*(|*!&}-h/XN' );
define( 'LOGGED_IN_SALT',   'a$i,d%?Z4S+%90{COjIi <lr*QsksyhH2}|gZg7U3)l)doB^s<$MV,o]gZ2Vqj2[' );
define( 'NONCE_SALT',       '(:uXlA_GWF-un&#q^0OLBwFw<}|vyZ+Cg~|da.Mc?w~=_]d3!/$Q7]JdCYW<78t$' );

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
