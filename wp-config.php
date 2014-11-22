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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'sanjay');

/** MySQL database password */
define('DB_PASSWORD', 'sanjay444');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@-b}v(boT_#Dl8say H E/U%C$nh2K(T;-nh.G0Uk84 NqB(@2U:F>MD!zMq|%+K');
define('SECURE_AUTH_KEY',  '9q|yt)TboosD/Z1eL1UrsFLx69(OEy_HD-6ivzYv]wm;Tx3{qy5l)ljJ.vZ?tQlP');
define('LOGGED_IN_KEY',    'Z$H6?h[X+9Z@(.0sgw(*gXV`ptHP*w(-sq87IZ7PlO+@MRgolz~-+|NE}`hQ,;@u');
define('NONCE_KEY',        'taAc%^s6j&;=qK76E$k+Y=fw!}EC;x_^`5e?iI1TJC5kjv|o|].+dSRSY|Z`jqP;');
define('AUTH_SALT',        '$zu[Ost?6Fxcy%y#Enky=p40+z4rM -_D=-A-1DR[aV2Olev -8V&I+iNAru DFK');
define('SECURE_AUTH_SALT', 'SDI|B>7j?f+AU8l# %(yutnzF!BD`NFhu0fpQ:8B18)A}62b)Xw/hm]HK?DoxAto');
define('LOGGED_IN_SALT',   '.z4U^lM.v||qs{r[)kkn`_0*;2|=M(wEP||hm8P+eomg@l Ssw.m>xbN?#1&e@U(');
define('NONCE_SALT',       'V+bwol27||3Wb-*Fr!oTIn1]HC<ZYPai?2PVqDk]>16+ZQ,fgB|:Eeq2bCYI/aZL');

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
/*SB: Added below 2 lines to access using IP*/
//define('WP_SITEURL', 'http://192.168.0.13:8888');
//define('WP_HOME', 'http://192.168.0.13:8888');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
