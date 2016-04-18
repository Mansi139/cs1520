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
define('DB_NAME', 'mat185_wp1');

/** MySQL database username */
define('DB_USER', 'mat185_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'P^Ap5pjCJgxFH~5@LA.07#(6');

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
define('AUTH_KEY',         'xZgAlLo1HK050OWjfxDhTYPUp4XkAvj9yIG0temkrvgwJshUxa9SttqYY2SyzBrq');
define('SECURE_AUTH_KEY',  'ATjPsLvJHCWJN4GJsi3vvUcaVEm1OrrpAqKbmEe5mvSA0ivwzQucKdqTbJwJESGT');
define('LOGGED_IN_KEY',    'kvf49sGMj1F86Zg16ASEWnCPpanU2B2T2ohj5ELOIWhAy9sfIh6jAnRO2qVivC4V');
define('NONCE_KEY',        'jrreHzSos52tu2Qn08QVXKXMcjlN2TyHSwiYnqRuYtkZCv5IN9P36uGPKygbSTtl');
define('AUTH_SALT',        'EIvTy0dlPw0kG4OvXiIcjHSTPqRbcEY5MpkSMhMZBtgzzZ5tZx973hxguVeV9aJy');
define('SECURE_AUTH_SALT', 'Gr3aPZyvBxrvAV7ULHAXIrV7xsVBTdgjobEm8F7aQ4OhTYqgFNdMmBK6ZbchSNVz');
define('LOGGED_IN_SALT',   '1No1D4yUEIuTIbcYVjYHky9mnAi035oDdKWPKFZm6CHRYyNEXViEfC6odld0P8BA');
define('NONCE_SALT',       '9n6uY1UpVmCuIt6rnMQ2zBWxAB2ZEEiEG9jkgip5apNZWwy4d97pPUbhgbby3ZCO');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
