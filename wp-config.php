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
define('DB_NAME', 'quantum_sam');

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
define('AUTH_KEY',         'Hs@3F2$itHs%8G-%O5nbAV;%z^d+LF@d}!s,ka+F5vEq)Z5uA;K&;|_`VB[[9I^y');
define('SECURE_AUTH_KEY',  ')e}V@gt&7xWEj4#u3QVaa4/Zc= 0&y1B@b#Nu)i(i;XFW,4Y$ooa4x116/qM[k<f');
define('LOGGED_IN_KEY',    'CB6IP(wGWSNVReJv;&[+5_8.yIL|>*-DgZkS36[!w+MQ8{xH(yp@>o:)r9~I>eGn');
define('NONCE_KEY',        '^G&8{?$2H6 0;Nt?)uzZ4qu{{2A4&|PK?Z4b8Z+LZJDAOSfH_5,}6Rofo{APaXjA');
define('AUTH_SALT',        ' fvB~-DzYhrb5B./mf!H[Y|L~>gsRrJ&ti1?B&l*PMtslAp7UWIuVZs<K&W&t[+_');
define('SECURE_AUTH_SALT', '=>`lJ.8Zg2k8f)kZf!ZMtMI`&ObM_TL|aqg^g~3@#fr|,tdqBk+CvB2wW$ n%>pD');
define('LOGGED_IN_SALT',   'j f8=`Z]ISI!I@^r!(mlT1[@gvN#X~$:|r**S-dSpG-Yi6t,~6S!zWo_Jj*Q%Ay$');
define('NONCE_SALT',       'c6GC w`6O[LI7HgcPiFKt9BA9}2P2S}H1SoOwF&Gm|qcWhj:/K2W[W?2P|;9DAJu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'quantum_';

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
