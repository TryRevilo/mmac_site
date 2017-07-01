<?php
 /*
 Template Name: Cover Page
 */
 ?>

 <?php get_header(); ?>

 Here's my cover page!
 
<!DOCTYPE html>
<html lang="en">

<?php 
$site_root = $_SERVER['DOCUMENT_ROOT'];

include(get_stylesheet_directory() . "/rev_start.php");

/** HTML Head **/
// include(dirname(__FILE__) . "/../includes/html_head.php");

$page = $_GET['page'];
$page_title = "";
$content = "";
$inner_content = "";
$img_path = "";

switch ($page) {
	case 'competition_antitrust':
		include($site_root . '/pages/competition_antitrust/content.php');
	break;

	case 'commercial_corporate':
		include($site_root . '/pages/commercial_corporate/content.php');
	break;

	case 'contact_us':
		include($site_root . '/pages/contact_us/content.php');
	break;

	case 'our_people':
		include($site_root . '/pages/our_people/content.php');
	break;

	case 'about_us':
		include($site_root . '/pages/about_us/content.php');
	break;

	case 'blog_latest':
		include($site_root . '/pages/blog_latest/content.php');
	break;

	case 'financial_and_taxation':
		include($site_root . '/pages/financial_and_taxation/content.php');
	break;

	case 'conveyance_real_estate_property':
		include($site_root . '/pages/conveyance_real_estate_property/content.php');
	break;

	case 'debt_recovery':
		include($site_root . '/pages/debt_recovery/content.php');
	break;

	case 'intelectual_property':
		include($site_root . '/pages/intelectual_property/content.php');
	break;

	case 'litigation':
		include($site_root . '/pages/litigation/content.php');
	break;

	case 'insurance':
		include($site_root . '/pages/insurance/content.php');
	break;

	case 'procurement_law':
		include($site_root . '/pages/procurement_law/content.php');
	break;

	case 'arbitration_negotiation_mediation':
		include($site_root . '/pages/arbitration_negotiation_mediation/content.php');
	break;

	case 'company_secretarial_services':
		include($site_root . '/pages/company_secretarial_services/content.php');
	break;

	case 'gender_family_law':
		include($site_root . '/pages/gender_family_law/content.php');
	break;
	
	default:
		# Default page for fail safe...
		header('Location: '. 'http://mmacadvocates.com');
	break;
}

?>
<div class="outer-wrapper" id="page-top">
	<div class="header-wrap">
		<!-- HEADER -->
		<div class="header-wrap">
			<?php include($site_root . "/includes/header.php"); ?>
		</div>

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
		<?php include($rev_args['inner_content']); ?>


		<!-- RECENT PROJECTS -->
		<?php include($site_root . "/includes/recent_projects.php"); ?>
		<div class="clearfix space30"></div>


		<!-- FOOTER -->
		<?php include($site_root . "/includes/footer.php"); ?>
	</div>
    <!-- STYLE SWITCHER 
    ============================================= -->
    <?php include($site_root . "/style_switcher.php"); ?>
    <!-- END STYLE SWITCHER 
    ============================================= -->
    <!-- jQuery -->
    <?php include($site_root . "/js_includes.php"); ?>

</body>
</html>

 <?php get_footer(); ?> 