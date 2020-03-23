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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xenobablog_db' );

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
define( 'AUTH_KEY',         '07`rxz^[%Z5oF$Q[n$i-|>^tGGE9mgP^HPubf5GJJI$+I@xEQU/s9t#P476M$f6d' );
define( 'SECURE_AUTH_KEY',  'z89(k~aS)vNIC0/;JYo)N49SX.&j #ZU>k$fz@+sfxz+L l%w|e`B>Ej3d9?gh[?' );
define( 'LOGGED_IN_KEY',    'G/}W?*l531Nf4nj-k-nt}H}NT)o+u?>1x,PHdNlw;`&1k8P~3<1tQPwQ?l6qUcV!' );
define( 'NONCE_KEY',        '(({tH}{3fYYI>ASGlu8Br)J4{C3ZY:t$|)&uQAldO(Rbcs3]S3-<}!aZ{J~02B-a' );
define( 'AUTH_SALT',        'U$} 0,,5r}C.=W.hH:#X3?:hT$;t/5IWC27Yf$U$U~0#+!h_A)&W5%]oXv%3?$Xa' );
define( 'SECURE_AUTH_SALT', '^R}zG%m*#$N<CaO1!k~4DLg#.8{2GZG,^5oiN>sy,Z0s+wg~e/7M4cC^y$mK4+vG' );
define( 'LOGGED_IN_SALT',   's2**t;,sTa-Qi(F/@@;52Q@ZBznGPD:lwhH!Z;r([;E5&eX=8x^Y/;@j+#/d5ett' );
define( 'NONCE_SALT',       'Kd<%Uj3!,yG{y>o6XH2|^P3Q{Ktab6wk[9YL8E,t<UI -HAIvLa:&C3-.3M;%|FN' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
