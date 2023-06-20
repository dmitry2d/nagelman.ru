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
define('DB_NAME', 'nagelman_25root');

/** MySQL database username */
define('DB_USER', 'nagelman_25root');

/** MySQL database password */
define('DB_PASSWORD', 'HMx5zYp7');

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
define('AUTH_KEY',         '31D]:h)6B@%e8DCRi,<hd(GHA1yn_#(q0Wi`5Cz9zuHbRAa!$br_zjw`(pD@+#or');
define('SECURE_AUTH_KEY',  '+GW%<wb2oa<P,+GD7q2WIV5m^L*gUnp;=NjW<7)Yw0Nk>U-JGM@)L`NODH&t1[ep');
define('LOGGED_IN_KEY',    'd/zIrs |v.e}OLHS*>2o>[Bvu1DXR*3JZ~x]]0Wi%zBGr4avxVy~kVMcQ+hA3hXv');
define('NONCE_KEY',        'Ykx7>-y-<@mdKjdMg<{Z<z7kJ-64up71AFHR,xTd~TW$;r(B381YLP^x_=U;>gL%');
define('AUTH_SALT',        'uP2; b$nq!1)fvT$2hQMtY:k!higa&$IH8RT7FiUt3,1S2D#MFZv3d].#44}j*ZU');
define('SECURE_AUTH_SALT', ')+P}sZ^/:p|.s+5 7,?,2ZfqD*0]Wp.=LQd|2l/9)1AP8ZlMjQ2^S~;u)X -YtSR');
define('LOGGED_IN_SALT',   'w WXJ={Zh2Ihg358,vy?,-~pbz1.MqEK:?O@oI`NQpZ|JSUUB9B&MPt4OM]/mD-C');
define('NONCE_SALT',       ' s#qb(K5+&[h jdK?f0+TnDo:=|Z|ML9(Ord&yXDqmsUaj}(tID8uBWv3-=eJ47)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'psh_';

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

define('WP_POST_REVISIONS', 1);

define('DISALLOW_FILE_EDIT',false);

define('WPCF7_AUTOP', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Allow Mime Types */
define('ALLOW_UNFILTERED_UPLOADS', true);
