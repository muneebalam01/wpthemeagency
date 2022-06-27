<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_7VE|@[aQqS7>;BMDx( Bcs+FOjXdgjOb{f^TUYRLV%jb8fVlN`jwF<i@o/a0|yv' );
define( 'SECURE_AUTH_KEY',  '0kyDzfwFW@7L204%ceXPG_DpA9.!r`Ob3(?6#d1gVodi+>>_Wb}vH3R`!v}-qq6p' );
define( 'LOGGED_IN_KEY',    'SC~Yq,#RvWsD43In;@-arJsH`nVmOUE=^5S9qr76&{3=qF!vT)lQ3>=jhq2:~>u=' );
define( 'NONCE_KEY',        'gg~-wo>tu`NxIBiH{0r~k8T,OpIdV>YLw&D>sStS|5j?fyet,$=HKP9+J2cCe0+`' );
define( 'AUTH_SALT',        ']rL*^nM[~,X&B7dC }Zo/F3aElWx_7PHQRLR$qm]3Pse*aVM@[!6Ps`kpNA055FT' );
define( 'SECURE_AUTH_SALT', 'zOju6=; iXLKf1U.Y.:)K&LrUI&Q{]LOK;zNj VsT@aAh-7w5EZb1Q/[F:>DA_x8' );
define( 'LOGGED_IN_SALT',   '2UUijJwl;rO5OFn(I`u4omf4PY9gBR?8b,g1]?<>=~/f!Nuf#Tj_|zlGmyj{E-YH' );
define( 'NONCE_SALT',       '0)<geLQ@QHZNfzG<Ozpz:G^+<ZCa<*pp3H1N~Tiv^ijBmSzV)h6FuxAD2@0UKUFN' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
