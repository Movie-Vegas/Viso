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
define( 'DB_NAME', 'wpinvise' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'R$9_~@ml5I3rw2a<4y<#Y-8$l+pKR^rFLa]j/hqF`!1pJmA$x80`e9K93KDOrUDD' );
define( 'SECURE_AUTH_KEY',  '4ZM$;H$+>@%pQnW?Upk=a8P&I+F GRiNv?c=0;v8x85K-$pjW{l2@B04Ciw/5Aw?' );
define( 'LOGGED_IN_KEY',    '#i%v?l1F2FnKBc`?HwwzO>B?Usk=LV:d</zh<P*c_UF-LMbj8~4BwH4i$O-H~]SS' );
define( 'NONCE_KEY',        '!e Nwqt=,O<_X88&y0i|fDaI,.i;LZCdNqXWl.~qq!*T+QOopQ2IpmM;b#(i|H+#' );
define( 'AUTH_SALT',        ' zkvlh:sQ7UtMm.7r2o@%WC]((-.]qWh/@j!|kiKimemmbGAaVj7--fO&ca{]i96' );
define( 'SECURE_AUTH_SALT', 'NLW!Dk!`[/pJ2>Lf`8xr(;2ycDyE$u8 iIn=>sK{/=8K0R}b%l }Z|H1d+rs<Y-s' );
define( 'LOGGED_IN_SALT',   'N?@oCwH 2l6C[|CK.$I0}A8!(a2*B(X/Zz,WqFje3d8:`JH1>!SGy@cA$5l2 fm*' );
define( 'NONCE_SALT',       '|rPB>q$1&5Pk0hU[yc?4m#kj:,(9Oz$O 3fAiB;~{HE/?7=~ciyide?fc5 dg|(C' );

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
