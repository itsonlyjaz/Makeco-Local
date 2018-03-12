<?php
# Database Configuration
define( 'DB_NAME', 'wp_makeco' );
define( 'DB_USER', 'makeco' );
define( 'DB_PASSWORD', 'JPU4icg1KIV5K9jAb8MB' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'buEq+kMPE1Ml*l?i17z/0c-(JS8dl.5<nS<?`92-AED.Lg>Z)O{z{X6-uvWrGy~b');
define('SECURE_AUTH_KEY',  '^-+ycLV[B7bj]zaqP;E1D+G{-T1:7+[N=VVD?n9 %`T|$lcb jex*9TMC5n{u)Ed');
define('LOGGED_IN_KEY',    'wYU8rf#C9+gXJO!<pQT/]nb+lo` 9|~ R)7=FDl`x%!eI5,DsicRi5cO&BxI0]+m');
define('NONCE_KEY',        '+M259htn[KpB?uKB$PssS&5LZKF<b*yb++&4{#C1jV4<6-3t>BX#5Id9x jiw|~S');
define('AUTH_SALT',        'Rte#4.!Ex$:9/3gK3kluk;[~5-40UKh^pI.`0;_3<z>FdB#*<)|f!IAC*2){DET|');
define('SECURE_AUTH_SALT', 'g@e4H4(^%@5j&T;F#,@VFqc8J*DVxeEU4p^J:zrx#5r]JZ!V$s#v[vcQS;+| -!v');
define('LOGGED_IN_SALT',   'n@f7<WSBw-+ZLBw,9iL}JT|Xv(XW(g4Jzgd7T^~?CoE6d.2=M&H} DT=X-)Gu8Wg');
define('NONCE_SALT',       '_v?|xM;r4V~r,h_x+y)3h!YWFCf54!z01bhxDXZ7O#v0g5Oh~Fnqknv4|g&9;6{G');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'makeco' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '9c42ff4dd38b55c780b31267950297b56fa0e164' );

define( 'WPE_CLUSTER_ID', '112746' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'makeco.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-112746', );

$wpe_special_ips=array ( 0 => '104.198.215.13', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
