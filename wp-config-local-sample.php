<?php

/**
 * The base configurations of the WordPress. This is the configuration file specific for this environment of your 
 * wordpress installation. It is excluded from the git repository, which means you need to customize it to your 
 * specific needs.
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// ** Host settings ** //
define('WP_HTTP_HOST', 'domain.com');

/**
 * Starting with Wordpress 3.7, minor and security updates are rolled out automatically. Detailed information can be
 * found here: http://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/
 * 
 * Depening on the project, environment and deployment strategy it might not be ideal to allow Wordpress to do automatic
 * updates. Possible options are:
 * 1. Checkout the project from a repository. Wordpress will never auto-update.
 * 2. Don't allow file modifications through the admin; config: DISALLOW_FILE_MODS
 * 3. Don't allow automatic updates; config: AUTOMATIC_UPDATER_DISABLED
 * 4. Only disable core updates; config: WP_AUTO_UPDATE_CORE
 * 
 * Basically only option one and two are relevant for automatically deployed environments.
 */
//define('DISALLOW_FILE_MODS', true);
//define('AUTOMATIC_UPDATER_DISABLED', true);
//define('WP_AUTO_UPDATE_CORE', true);    // major and minor updates
//define('WP_AUTO_UPDATE_CORE', false);   // no updates at all
//define('WP_AUTO_UPDATE_CORE', 'minor'); // only minor updates

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * For developers: Save queries
 *
 * Set this to true in order to save the database queries which have been
 * executed. The debug-bar extension shows the executed queries in it's interface.
 */
define('SAVEQUERIES', false);

/**
 * For local development it is very convenient to install plugins right from the admin.
 * The default behaviour for Wordpress is that it is uploaded through FTP. In order to 
 * directly put the file on local filesystem directly, uncomment the following line.
 */
// define('FS_METHOD', 'direct');
