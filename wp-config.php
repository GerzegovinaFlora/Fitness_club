<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'schedule');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '|hM8t-C|u6HY5-yqF~!<eTZZrS~&BkeSnSt 7!Bu!4f4bSf{^SB9Y-ec{Y4q<fA4');
define('SECURE_AUTH_KEY',  'Yz4a/MBh6Wlng/4 3^+~ncEZC@cmFxwW ji)u(-!`vzlr|+@e4z+@zScL5d+I:aM');
define('LOGGED_IN_KEY',    'dN{OP0t?app5-e~lz|`(,/p{(}|tDbNy|7Q9H7MXhEi~yYF#ftW{G*|l6/ HHm-1');
define('NONCE_KEY',        ']u[`C3+OGW5|dlJo)0l1Z$tmJK^ZjFg-rFj/8#QjW!%jPe)+<SV#+ N@u-_C,%Ih');
define('AUTH_SALT',        'g80q+Z}*n&}18G`n.wZhH#C?fMA7g#z1ropxVov;F-I0pim)M+2fWu3)6hIT#Rc+');
define('SECURE_AUTH_SALT', 'Sx0cbv*)6c-i:@VH~F>.;xa$*U>?-[tD}Z9a25u$w9o(tDg<N~.!RMuiKddzo?[^');
define('LOGGED_IN_SALT',   'H%1JY.BX@Tn~`Dx!j!FH2KX>JKy3jk4zVm[@9jsv%m_#+=1Y&H9a}Xs}VIb][K[!');
define('NONCE_SALT',       'SV+A4G;^b|%;g4BuZT7)bs=S-Hzo~nfR>iZ:Rdy9Q/ r D/<4AT|/5kF1RHju#Hv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
