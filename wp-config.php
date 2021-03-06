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
define('DB_NAME', 'WDAWP011');

/** MySQL database username */
define('DB_USER', 'WDAWP011');

/** MySQL database password */
define('DB_PASSWORD', '16349857');

/** MySQL hostname */
define('DB_HOST', 'dtsl.ehb.be');

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
define('AUTH_KEY',         'v+``X&{bzF;K( !g|491xrsb7|drnt<fk,s.R]m37~@I+R6`IeHYVcvQhVu5TSq9');
define('SECURE_AUTH_KEY',  '7V6gz#Y{,HA#w{Czc.p==2-lR2Y#^P#vH$-^9{<=tIfjaZWosNV|5(9h>|Pm.kxJ');
define('LOGGED_IN_KEY',    '@!mL;#53aH ].rvMa|+Q_:=TMK?8z6RP.{,J3=*{/G2[QbR-FrlLG!|upSakI.sq');
define('NONCE_KEY',        'j-Kq^%sr@<0[w2l:Y6wJ+!W+H3dX-2b&c%|ee%=ytRinn|!Usu0O$n]@<y;{IdxW');
define('AUTH_SALT',        'HMA)pXj:~p.i&|n Py9v9? Lpu+0{TJV|@`]l5|X-g|arVl||<q_j&qAdG>Cg:dt');
define('SECURE_AUTH_SALT', 'Q%P~U=Q5CRN9a$|3Fz(P>nbUL+*x]+3ckmK~C%&jb3KO=-R{<:Ej|}^0+9-~ba%j');
define('LOGGED_IN_SALT',   'yc3gn;+!T}AZX{`iISQ.sta3Y`Me-00>aj)B(ly*sHNq@$3z*| ;fCvn<1ypm&[y');
define('NONCE_SALT',       'b.OZq<F[Ht4eZ:0o][sr*mh6O+}@y},FDo>?R0W b3)XC|+L6)WE+72H-Jj8 izR');

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
