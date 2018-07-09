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
define('DB_NAME', 'jasaukur');

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
define('AUTH_KEY',         'j{$j+Fy0OVaZMw3qhR7RB=J=+In(!3c7L%y+1(X`3|$;kyFov@t!0qXYRm<ft(|m');
define('SECURE_AUTH_KEY',  '+-*eHPFfh#@O`KBEr /in!3vpK_65=t]SJ/O`hhC2a8mWP:o:@}5p]Tds7?EN/]:');
define('LOGGED_IN_KEY',    'iPSkk9nDOWX->:,+8@z-TUt>:qhgHW7r(Oi];]K~Rbt53Q6Cvsru?wImBI{jODAT');
define('NONCE_KEY',        'PAFM>kJ72V/[d)#[<D[K)efkDAWCXvr(W#! qX9!&8wx:jXR71_0rR2PB83saQO0');
define('AUTH_SALT',        'ACS.cCeUnN.fUGJu4%JHs;kT!?TY9W5zas.<7-{O)<TtEi.@N1x3vmR#Hkd[!(Z|');
define('SECURE_AUTH_SALT', 'wV~-p&=0?J7.5osN E)PqQ,WITYY5Xp4]L}sH6:=ny*W<N@2.qObe|LEfA9 tz^!');
define('LOGGED_IN_SALT',   'rTuTf#gwNI^rLe1Ku1W[D,gne=GYNET%[(.J9Q@qhPK|a<.?BNZ76g}mDI*=`$BP');
define('NONCE_SALT',       'ICQ{0ZV%)~6u]=~,)R?iVP;L`=-O4q-dJ/MPBnkcMH(MTXBp mcYR-}=iWN%HXrC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ju_';

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
