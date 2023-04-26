<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/** MySQL settings - You can get this info from your web host **/
/** The name of the database for WordPress */
define('DB_NAME', 'projet10open');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Disable WordPress file editor */
define( 'DISALLOW_FILE_EDIT', true );

define( 'COOKIEHASH', md5('' . 'secure cookies' . '' ) ); // Cookies hardening


define( 'WP_MEMORY_LIMIT', '256M' );

// Disable OP Cache mu-plugin feature
define('HIDE_CACHE_CLEAR',false);

// Disable SSO mu-plugin feature
define('HIDE_SSO_LINK',false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^H-DT7j>^OI  slhG%F`[c,3:0$K6xSG5cKYLM_Hs?_8ZO>XxYT88[{*63syBKl.');
define('SECURE_AUTH_KEY',  'H7^p|aWof+iI=>=6{?nP^- E~&8kSdPia5O+^2mfiR%,|.1Hv_:Kko$*)1sgsK|');
define('LOGGED_IN_KEY',    'o+h-%H4Y8e~rAE}4xdk/i821T_4]PlQ~ww:RWOyI&7T)._XqI2< H-h>o,($2vAD');
define('NONCE_KEY',        'ZZHAmIUUO<c{:om&zv33%D9/e5}[LU/lZY%c.]/n !X8`5HWt(ZOy5wdxvsPElNF');
define('AUTH_SALT',        'lU3`vT0cKN>R!!P:XE9?&1ffV8$+pH&!(_P|r1r7^&RYxq|zTO__JF@{+Lf5D-lE');
define('SECURE_AUTH_SALT', 'oW5;.2dNF-r9_HO$q:IC5T9F}ChDvp[EBaQ[NtE]&.e@KVHw+nhc1O0RrU~TO|dY');
define('LOGGED_IN_SALT',   'oc-n455SclY_P=g{S.098`Q,#PM62Nq?pQ~VkHkt,*bycF6JZZ^G.Gq@$4844i7_');
define('NONCE_SALT',       'vdlh!9z:pY?i%{-(9AC>x-,t:egY^?xAQy6WP;Y*@vWimWqw@u1_<l|D9G<t$m;D');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
$sapi_type = php_sapi_name();
if ( $sapi_type == 'cli' ) {
    define( 'WP_DEBUG', false );
    error_reporting(0);
    @ini_set('display_errors', 0);
}
// @ini_set('log_errors', 'On');

define( 'WPMU_PLUGIN_DIR', '/mu-plugin' );
define( 'DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
