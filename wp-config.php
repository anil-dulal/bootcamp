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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'Qlx+jw[fWt{r@^Kw=Z=WkM!R?5/<Kz_oiJ`x(6i!GKIt53gF~xV`<-MCyx0/C[}g' );
define( 'SECURE_AUTH_KEY',  '(1r1qd1{?DC)l./rY6moAZmLdG[:|S:Bc&kleQ}pi/{&Qsj77h=Ab7ZBr-m,rBls' );
define( 'LOGGED_IN_KEY',    'gx<PLZ%%IX3+jW>.ydEq4U-mY<hSFIf>_dmN^@GodilUKApv#/h(ftYo0UhgY>3C' );
define( 'NONCE_KEY',        'aZ)`C%vGWxzV4 h#s^Rse$u4xo9!p>}Je+014R*kzR,%^r~zYRIE$?[eh{qxe|Of' );
define( 'AUTH_SALT',        '[En9~R;yj04WJU}WK0vs5?{2;&4(:OR/<lJ+tS=zU+IYOp(4G3<j$;!M~Xu[Xi$V' );
define( 'SECURE_AUTH_SALT', '!EQf$ i87Wj#ak`3;xl7B,.pm`d.Oi0I$le@wk]Bb4iSfY?c5Wy7zl_D.?x#vmA|' );
define( 'LOGGED_IN_SALT',   '^TcJPzB%=R2%>p6F%/0tT8yn*-YS^~.qaU`Z4wpoG3sM+h1oL)!6X.d*%e.T5PIj' );
define( 'NONCE_SALT',       'smVMVybO@!:5kX/AKKuZ fp$Ye)MmX[nv,MSg;jcoD#3E8z7{nu8d[D5`0?Z4gJr' );

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
