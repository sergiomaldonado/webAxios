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
define('DB_NAME', 'axios');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@{?^CFkqt-sW(Ja?@|d)FAv)N*XL/(avG gW!O-0EK2R3@7Qy*CrrhNhynM{83a6');
define('SECURE_AUTH_KEY',  '#P[pbuO!TnnCyj3~QpQfTq9*zsP6St/($)S3ZL8+oSp0@.Tqm*<Oke+N-Xf+X}J9');
define('LOGGED_IN_KEY',    'IFUg$ml `jF2P=5vt$tp}aM;bm+/?W{<ew0j_mg=*/8fQkur35:6]BT7&p)RrP.(');
define('NONCE_KEY',        'rzCCg1);cEb*V}#D]~3Id,VpJV=?yP-xM#lHAxw2/wwuZn^<z?:!J_)R?D`U%sA8');
define('AUTH_SALT',        'Q,t<1c2iX/AkMR9{[gTd,yfTeX00|fn&=M[7^/yNE&i9b 62t@/NE6#]NFZvw-#U');
define('SECURE_AUTH_SALT', '-P<?@PBL+q6tT)g^a-4!~s7$nE~YV_SG|/)+T|cHm,TEio_DSH>3zkEJj-J>}rV8');
define('LOGGED_IN_SALT',   'z$5qBR8-b|cI2%&(kw#(!c*YpuyQb[PHDd]Uq`)-;O`a)i!Q_ky?W.6ij=)e#UXM');
define('NONCE_SALT',       'b]?!1T.}El_gQm:2?rzoQO59[IfxA;(w;#I8:`8u-#z#GL4;OA]Y4>i0]}jUZ;8x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
