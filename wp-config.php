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
define( 'DB_NAME', 'nguyenthetunghaha' );

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
define( 'AUTH_KEY',         'SN&y1ie*.!>y 71ugJWAh/iO !Yv7.Q]%)8joZk-L;LOe46N5}P.uJ_3@k,(C[~P' );
define( 'SECURE_AUTH_KEY',  'It&H l-LSaL%4_w^EY_G|>1DC+2cPfyuyvjt=%nu-G_qmUV`AW~w)R=$}DC:CQem' );
define( 'LOGGED_IN_KEY',    'L@KAFeO^Hx5 ^DM(Eq?8O ;c`Cf/H>)P(-S#k N/*M<=+n<lG}6cdh`;%iOjqDSR' );
define( 'NONCE_KEY',        'IQ%Ii-4~{&G2wsvMltt`F{4G#qq@SCSRzriv#1z]i}Kd4&aHCDk._XBv[J:}z2??' );
define( 'AUTH_SALT',        '0C_XRGQ.|/Pe=(f6:cp(s&dIun^>bNy9ED2/bVfgkuSTmy+3;}Jz_a=|?[rEn*b?' );
define( 'SECURE_AUTH_SALT', '4);uXF*y@*R4.q3t!h^IvV21.&CB8;w8n[OEPG.h~aN)1>},DD=c7/0,-oQ9nH]!' );
define( 'LOGGED_IN_SALT',   'HuZ,q?/RrF]h*i5K` DLJ _o6J_0kgtv>8QrW0u/+& QF:U,t[2,^w2Rk];3:Tbr' );
define( 'NONCE_SALT',       'QQUgoZaS,X7nTTSX]-|kQy[O|[6h?5RVqPe7ISP:R6MuejdA j-x^DKer;U05Uk.' );

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
