<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'carrots' );

/** Database password */
define( 'DB_PASSWORD', 'f13_carrots' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9zjUo[>{mfnQ,PL}qFQLtx^%mz&i^`EW:3O6=L&W|;$x/ac8n=swH`iTZFabj#K;' );
define( 'SECURE_AUTH_KEY',  ')/A{+Qc9`28)O&{1?hI (|:1M!$[ej)1_z?NIs<z gHU*cJ6z:+@O;sQWI0@]1j[' );
define( 'LOGGED_IN_KEY',    '$$(0|/wl&#Fu!G0ZWETR3_W38W f>e@@=&EXuH4)c:d&Y&JH>(bwSxlt#/R%B)4N' );
define( 'NONCE_KEY',        'Ls0T)8ZS(VKMkdIWLYNf<S<oy)l[Cffp*L<*wf5cgqv#5/.[e.-P/XF=WTZ:g;`e' );
define( 'AUTH_SALT',        ')3<LF7b]5KvRHF o%ce:]?g[..|>Tz<wUO;F|I]&yG7V.p-8o_gb:F,R<dS^?MIR' );
define( 'SECURE_AUTH_SALT', 'M0#;uN{U33ZZu+Fvf>eE~NtLJ^BJyPH]Xfa/+}L.aRc(:bd1Q3n<;RsLVl-b3kXt' );
define( 'LOGGED_IN_SALT',   '0&uo{M14]%QeZ_5|JFRiXYA:Z o44.5b=ltMvRJ&rD36m^gR8^#>rw,U|t[O .ho' );
define( 'NONCE_SALT',       'B@RT;{)dlt<.7JfF5X_3M2:!FcK$X`Od!M?^na@-7CaM}>r(4d-9 RA<i1@%@RQA' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
