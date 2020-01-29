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
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         '<^nI5[>#.5n-^9|YK6g[$BPnnQtd|6LC5cUEa#qxyO(9:c;o{%m^Ofi:Wb$Ehm@P' );
define( 'SECURE_AUTH_KEY',  'IXN(hC}<qdN^kbDq%gi%/zcy=&jWvtaWat;mNrqLy;sgu5;@kV$go;.P}0oIOw4l' );
define( 'LOGGED_IN_KEY',    'PVW3*N{Kw|~zY_@%rbkV+_*tDx2DyW=YWdYyOYPJi{DtB61}o~WT0o10QJcG,^k#' );
define( 'NONCE_KEY',        '5Ns<x&>o.2 ?pp<4HlHQPJEkx/NH]3X}*6S/N>aKel{kSSq^RU3/bQJL)w~nd%/_' );
define( 'AUTH_SALT',        '-ay_|1K*8mVS`[4nP?d@}Z$ZaZY6R<iEB*1JGo6|A_x#;Hl0O*QdmcBg7-]haBN9' );
define( 'SECURE_AUTH_SALT', '|w;YHm@r[/48l*>QGtF`FBJ.L*PT>7<X)}3=*O#mFRsW8j]@UaLv_Cl]d|w}5Q0+' );
define( 'LOGGED_IN_SALT',   '1O6KkrO?30+iov}JqU71Oev$cEA)GeD5ar TfTHmK/ZFtDDMT]x18q,l(-LmmNU5' );
define( 'NONCE_SALT',       '_h@$/Q8#F$(Y;X/ 7ZHYdX?SWK4g[bQ~K8KWt{%uF%T79,YiCxt7%P3VP#EjOmG:' );

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
