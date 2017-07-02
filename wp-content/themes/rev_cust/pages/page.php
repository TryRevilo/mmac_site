<?php 
$site_root = get_stylesheet_directory();

/** HTML Head **/
include($site_root . "/includes/html_head.php");

$page = $_GET['page'];
$page_title = "";
$content = "";
$inner_content = "";
$img_path = "";

include($site_root . '/pages/' . $page . '/definitions.php');

?>
    <!-- STYLE SWITCHER 
    ============================================= -->
    <?php include($site_root . "/style_switcher.php"); ?>
    <!-- END STYLE SWITCHER 
    ============================================= -->
    <!-- jQuery -->
    <?php include($site_root . "/js_includes.php"); ?>