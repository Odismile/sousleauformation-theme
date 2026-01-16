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
define( 'DB_NAME', 'sousleauformation_db' );

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
define( 'AUTH_KEY',         ',N2++lOka?Td|k/SyKj U3O{pp<BbuFuEl+6WVQ+]7em_}] .&[_RPXFiE{PY7%i' );
define( 'SECURE_AUTH_KEY',  '}5*P]xE#=Q1P]l%Fhvjt/(YqEGE6L bH#u?FY9{cwFe^,5b sx,~F}i0:ykS]PXJ' );
define( 'LOGGED_IN_KEY',    '#d`4(fk]=e$^k}Y-8K+z7O/p6yY$!|o>&oA *,{t6LHn(Xs>E{oq=5K5+C/UCSdk' );
define( 'NONCE_KEY',        '@w9=<4;NQpo#<?&nAc2]bQ2yNn^FR_*/Ts:4no%wFw::<}Z$/4TQNpM2*%zDZM_g' );
define( 'AUTH_SALT',        'tC]M jd-ixg(eo<8g J 07$o1%j.Pe2vkC+j^3 SCGB.hkFiHWtiE&d-^TDOU+aO' );
define( 'SECURE_AUTH_SALT', ',aV}:pL:lB~mt.A&wHuV$X4<IuxVkJ`}HMIUAulc!S!!,E;}oj38[#wu@Z$NJl!`' );
define( 'LOGGED_IN_SALT',   'L;GG{I%{riSj=Ey Pc@~O)v_Vw8`-6P@HE$NoGx[q7~f}F QPLor|i9]7/I*6iKu' );
define( 'NONCE_SALT',       'o<Bl>r-<#5h}4 (n:iQV@umXLRq1a-0HQiEPyhlKU.LT]f.KRSO,]Ws8R>Ac hUu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
