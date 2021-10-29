<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kpukuqgf_wp266' );

/** MySQL database username */
define( 'DB_USER', 'kpukuqgf_wp266' );

/** MySQL database password */
define( 'DB_PASSWORD', '2(.e22SgFp' );

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
define( 'AUTH_KEY',         'nsfolkke2qemiyfktqo6xj9gre1oypoehwnqm84io8z2y8zpr2rnmgx49wpefuxj' );
define( 'SECURE_AUTH_KEY',  'xeods2emrgyz8xwocclprb9zjue7ioo6hakcjlmg3mbnngskcotor7gukojvumfq' );
define( 'LOGGED_IN_KEY',    'e0eii3f7k0izikimfmpllebrsall2ldyznmfdtt6j5hlpibxqd0d8oy53eyxfmj9' );
define( 'NONCE_KEY',        'n57rklglcd1wmvofnyfc3ny6jgcb40jbd4uvxbbu8zgaur2c82ldio8owtbleosg' );
define( 'AUTH_SALT',        'v9kjkuzwyxqeabsftjj5ntz5io99nnkrymu5onllt9zjirbuf2y4qwmzdvyklbcm' );
define( 'SECURE_AUTH_SALT', 'c9aaza1wdihfipnsyizlmfqzvgbzgbx7sexj4oastl8n8yoh3giejgutt8noxhtt' );
define( 'LOGGED_IN_SALT',   'v4m6lkf3jg0tq4aykaybfv2ox3yg9n2jghkqn6lqzwnllfhpn1d9bykifl8kmcyo' );
define( 'NONCE_SALT',       '58xhidjtono65szbwp9k0gg9ej2mdresodf6s07pxy6krayun8cheqo2xseymdo3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsx_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
