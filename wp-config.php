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
define( 'DB_NAME', 'myblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Rahma_2000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+zTnBy6$*eBqIa*LJkAiK>UL StiGjVg8[Ldb|BP&,rk{WU!_b#y^HDc7t}zFxa8' );
define( 'SECURE_AUTH_KEY',  'J:P#O-V=3)gnU^qrfyKk~8$`c0;0vpsuJh|w#VyIcBZto::cSkrq$s)b0Obg./CS' );
define( 'LOGGED_IN_KEY',    'U}(*:DQ2dw:S]-tdb1?3jV]Z!=KzzktA@3W{$rzxI&5RSP~1YBw?F^~;gD%8#5PO' );
define( 'NONCE_KEY',        'm#nF<EXBu0!^Zuo}1V_=V42.sSBh0[^<(t5QZK59N=1.9?)8b)rreiz?4uP-7F[w' );
define( 'AUTH_SALT',        '`lN2tujaz7ZL?^~Z@sqQ_)y?qNQ;,}sNh#rY-Ja{@[vra>R~KoHO/fmo!X)NX*9{' );
define( 'SECURE_AUTH_SALT', '_m9}^y-dj{9$OzzPz7od>es[I*2LsSAZ,fE]zLC747?4x??9X>s YeFcbKDd$4kQ' );
define( 'LOGGED_IN_SALT',   '!R%xFv!*F^%/)$DgQ0b7$T|N@qBSl~TnL{v]Q;=p/#Bw=Lg;6A^5m3K]z&#fh3+=' );
define( 'NONCE_SALT',       '9k4!`+XQK~)T#)rEKCqtRotc?) a<;j[=.%]jPj&dY.A1_}s]9_+#SW_cPO)tq1A' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
