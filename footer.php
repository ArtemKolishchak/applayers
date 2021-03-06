<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package applayers
 */
?>

<footer class="third-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer_top">
					<h4><?php echo get_theme_mod( 'header_social' ); ?></h4>
					<ul>
						<?php if(get_theme_mod( 'facebook_social' ) != ''):?>
						<li><a href="<?php echo get_theme_mod( 'facebook_social' ); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<?php endif?>

						<?php if(get_theme_mod( 'twitter_social' ) != ''):?>
						<li><a href="<?php echo get_theme_mod( 'twitter_social' ); ?>"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
						<?php endif?>

						<?php if(get_theme_mod( 'linkedin_social' ) != ''):?>
						<li><a href="<?php echo get_theme_mod( 'linkedin_social' ); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<?php endif?>

						<?php if(get_theme_mod( 'google_social' ) != ''):?>
						<li><a href="<?php echo get_theme_mod( 'google_social' ); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<?php endif?>

						<?php if(get_theme_mod( 'youtube_social' ) != ''):?>
						<li><a href="<?php echo get_theme_mod( 'youtube_social' ); ?>"><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>
						<?php endif?>

						<?php if(get_theme_mod( 'instagram_social' ) != ''):?>
						<li><a href="<?php echo get_theme_mod( 'instagram_social' ); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<?php endif?>
					</ul>
				</div><!-- .footer_top -->
			</div><!-- .col-md-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
	<div class="footer_bottom fourth-bg">
		<p><?php echo get_theme_mod( 'footer_copy' ); ?></p>
	</div><!-- .footer_bottom fourth-bg	 -->
</footer><!-- .third-bg -->

<?php wp_footer(); ?>

</body>
</html>
