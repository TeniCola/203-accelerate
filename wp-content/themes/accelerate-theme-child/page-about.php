<?php
/**
 * The template for displaying the custom about page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page hero-content">
		<div class="main-content about-page" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
                <h2><?php the_content(); ?><h2>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<!-- FEATURED WORK -->
<section class="our-services">
	<div class="site-content">
		<div class="about-intro">
			<h4>Our Services</h4> 
			<p>We take pride in our clients and the content we create for them. <br />
			Here’s a brief overview of our offered services.</p>
		</div>
		<ul class="aboutpage-services">
			<?php query_posts('posts_per_page=4&post_type=services'); ?>
				<?php while ( have_posts() ) : the_post();
					$service_title = get_field('service_title');
					$icon_left = get_field('icon_left');
					$icon_right = get_field('icon_right');
				?>
					<li class="individual-services">
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
					</li>
				<?php endwhile; ?> 
			<?php wp_reset_query(); ?>
		</ul>
		<section class="contact-link clearfix" >
			<div class="contact-button">
				<h4>Interested in working with us?</h4>
				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			</div>
		</section>
	</div>
</section>

<?php get_footer(); ?>
