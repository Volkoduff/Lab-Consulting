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
define('DB_NAME', 'bh64245_labc');

/** MySQL database username */
define('DB_USER', 'bh64245_admin');

/** MySQL database password */
define('DB_PASSWORD', 'Va89164695457');

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
define('AUTH_KEY',         'G*q4xWJ*F`G~(*y*uHpl(`2)&9F!/r=&GFNw>( $G `B=$]Q3dgl|3GWNCQx!R6=');
define('SECURE_AUTH_KEY',  'ot^Q$,Z6>iG!+)BpCV<5Iz9%^Fk(@E`L~%g=6)=iazs$;z vA&{d.Yw[0]8S=pUh');
define('LOGGED_IN_KEY',    'WoGki&ghXR06`:,D/}pc)P_1TVy2w_;NVn{N#S+Fbj L :N7g2DxN/wQV>_DYaf1');
define('NONCE_KEY',        '>-na~?F~=N wdrTJF.gw+FU3^=32F./x/d;xznj1SQvu_k^]ZM2FQ*!],<i?%<}D');
define('AUTH_SALT',        '^@*+9J1(.BeGtupvsPnMSu[xEB%H8~}OhdZ[RRA(m8`4HJqAEC<bBnPd|Xj4>a%G');
define('SECURE_AUTH_SALT', '^g(UShqGb2M`MX~MV5 l#)wRm~[zRc5T{Tx$tm!3k~uQ5qF9k#g_z7!l[p_JIjuh');
define('LOGGED_IN_SALT',   'n?7nae<kiy:6NdBt^QQh?[7@rIr<EZ`% 2PgO1asQfmMFH%YdQSMU@H9s[#1RLr]');
define('NONCE_SALT',       '+<K<._fldIosgB[&L[W;/`k)w;$i89(skHr8_2u=*N5$B|O R>N[+_SJlg=]r69!');

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
