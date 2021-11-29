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
define( 'DB_NAME', 'wordpres' );

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
define( 'AUTH_KEY',         '(k>VHW6^qQ.QR|dM/g%hFw Z8)D|qF8{bC/*Dhfe4@keed:E3:N-+#_AKtM{k-%a' );
define( 'SECURE_AUTH_KEY',  '^M,.iyIB_9EW1dSN%l(&!7A*`1+eE9Zrf*b/t Q6aei,T=aJBR[t!:f7xcN1Lu*a' );
define( 'LOGGED_IN_KEY',    'A_7tf@FCaU53ax,!9=H0_r~U=y_(jUwm0mNf?Ai&|=FH5lE_VyrPvm)fPkzKFH`U' );
define( 'NONCE_KEY',        'CaZq}&rQ$s-o9qA74xiV4t(V:faV2e0$Um_k<P/FFHI$,0|Ve*7V1TzLc^,goe/&' );
define( 'AUTH_SALT',        '`>AbiKUk5_@X$3um:~H+{T.YokKU@/.!9QcR?Nc-|:)PFXj?<$wOl[@$<|tYm+0a' );
define( 'SECURE_AUTH_SALT', '8=bg&B,9]PH$P&+catzC;MW=24SS}xrf[m]d#Bbj_?Ux|!K+p~Pn53+8pLYU+>0g' );
define( 'LOGGED_IN_SALT',   '-Q 2_#>=/F[w5sB|-u1j8s[n~=5-1jX=`tE{4E,oF[fmj/vRE4+]n<qi%p@r}$dE' );
define( 'NONCE_SALT',       'eApoS13l(SuMODNJCfI`syNhmjY8+8>LaW5KBM;uJ@0U,g@St?^n>t]nY;n{^iz:' );

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
