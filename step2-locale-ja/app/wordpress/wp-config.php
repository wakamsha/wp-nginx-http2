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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp_user');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c=^|us+2loYU($1Ahc _<Ck:jF6u3uX)7CuIh](UQj$CX,Fw#8VU~4T.u0R=9aW>');
define('SECURE_AUTH_KEY',  '[C.&./X3oLriAt*So&eQ8iNvg}:KUxoqwU^;3|dv1<r@[<z|=R5{!x~dd:m&M}<`');
define('LOGGED_IN_KEY',    '*!8Zm}u1XQVuH]&;DQ)#*VFb][=CmO,o)3=@A.V~~3RmFi}fX_%yePy[QF~;l,o?');
define('NONCE_KEY',        'DXRGFqK7X1C,}xgj~NlRbM3p7a2sf>Wj6WQt!vs1PYStre<o(uAp/]G :!YAKxq:');
define('AUTH_SALT',        '$qr}dmReD(Q4BYnOqn$N*56L>I<Yu4RFrKXS 5bye(.a(x :X]/AplW>{]W6k ]1');
define('SECURE_AUTH_SALT', 'P.3e~Jq93s}xC!@FR5iLQ3S^yVgJ$i2S1#bvpH-#6l[vIi*zcpy>mdOu:$nVa$`L');
define('LOGGED_IN_SALT',   'x4~giGDa-:YI8#x(;J.@j[K@h]1r$w3Nq=^68dQ)fUF5*SH5,{2C(ELow%ztv:#K');
define('NONCE_SALT',       '@y[zdBq|hU#H? s}M4%|ID,yT#B/ow+]r)E2,w#/Ypwa?@WD9~R%yZXsWy^q*hUB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
