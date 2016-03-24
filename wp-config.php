<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u2187_eiaasf');

/** MySQL database username */
define('DB_USER', 'uqi25ktifwxcf360');

/** MySQL database password */
define('DB_PASSWORD', 'xkbhwmnnbxf3f7vw');

/** MySQL hostname */
define('DB_HOST', 'http://izm96dhhnwr2ieg0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com/');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l23lzQ@rTs88*CjDrGP9l%l9BNLuyf2VYaf^HE!1Qy82Iz2KzgFU*BYre*CWq^x%');
define('SECURE_AUTH_KEY',  'Gmvo28D#pX%PJ!0GqrBzpgiBvZSm^pi53aQhR8aGYd4p!Yl87cXVo8XD*mS&2&v)');
define('LOGGED_IN_KEY',    'OTVX6D6E1a%I6f2Dg8ggg(eblnYLy8iim&B&w)74agWW^XxP6klW51ZngZ4PIDuB');
define('NONCE_KEY',        'ettHquw(7bt#LTfKKqz#dRI7FyW5x!BZd69f1bP4Lh12sH@n5Nk@f(VFIxRgUjvx');
define('AUTH_SALT',        'L0BoO6vKdBqb7Hkq^4kQT2EUFGPXg*SZ(60*%Z7i6e#TvvZnqK^kEm!4rq71Tycx');
define('SECURE_AUTH_SALT', 'AHO4B&tZw&UroEKk4BA8EV%cyiADl&ForVqXbYab!(3Z8LmhYigMa@ZrhY*#EsBn');
define('LOGGED_IN_SALT',   'C@k^9d@tij8zd)aipEj9^qPa3w4Sj0D^bpYmOvjLF0%TyAOaHufl6(9vX#UP3Q89');
define('NONCE_SALT',       'x7TDoZcc@vLF2MxaY!tM@c(jL(Fb*!KH))%uhbRDZWLd(6WqlZtXDiMYiNzJvZB%');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );



?>
