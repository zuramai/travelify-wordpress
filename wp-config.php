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
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         '|5.fnaM|$S`tpZ!cK 3i~CdY{DpC* `Sfzfq`/c-^bj|-v,)}L>MX0V:I~Kz4(M|' );
define( 'SECURE_AUTH_KEY',  '}<8#zGG<<6V,Jbt9{:+yTi65%T#fr[%*{N44k3Q*fSR :GQE _YyAJ81$$,1x4r7' );
define( 'LOGGED_IN_KEY',    'jK>a712S#P>]&ID;/+Uss2T)vg~h2?:39Fq$z9Xv]V+pj0~M`k21m]qzd8Q_/Jaj' );
define( 'NONCE_KEY',        'vAVdcA7t-D7zko~wsD55-sX_dX-&})DnrY:o!?[W,hCI _/whj<+XCiVl8K/231/' );
define( 'AUTH_SALT',        't=7hXT$</Umn)myD|^JK-;${NvqI0NB<[=3]*D=Z7Rr=+i|OIzP__S@D_BjFJbEi' );
define( 'SECURE_AUTH_SALT', 'Fx3K:UvSd),QM[-=Da(ctiY>%R! -c}uFL-|z$%08(.!8H!}N|{Ebswi0YAn7!Dr' );
define( 'LOGGED_IN_SALT',   '>th0GZ`0cS=d* fi]2lf=^{WM-UjCc2)-?i5DsAYV7y<eT=ZbXkcc/bNu0lK/x&5' );
define( 'NONCE_SALT',       'pYSHQ_!N0noYZzNczSLv?lzanWXhKt:?%=GnkwWN=1}N?42YwP52fNPCEDQSo4tN' );

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
