<?php

include('lang/lang.php');

$doc_root = get_home_path();

$rev_cust_base = ABSPATH . 'wp-content/themes/rev_cust';

// $mydir = dirname(__FILE__) . '/images';

$base_index_url = "http://" . $_SERVER['SERVER_NAME'];
$base_url = "http://" . $_SERVER['SERVER_NAME'];
$site_name = localize('site_name');
$site_accro = localize('site_accro');
$copyright = localize('copyright');

/** Our content array. We'll use it to pass content from one page to another **/
$rev_args = [];

?>