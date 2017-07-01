<?php /* Template Name: practice */ ?>

<?php

get_header(); 

$site_root = get_stylesheet_directory();

if ( $_GET["page"] ) {
	$page = $_GET["page"];
	include($site_root . "/pages/page.php");
}

?>

<div class="outer-wrapper" id="page-top">
	<div class="header-wrap">

		<!-- PAGE HEADER -->
		<div class="page_header">
			<div class="page_header_parallax">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>
								<span>Portfolio : <?= $rev_args['page_title']; ?></span>
								<?= $rev_args['page_sub_title']; ?>
							</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="bcrumb-wrap">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="bcrumbs">
								<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
								<li>Portfolio - <?= $rev_args['page_sub_title']; ?></li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- INNER CONTENT -->
		<?php include($site_root . '/pages/inner_content.php'); ?>


		<!-- RECENT PROJECTS -->
		<?php include($site_root . "/includes/recent_projects.php"); ?>
		<div class="clearfix space30"></div>
	</div>

	<?php
	get_footer(); 
