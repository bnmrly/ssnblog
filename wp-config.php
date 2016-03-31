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
define('DB_NAME', 'ssnblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zx|6xd-P|MdR~g1.*73%D25@)(+]8yQzl0Fm-~S]~0whLH3g{[oMa5?+lcc>T`{Z');
define('SECURE_AUTH_KEY',  ';X>$V-qHh{/{.)qZU-7V[w+S8DmKbZ,`C:F)F(:%9VJ/C]?h#NpRyHIR0k9Q%QsD');
define('LOGGED_IN_KEY',    '6r66ee]vd6)TLUc|^6h%bQ+)>AW-@Jz}>*mwO|e#aSq#D@+Q1I`& vP d^Y]dR[h');
define('NONCE_KEY',        '9?@917AI_(YD%o|CH,#BHcc^;&<_dCxyHhVQ.jMFy{7EJmk|RIl$XN{Y$[|OVw1T');
define('AUTH_SALT',        'aYe)NfS=,b[%`1H{aS_-#4/]ogf:z?K&YH)vv1h^eqt3D?8PE_wUK{q$&ol{wf<4');
define('SECURE_AUTH_SALT', 'hu]<5G|^+Y|lGqyduTZ?JF}7$uA-+2gMhr(= wm^|W>VS=9+ww|+eSB zR=7W7R4');
define('LOGGED_IN_SALT',   '&wfcGyp=+vdD%G.R58m|FtA3+8W?1:tX;O-pRg /A?QYfE2;|Yz/Rdn#nU=bPu]X');
define('NONCE_SALT',       'P-0uP,MJf?2-O|r6$^a)m,-Vd.n+kSiVm&Y(#7ujhM&[!+O3)h.HzUa%Ya6B^aSU');

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
