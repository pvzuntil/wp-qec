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
define( 'DB_NAME', 'wp-qec' );

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

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Keb03c5Y.dy-8J+Q  R0kS7<.5Z@(!U&W^NUVcH+{_d<r!Bk$)NPM{ysl|yz,ul7' );
define( 'SECURE_AUTH_KEY',  'Dh#9v==acY$u8_,ES@Vji!K!AO5SNH&x)]q1|I@{K44)#{EH.$Ti1y|wsa3LN,fi' );
define( 'LOGGED_IN_KEY',    '0]w*TK$pSObQ8NB=ZLg2JH_I,)Kph8D-Pe58$PX_$p*vAqYf|-{rwHFqs8S|dx`W' );
define( 'NONCE_KEY',        'UpvQ74VCxBkZfE{gsVUJG?B.&LkkL}>JuUHJi@/@Zu:Fhgo)Z HPq4N-`>t4:CW^' );
define( 'AUTH_SALT',        'Ijvya+SmnHGKZ@PyJ6;1Lxi<-sc/:v^qSNiI5tAGp%ygJssr]4BEWagM~-Su9~Bi' );
define( 'SECURE_AUTH_SALT', '}08y L$KA8d0<&iXuuuc{kqI2_LVbIGNS:K9O?zPMe$8(Kt8Wkf~p2CXW<Zv.,yt' );
define( 'LOGGED_IN_SALT',   '~yg+Ep|nq@rqy>[Iq/y|d)cDN0G^j`x^?)pm~WI{($O6}~18=L&FlNN/]5%:&R&x' );
define( 'NONCE_SALT',       '/IXmn6|[TL-w$>`R$Z<L<,>}9vfVrQE|WamXk|cx.;^$IpJ`i+L6gK3[6AcPhx7v' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
