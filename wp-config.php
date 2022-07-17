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
define( 'DB_NAME', 'nicasource' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'cognitivedev!' );

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
define( 'AUTH_KEY',         '$1;W0F>[fh_0LA-uD~FgXUnPOYXY{MD@K}uUAI96T)hn1%Aw$kV.=&lBV|uhS(Xm' );
define( 'SECURE_AUTH_KEY',  'WlIS-[c;|gS)7_g#Y)Q%,sv5eYii{-UY@rqm%]?>V%tg^!58yF:[ayGi>fC]K]rT' );
define( 'LOGGED_IN_KEY',    '+md^Yu|ph}3+H#omL~/OUk2r;(cq{(*.f(/R%-`TxadC~t>js1q}Q^XN;_QBn,q:' );
define( 'NONCE_KEY',        'QlPsA:Z=,]h>ShL1-Nk(x6>sehw5Dd!Ne]Ux?7*5(wr.zF^m?M!8m5F/Dp&xKD/&' );
define( 'AUTH_SALT',        'sOme-(h-({UY2X^g+%l>+@xgC.n!hBNw9cr%C72yv_U++^Ef$Cn__*Y^8{&tHIn5' );
define( 'SECURE_AUTH_SALT', 'IyI^m-~?`0WF0t>%D+QRm)7MYexHN/e=mOSc.P{Jb3vt;{?:GQL>7L78QqT70@u2' );
define( 'LOGGED_IN_SALT',   'N}nejP!wbt_d2FCoRl2Dbh|]_1.:zy/2E$_H |O!zBts]5[}1I+{MY&F?Ig1X[HN' );
define( 'NONCE_SALT',       '?TT?acXRsKw>i^Y/0nq+,$r58Je>fFKJn5J|xqC@=@iAjt0KnM)]jQV(s?;(>ybS' );

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
