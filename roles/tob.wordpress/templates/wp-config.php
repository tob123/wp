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
define('DB_NAME', '{{ wp_db_name }}');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '{{ wordpress_pass.stdout }}');

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
define('AUTH_KEY',         'n(s!d6U~s1@9cqQWCPf#1Sxl* &bhfVyu91nS/83+}XJ#*O,b9@0&Ba=n;z=#3W?');
define('SECURE_AUTH_KEY',  '^|*j [=YC+T})#|RzDdTEp<7nu]q4{E*f<n]/(!&<LM-s;X{[]_g!{de_?I.q[&~');
define('LOGGED_IN_KEY',    ' &h`N#[M_&J ~Ha-h4t0*X2Xlz]_L[Y|B,h? T!zVO;?,)=C&BGc}[f(It;@p#&0');
define('NONCE_KEY',        'u7)g2?]EeP=#MOX:HT.b^Qz|MTx_/;MZ4#,Hnw:xS.Qsw3QD.z!G80pGdjUqM|j8');
define('AUTH_SALT',        '*Pn,su#,a)|x2vHPH:Bk#KYLF)?u:Xh=[*w%h5wIu!Q8_-^D]t1v{J~ 7mA%x5=9');
define('SECURE_AUTH_SALT', 'cghY[7t4wLi(ce5FGM]y{3:DQT<^><?IFlC{Sev^gn#b&Ufw[9,GP_Bp,sNpYA7&');
define('LOGGED_IN_SALT',   'Ue_mp6Wspq`OW&b@,DXQDmB,9Wn~,%Yb+IaK=kUVLpjb)I03 h}q>+3vs/+IHu|q');
define('NONCE_SALT',       'D,u}p+?1<e`jB>be.[PqYCV.JV^<XP#&Pko4KNj{LtMpOsLh3)|!T8`%ta=i):b-');

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
