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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wc2024' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'tops12345' );

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
define( 'AUTH_KEY',         '3~XyQ .nA8iR=UcEX*~Orl |;+^PSrC`2T~8)9lD;!|j3WDVoNp=uYF=N-N[&NDF' );
define( 'SECURE_AUTH_KEY',  'RW=U>H`h~mo-CM.sE0G6Hb,HoPE@GMF9j_ekBfdh HvR;(W&XZ+Nz1pUySvTrn7+' );
define( 'LOGGED_IN_KEY',    '(x85]^j}>hQ4YU3/TFTz)4|6;W+sCPP,?~x.iw8>Buir$S*x!]?Q:Ps`&V*79>g2' );
define( 'NONCE_KEY',        '(JD w*@<E1>-pGGulf(JY`y{=4iuzg{o/-h%{QZ&RT#8JAP9O#a1M3 <@&JG&i`k' );
define( 'AUTH_SALT',        '0F3* lXSiu*/D~X@ZN0Qo8KU!yH/S<K.&`=#i-06K{QX7@,;iXfZrua6^!6g6xK7' );
define( 'SECURE_AUTH_SALT', 'HIA@{{39PbxK:q$&?un(jJL32]0|QU9HW~VP,<m2,}Wx~#$& bac=G_tk?qzv7+5' );
define( 'LOGGED_IN_SALT',   'cOv!ens;Rf4wX<O&!;qw1(vvUWavtB<K7_1dpS![k1K!|$50]u:(Op$fMr:vwGJ]' );
define( 'NONCE_SALT',       '2&#=En@V;lLSn1:`|y<:WrXii)!t^qXOBZq{B).)e`rA8Qe=FhAA}$/i?HlNZ.=a' );

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
