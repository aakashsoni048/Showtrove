<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_kpga2' );

/** MySQL database username */
define( 'DB_USER', 'wp_btsr5' );

/** MySQL database password */
define( 'DB_PASSWORD', '96h7IlA_wS' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '*q2)8u@a&)e_|]3B9sx72pi%[n/8V*tn]qk8y!h0g3B7BB(eG3rw2+!9:W7eagQw');
define('SECURE_AUTH_KEY', 'Z/%:lFFUQvxuu)N;+:Y4P7|9;0!riF0(A57ja3F:E6t[Px[oD/ZR(Lw[8Okw1E7y');
define('LOGGED_IN_KEY', 'AZdF3To563i4EaWOX3WuSD(T/]*8379re#-y]t:*+*bQ/0/p99/K[;~vW5sw;7my');
define('NONCE_KEY', '2e-j@SLXMSo69yWuyy;N35wbX16-e86q:769]%)669Ed+ZT2;lS531@Bv9)1o_Lv');
define('AUTH_SALT', 'yVj9+tk)0214e0cVCE4sk84hqHz]iu~62#iNgRRG&e8!_tBRpltwBE0(dQ67BE%f');
define('SECURE_AUTH_SALT', 'b&B*1QP0m]T&[0W:#8+Q1:K|S920L9UG]/G9G+cq!U2gM0if5U@~B21(&z84Q-[q');
define('LOGGED_IN_SALT', '|65w:_1Z8+v/5oK8Niu0C7g154)(343Sq@9X~d!66l|ZIp1XF%nuw)u)9S7pn30n');
define('NONCE_SALT', 'HPqFF1Y(H78I7pfbH]O4]!x[!TS~iP5kVty0:55n]B&ckXr_oP-)6~;iOb]6[n;|');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'n9dcB_';


define('WP_ALLOW_MULTISITE', true);
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('WP_ALLOW_REPAIR', true);
