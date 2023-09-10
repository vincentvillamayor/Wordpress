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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aspect' );

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
define( 'AUTH_KEY',         'w8,E,/v3<[-/Dm_teMVd}caz]{|nla(>)=X&&Du2K;3$3SUT1^d O=!2p}K%_nL8' );
define( 'SECURE_AUTH_KEY',  '}.`<:*A*Kjwdyu7vKtr!yl%l+1doOee=k%#b[+YyrgF_+t<b]2vWOKEZt)*@29dX' );
define( 'LOGGED_IN_KEY',    '?s7eB4Y9#gLQ.t-D@Yf0r5>AyasQk+PVnnDfxYl[a<.iTH4GC/9&<qJE`#rY6yIa' );
define( 'NONCE_KEY',        '21jR908<{U]Rbj2FSZ7w;(ZN,k[*tRGZKMgk5GSF78fr+=1in$$d<g2LWrO{iE7c' );
define( 'AUTH_SALT',        '*D>%k9g-<lbMU(g` As%=~XzG[.xsM.&D)>*9;Myo3L0.1)Q&-+I.ZR;%`l8/Mw~' );
define( 'SECURE_AUTH_SALT', 'a{k3n&kP]b&U%L-O;9e2GlpKBTW:wn}TcKPB zb!^-;Lzy~Rlgr2VrWY/8eneyE0' );
define( 'LOGGED_IN_SALT',   'Y^*<y(REK>5yOzX}BG>s.c<0SpSeu7?DT2jwoDL-s>E-/gJ/{&U(*S$<?,R6d6kP' );
define( 'NONCE_SALT',       '#fICd`va>&U>r? AZ$ATERn[5 b~1aeE5JLG9L6_.iBkl+~-Csq8>[fFFu`-Bk@G' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
