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
define('DB_NAME', 'vacablog');

/** MySQL database username */
define('DB_USER', 'WDAWP011');

/** MySQL database password */
define('DB_PASSWORD', '16349857');

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
define('AUTH_KEY',         'k}T}(iQ9/su-YgIEx+, wctuAf;9W8gXI[3X)lVCCX7S^1+UG)eV?;l6gK~EKh.b');
define('SECURE_AUTH_KEY',  '@vi2IYpXuddl]D+p}VFzEKWF(3$L!M;nIy;-hsiOQ#ZWwFgKGg&|ca((G>+{oV)O');
define('LOGGED_IN_KEY',    'Bz&J8rgllf7M9<Q+o5%es@Y<2t{g|0H-jp6B.h/[Rz&a^_:zJ[&:jCC/ElyKzYR-');
define('NONCE_KEY',        '`v*D&2f6|bsj;Ya.U-IcaO#[8 4KEoP--M!Uq)pGW[,wdpgX~t^u3KwmJN_yhPv8');
define('AUTH_SALT',        '[oDtJQOQJm3X:`eS-.+;XA co:r5f@i@=LX#};9w-ubw|uRzY1PC}n%YBB?L[BO#');
define('SECURE_AUTH_SALT', 'Y~=x|e-2>F=yYCRgJ)eD.|P`:Vk1E*AOzpKV7n1*kdyUQ^t_s43S-sm]mIlegly^');
define('LOGGED_IN_SALT',   'Dnz9A[iRP&~/$`Pg2Wt$dupS>LDvwBQyeuwY|t:|>e2 h|FQ8{lV6eJ1]]-BU0Ir');
define('NONCE_SALT',       'Ds,Ht10LfL2n!_.FdFG-qi4ymG5^`}xT(`Dl/+CN)?>yCp8CT-)B{){%@?P=N~ 2');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', true);
define('SAVEQUERIES', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
