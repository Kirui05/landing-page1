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
define( 'DB_NAME', 'landing-page1' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ')gl!?[C?83H/> xxyL~*XW;.MqB5cM&w_vUmYKF2qLqb/ZFc-D#mY)b5bgzhnqg1' );
define( 'SECURE_AUTH_KEY',  '}r>$3=Ux*(7~[86lP~V $Lt(XO(CEr?FoQN M2WpP2.N{mPorp#-dp4MLXHC~,#,' );
define( 'LOGGED_IN_KEY',    'hNc7?kk@,01]85=/:U#]a$gFfi$rSI_#ysFmHmJS+.xRPQz]`ja8hyN#p(T!NTgQ' );
define( 'NONCE_KEY',        'dW1=Um]>BaWn%ZK8~P!>@L62+^}SV:mBdzVuX)?T$g.<3_;]52n|]]?leVk*bvpr' );
define( 'AUTH_SALT',        'l{u0jrXo]25f?uzB`TA@;[t/hL}FvsRdF],ldhZ3qyb|&5y)j^YzxE/6495EB3[|' );
define( 'SECURE_AUTH_SALT', 'q-I!]dD[fSNC>?~0 7kUXAC%-g[re1`&5o2S:(]+iJ}-@f<n.*Mp/lw rO`H0Rp/' );
define( 'LOGGED_IN_SALT',   'S-1jm2VvK>*ez}sb[~ZnH`ca2=}*84|;Q1+]L;|J)qG1y4-9H(NLLWkA$6Uf;/[(' );
define( 'NONCE_SALT',       '8Z{my,Wb(zFX#3l-8NQqnwe^26-lyx-stX]IBo@C##yiTfw@T8;E c7ok[>zOgfN' );

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
