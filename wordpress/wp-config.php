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
define('DB_NAME', 'theme-design');

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
define('AUTH_KEY',         'lip605[aCMY/&G6cw-bdOTHZBM z O@.PZDRN>zKzsVK/j7-kJz#w$@O21Umo42c');
define('SECURE_AUTH_KEY',  '=QaCslw!a1i&kRv*]UD1z |{Z+{Z}Vq|+MeAShcoXG)^vOwBR(RX]C|,`Ew_KeC`');
define('LOGGED_IN_KEY',    '(DW:}):tD@dxdo_{q9sBffMUGS[)LUM{cb~kN#[mEl`=@~k{ oIxA.#S1!B2QlWj');
define('NONCE_KEY',        'f>aP`nCYn?/c9~0|R~?(@RA1Ul*=J7Cmt{G.d.5=Th180S=dd[I/e9zGmMi*5b$2');
define('AUTH_SALT',        'o/12^9AH~1;|*T.AcOx9=;97Ecc;l#uJJ+P}Q}#zh.aUqD*.^!oYycanpFH(M&*2');
define('SECURE_AUTH_SALT', 'eHYbGoXExmm=2t1cyCFDSuCmO>dk}/k56G#y}gPCmBT7C8vLkBE2sY4t){).fY.~');
define('LOGGED_IN_SALT',   ';+!KRfxPgI$svM>h1&Y!Z|E#u.dlbSW!/Rd[,_&HjX~(Cct:oq$L? e?SojD%M[E');
define('NONCE_SALT',       '?^&,h9~f6v^1)#VBD8D(KRR_  z>2+A`Rsda-4lQ(:r~r,=R<8?3p6/T[6s:NUs;');

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
