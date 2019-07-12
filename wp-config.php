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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':`Pd^oI4@A}nYUWk~luV#ce</l{pw?bpiR`Lh%_3cQXG@r zy,)opSo/k,!7a4~f' );
define( 'SECURE_AUTH_KEY',  '`;O q-}8z]Z8F(? qM_wI@)?Me#gEuyF)uR+jjkfnIw2N zouIGG^;:[p$6uV`C4' );
define( 'LOGGED_IN_KEY',    '*JM6l!<THU&4UG<QWmk=g|Fz7%1qpopw=n,U>-su.v ;NZRy>gj9k:2dE h)g?lo' );
define( 'NONCE_KEY',        'X}uodX1<2qEMMzF!8!=X oxuax:_89{X;#*^#/|C7^7]Lt4Y=bA&z=Za%[c^RJpU' );
define( 'AUTH_SALT',        'G=e%PGuCo6}NJE1XMI+X*$zXS>,86zd>$YdH{_7!-L&;AF(+7-wnc!og2Q^&sE[N' );
define( 'SECURE_AUTH_SALT', '/eJgRqf0-Xke/TFw^b=:Iidx|N;9g}4Kcsdk2&]SB2ua/#~Hi]SJ^wV|S*s]/_u(' );
define( 'LOGGED_IN_SALT',   'FBpYDMtfrgc<+RwA|UMHn K7Kdu}#%d`fntxPQA]3D x=T;?t_c-+7U7C(GcE0XO' );
define( 'NONCE_SALT',       '7SsBO>}pQEv8nw3Ex&dZKlyi>ow<xFuF(:F/h=8V_W:AN7rAN>85:ZL2TDt^K5|]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'template_';

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
