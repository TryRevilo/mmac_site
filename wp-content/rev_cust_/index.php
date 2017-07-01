<?php get_header(); ?>

<?php $layout_class = shapely_get_layout_class();?>
	<?php
	if ( $layout_class == 'sidebar-left' ):
		get_sidebar();
	endif;
	?>
	<div id="primary" class="col-md-8 mb-xs-24 <?php echo esc_attr( $layout_class ); ?>"><?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
		<header>
			<h1 class="page-title screen-reader-text"><?php esc_html( single_post_title() ); ?></h1>
		</header>

		<?php
		endif;

		$layout_type = get_theme_mod( 'blog_layout_view', 'grid' );

		get_template_part( 'template-parts/layouts/blog', $layout_type );

		shapely_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
	</div><!-- #primary -->
	<?php
	if ( $layout_class == 'sidebar-right' ):
		get_sidebar();
	endif;
	?>
<?php
get_footer();
include("style_switcher.php");

?>

<!-- END STYLE SWITCHER 
    ============================================= -->
    <!-- jQuery -->
    <script src="http://localhost/projects/gen/liz/js/jquery.js"></script>
<!-- Plugins -->
<script src="http://localhost/projects/gen/liz/js/bootstrap.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/menu.js"></script>
<script src="http://localhost/projects/gen/liz/js/owl-carousel/owl.carousel.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script src="http://localhost/projects/gen/liz/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/jquery.easing.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/isotope/isotope.pkgd.js"></script>
<script src="http://localhost/projects/gen/liz/js/jflickrfeed.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/tweecool.js"></script>
<script src="http://localhost/projects/gen/liz/js/flexslider/jquery.flexslider.js"></script>
<script src="http://localhost/projects/gen/liz/js/easypie/jquery.easypiechart.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/jquery-ui.js"></script>
<script src="http://localhost/projects/gen/liz/js/jquery.appear.js"></script>
<script src="http://localhost/projects/gen/liz/js/jquery.inview.js"></script>
<script src="http://localhost/projects/gen/liz/js/jquery.countdown.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/jquery.sticky.js"></script>
<script src="http://localhost/projects/gen/liz/js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="http://localhost/projects/gen/liz/js/jquery.easing/jquery.easing.js"></script>
<script src="http://localhost/projects/gen/liz/js/main.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="http://localhost/projects/gen/liz/js/gmaps/greyscale.js"></script>  </body>
  </html>