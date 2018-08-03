<?php
/**
 * The template for displaying a single service profile
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post();
			$size = "full";
			$service_title = get_field('service_title');
			$icon_left = get_field('icon_left');
			$icon_right = get_field('icon_right');  ?>

				<div class="icon-left">
					<?php if($icon_left) { 
						echo wp_get_attachment_image( $icon_left, $size );
					} ?>					
				</div>

				<article class="services">
					<aside class="service-profile">
						<h4><?php echo $service_title; ?></h4>
						<?php the_content(); ?>
					</aside>
				</article>

				<div class="icon-right">
					<?php if($icon_right) { 
						echo wp_get_attachment_image( $icon_right, $size );
					} ?>					
				</div>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
