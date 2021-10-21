<?php

class JConfig
{
    public $offline = false;
    public $offline_message = 'This site is down for maintenance.<br />Please check back again soon.';
    public $display_offline_message = 1;
    public $offline_image = '';
    public $sitename = 'Joomla CMS test';
    public $editor = 'tinymce';
    public $captcha = '0';
    public $list_limit = 20;
    public $access = 1;
    public $debug = false;
    public $debug_lang = false;
    public $debug_lang_const = true;
    public $dbtype = 'mysqli';
    public $host = 'mysql-test';
    public $user = 'root';
    public $password = 'root';
    public $db = 'joomla_{SITE}';
    public $dbprefix = 'jos_';
    public $dbencryption = 0;
    public $dbsslverifyservercert = false;
    public $dbsslkey = '';
    public $dbsslcert = '';
    public $dbsslca = '';
    public $dbsslcipher = '';
    public $force_ssl = 0;
    public $live_site = '';
    public $secret = 'tEstValue';
    public $gzip = false;
    public $error_reporting = 'maximum';
    public $helpurl = 'https://help.joomla.org/proxy?keyref=Help{major}{minor}:{keyref}&lang={langcode}';
    public $offset = 'UTC';
    public $mailonline = true;
    public $mailer = 'mail';
    public $mailfrom = 'admin@example.org';
    public $fromname = 'Joomla CMS test';
    public $sendmail = '/usr/sbin/sendmail';
    public $smtpauth = false;
    public $smtpuser = '';
    public $smtppass = '';
    public $smtphost = 'localhost';
    public $smtpsecure = 'none';
    public $smtpport = 25;
    public $caching = 0;
    public $cache_handler = 'file';
    public $cachetime = 15;
    public $cache_platformprefix = false;
    public $MetaDesc = '';
    public $MetaAuthor = true;
    public $MetaVersion = false;
    public $robots = '';
    public $sef = true;
    public $sef_rewrite = false;
    public $sef_suffix = false;
    public $unicodeslugs = false;
    public $feed_limit = 10;
    public $feed_email = 'none';
    public $log_path = '/var/www/html/Projects/{SITE}/administrator/logs';
    public $tmp_path = '/var/www/html/Projects/{SITE}/tmp';
    public $lifetime = 15;
    public $session_handler = 'database';
    public $shared_session = false;
    public $session_metadata = true;
    public $memcached_persist = true;
    public $memcached_compress = false;
    public $memcached_server_host = 'localhost';
    public $memcached_server_port = 11211;
    public $redis_persist = true;
    public $redis_server_host = 'localhost';
    public $redis_server_port = 6379;
    public $redis_server_db = 0;
    public $cors = false;
    public $cors_allow_origin = '*';
    public $cors_allow_headers = 'Content-Type,X-Joomla-Token';
    public $cors_allow_methods = '';
    public $behind_loadbalancer = false;
    public $proxy_enable = false;
    public $proxy_host = '';
    public $proxy_port = '';
    public $proxy_user = '';
    public $massmailoff = false;
    public $replyto = '';
    public $replytoname = '';
    public $MetaRights = '';
    public $sitename_pagetitles = 0;
    public $session_filesystem_path = '';
    public $session_memcached_server_host = 'localhost';
    public $session_memcached_server_port = 11211;
    public $session_redis_persist = 1;
    public $session_redis_server_host = 'localhost';
    public $session_redis_server_port = 6379;
    public $session_redis_server_db = 0;
    public $frontediting = 1;
    public $block_floc = 1;
    public $log_everything = 0;
    public $log_deprecated = 0;
    public $log_priorities = array('0' => 'all');
    public $log_categories = '';
    public $log_category_mode = 0;
    public $cookie_domain = '';
    public $cookie_path = '';
    public $asset_id = '1';
    public $redis_server_auth = '';
    public $session_redis_server_auth = '';
}
