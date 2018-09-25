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
define('DB_NAME', 'hai1319609303949');

/** MySQL database username */
define('DB_USER', 'hai1319609303949');

/** MySQL database password */
define('DB_PASSWORD', 'A!0ddacb9b884d');

/** MySQL hostname */
define('DB_HOST', 'hai1319609303949.db.10976061.hostedresource.com');

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
define('AUTH_KEY',         ']cZGL;,&Dg-Oy>pA[2I>GKs6zS[/ysIuk<,ZAUZiQH/?JF1_yhYVz5daF~!`I.pT');
define('SECURE_AUTH_KEY',  'A0Gs<^=@Fc^p@ACi}k~dM]c:d?#b2J#%L6(`9i}NC}4koUCpa4/e>-p![0-xUTgJ');
define('LOGGED_IN_KEY',    '%3,vj1z*sC%>;+gY}By)Xa2BOLvIqyVE45q:&[Y&6|Z-*3&<F%L_?jvZv~7]Dt;3');
define('NONCE_KEY',        '48&W@`._h&7~9fqKxvo<Rbo4iC1s*(5vW`>qyJ?CmkN7wCrBH,$js^%/gF8.F%C1');
define('AUTH_SALT',        'ca]zy+KS.Ei&5IN^-0nZsj(,w5Wb(NI/RV3W6)|C(Q9jhWs {;f%!sB.jCxJv6Te');
define('SECURE_AUTH_SALT', 'Qp9cm?TGnqMS}1J-$L#P*(E-$5^uQUR/n%KHGOq`84*H(k{orPz:wy}mGH9f2GP ');
define('LOGGED_IN_SALT',   'L-213fAR-c#T$FCH(9rb,+Gm%Jk7j!o[mija2vJfH,Q4kIHl#sD6>tN@#=iux%_0');
define('NONCE_SALT',       'p>WD#7]Q9zq:VlbM<JHQ<<pq?WcHscbIuqRR _Xmo.yD^X%5KPzdY?+VLe&~kDFR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_khfinancikhfinanci';

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
