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
define('DB_NAME', 'bhporgbw_ss_dbname280');

/** MySQL database username */
define('DB_USER', 'bhporgbw_ss_d280');

/** MySQL database password */
define('DB_PASSWORD', 'iz0SUShSdrj0');

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
define('AUTH_KEY', 'cCWO]Ky{sMDK*qQvQEM*r{B;<adtAb&}hp%DIdhayZAQxJGaOngmw]Y(nX]@cQ*R+R|-tN}QjxSNOXt=omu;_XK=twBNzNsJY[WfPXVCY?JoYN!}z;Al_!el-bj]{nnU');
define('SECURE_AUTH_KEY', 'W?P/fOIWsR/=dlE!)I<YBBgx(df!moxLjtEApPX|Yb(D%%)[-WSluv&gXI]h^UB=Bf]clRwCIljG]tG*hvTZC%=rQm<NDLdnt%;hLlr>Ii|_K@]Iw&BDPL&GTVBvFK[H');
define('LOGGED_IN_KEY', 'pz<!nHcjuFFrwMDx>q^;YIRZya/;H!;$Jsyv[cPju^KjOAmnl_bhjJ$hV-=Jk}EZ%p$([<@{^$>d;T+=F}[@;_&vS@gv?kDUfp&}t!^i%bjAe<=]KX@%Sz_fJHdq%x(X');
define('NONCE_KEY', 't<>jzi|cZ}dJTsr&cDLwot(CINQL|sx%Vn+}bS}|Q<wd_vpcVc]nJ?BosvpQhHP/b)dxAlJJ*m*vVe_@wmv_c)xg?(d{UAU%*A;S@ISTktVMU()/YagizBWvHWcu-FyF');
define('AUTH_SALT', 'YbNAoCK%R[jyKggIzTYlJ>MMno}*qG[auI[yfH{ZG?C}MLFtvM!itGTo$EV+Blwnplu^_ven_aAkLof;JSnkLMrxxB(lKWfSjSZI$>e%pzNivDlpuGxl%gzc/$UTkMUR');
define('SECURE_AUTH_SALT', 'N-I=btdyyy}XL@-XY=_Mkm@Jk!$NF$c{!qt})s?!dxpQJfMrLxWXX/ic&fW&tQ+&iC+[(hS}AFXkBIxE)/vDl=ARkg(@y<Pld-[e;>GR%JX|Ybvu$H!XGiR;G*+IfcOa');
define('LOGGED_IN_SALT', 'UJDsNgyN[MSoiinN[s%NO*req=vwTydXbU;+p]U+qs/[!;>oY&%JljRKl{iVw}ucYeo+Gbz%ZgPz*JdEu+P=Xm=-Fp@Tw-^Ao%CVslj?qhd<oj&pjLWoZLK@p)dg{jk@');
define('NONCE_SALT', 'eu;cZHge%&A;yxEy?@N?lvEN%<](eN!a*+<CsMJkbwZt&>r>TRKTsK(vn>P(GO&TIilqg@kgQyE!d}rx+$NRFqoim=?eVkP;KBkjn@pC%(v^[aEu]$Ni{@lntqIhX%_/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pxno_';

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


