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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'training' );

/** MySQL database username */
define( 'DB_USER', 'trainee' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tr@!neE@123' );

/** MySQL hostname */
define( 'DB_HOST', '45.64.11.3' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tv/B!39,QJP-TQ4iXf1tGPf/A;!sNB%^m:,TMsAg7_+ Kyij_UtpksE kYdfi[l]' );
define( 'SECURE_AUTH_KEY',  'xI[^%hY{/*K5105=U3NIC|uf7%na,@eQ(e@A_26b]b8P$G7/#u{0*Nr0yWWL=%.K' );
define( 'LOGGED_IN_KEY',    'Mt|Ty&q?%(AAfrF8=u;^I5MOQTJ]KuoE)WGYZly]Z_b&9x/o6Eb4hq^)a.5EH|Q2' );
define( 'NONCE_KEY',        'Y;rnbbG !?R@jIn?O1i;c;Q&D3(j0t(lpA*uJ3?;W`6w||(8@jFw6))bX*1{Y}l9' );
define( 'AUTH_SALT',        'C33!k}k#$t-;N}U2s~6+uMUE,&Dz%a?A)J$aL.7pbUn=g3gM@8|Eh=MfZ1%AG}t*' );
define( 'SECURE_AUTH_SALT', 'BsVJ-q`oTBwIw7zw^<^<ozpd;q]f}_xACfb=Vwc qUn3;EhP )W-j,}kJ4K7-6N)' );
define( 'LOGGED_IN_SALT',   '3Zs)hh_$H2V9k sWhB<m~}%^W8gLR6)Jhr9ZtVI{_iRLkc>Wjqsn`SA$jOJ3Ue&I' );
define( 'NONCE_SALT',       '3wHAb<;#vCC!qy4c4`s2-l)Le62XTuC&K+ur<D2guz2.)3+9qw;d6_@49zwW|F(n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('UPLOADS','wp-content/uploads');
define('FS_METHOD','direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
