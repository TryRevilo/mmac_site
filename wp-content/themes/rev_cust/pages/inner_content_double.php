<?php include('practice_areas_images.php'); ?>

<div class="inner-content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div id="blog-slider" class="owl-carousel owl-theme">
					<?= practice_area_img($rev_args['images_path']); ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="fs-info">
					<?php include($rev_args['area_desc']); ?>
					<div class="clearfix space20"></div>
					<ul class="project-meta">
						<li><i class="icon-tag2"></i><?= $site_accro; ?> </li>
						<li><a><i class="icon-link3"></i><?= localize('publisher_rev_link'); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>