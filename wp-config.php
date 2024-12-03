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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '(a{ Hsc(1 z|F?9NB~<cq<geh/46%R@H)`%K(r;8|tRn}zz:f,P:9yLEv Qt6c6/' );
define( 'SECURE_AUTH_KEY',  '=6$v(}Bi+fs-|5jxx3;4Q%)X9d+}(x-TsFI`BtBce&I-9)@[-/=l35h)rEYa$_y>' );
define( 'LOGGED_IN_KEY',    ']?X 1cABaM&@)JCKdV%acAAf3DjrMVaOIJit!%1S#}KQ@{CZriOS}aC~Rf=F9684' );
define( 'NONCE_KEY',        ']O=3[8,A(Y+{appDAO{CmIIMI1V9.HYQ.)s$D&*{957E(u{j^gmKmRQ[dSzG(u?Y' );
define( 'AUTH_SALT',        'Foq{$V;aB)be+KGR7d5]7~s7r6)6rE2k|ea^[I[.w9DiS>mtg-(M9dX!qEWitf7G' );
define( 'SECURE_AUTH_SALT', '2WdmoX`Y:pugU1ol(.CNOn~>e,g=Dgx>l3=vvD29O?^ zr!#tDe5=`Pvf dLc-]X' );
define( 'LOGGED_IN_SALT',   'SPh$@oj/BIk8-)5ll}xC4(eS7vQnyiwa;Yc]}KA1m5s4<A!z>,Ff#&mNBor8yNcl' );
define( 'NONCE_SALT',       'd[ /=b.9I<^<eR}=?Nbs_<WqcBP$IOjZ,/ew<B8VMP7v TS+%<NxsI8wLeO(9]],' );

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

define('FS_METHOD', 'direct');