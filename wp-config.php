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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '768f83dbd7613d079596b3323cb3ba874077a54d4dec0c7d' );

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
define( 'AUTH_KEY',         'x#>kd)I)FAR;haC<;1oqsE^NPR&dbSf#y%j[Zs^lUBl#l38E^5qA^nu4T!T(^TP,' );
define( 'SECURE_AUTH_KEY',  '1+,sUHt(s{X>[>Zl{Zwq(iz%C{5G4e8O,!*!#Qep.dpqnJkRIrcR^|WB7lOyN*%=' );
define( 'LOGGED_IN_KEY',    '31<gqhe[)$1Ls!LF}ONpNQgM+5u,hEypa{QZ@NvHSdO>pCJD5|Ahr~]hHcsQ%gV]' );
define( 'NONCE_KEY',        ']aZT._]V=nvQ$$r5Hs+HaI8Wgu1eon<ZQ?+vx)zLs;kZR`x}K+LVb}20Gd(+`S/)' );
define( 'AUTH_SALT',        '4>?~q:PBt67BGIz;[RC6yTDaB/7~dWY;S,4=wITx7kEB?r}Xn*M[4N_qK;Goxz_x' );
define( 'SECURE_AUTH_SALT', 'nlo34/ZZeQZ-(Fj8`XG!7pje?_C~E#%%|;94I5!,aca)}9tE/Q0Dto/:k 5LB>Xi' );
define( 'LOGGED_IN_SALT',   'kh`{}/M`h9UFkP3 pE*AX68r(lNNcA,QV-lePx/Bi+bp]25}VKMJc8IzGn/[S7.=' );
define( 'NONCE_SALT',       's|LlBcXHf{{O<O? ~(bHhCXz4h%O=<yo;{t=VtrmF:_ph4kXN?N]Wj!WQ?eC?w<U' );

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
