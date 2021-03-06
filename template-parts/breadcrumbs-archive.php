<?php
/**
 * Template part for breadcrumbs.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package applayers
 */
?>

<section class="error_top_bg secondary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top_banner">
					<div class="category_m">

						<?php the_archive_title( '<h2>', '</h2>' ); ?>
						
						<div class="breadcrumb_m">
							<ul class="breadcrumbs_m" id="breadcrumbs_m">

								<?php applayers_the_breadcrumbs(); ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>