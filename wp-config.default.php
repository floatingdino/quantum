<?php
/**
 * Default config settings
 *
 * Enter any WordPress config settings that are default to all environments
 * in this file. These can then be overridden in the environment config files.
 *
 * Please note if you add constants in this file (i.e. define statements)
 * these cannot be overridden in environment config files.
 *
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
 define('AUTH_KEY',         'S[ +7X /mj(}j(%`U4z!7QS[iU=<?*wtEuBN&%dq7//(I8N+2FL;7~|?XD}]b%1K');
 define('SECURE_AUTH_KEY',  'MipmAHJRa+vXT}-H|[;/FtfmI@pE;|_-lGc><Y!!gh+L.9-36y|vy*U^+G42$W@k');
 define('LOGGED_IN_KEY',    '*?n]{/}>/d5hnWjH[@=EIZjfv>r#dfyZI:M0[d=r#!$Hz%b_bsy20t6e~~yg;=lZ');
 define('NONCE_KEY',        'w6PDlz.$UDBY!a^&/=XJo-qMF~CU`9vW++GOKY)@0_%y+8+`fiZA6&|Sy?|-2)Z:');
 define('AUTH_SALT',        '+>x!|V+ZC^aJL#Qp>6zS JU9w9;-_VuXF;u^}ByUijt~q4<qC+cy-iL8=cGbESjn');
 define('SECURE_AUTH_SALT', '|GKpA,]3dsKiJb^5P<C2/*Fn+b=%9iro||=}U_#>BcEsUB[^-@)J1XD;)UI)@lw|');
 define('LOGGED_IN_SALT',   'KkpBMIFhaDkIw.h5+Vv$8>Ef/P*5AB8TJ|+IU51a`Eh<zIvBPd6-)l4@<j0.H]OH');
 define('NONCE_SALT',       ' 5u[f?)zo3VU7=yFv#lsk-5)Vu9uxK$J6sc(:E-<%I0<LeI+L#tfDxFlx>/ewgG^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'quantum_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * Increase memory limit.
 */
define('WP_MEMORY_LIMIT', '64M');
