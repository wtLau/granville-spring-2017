<?php
/**
 * The template for displaying product pages.
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>
 	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
      <?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
		</header>
		
		<ul class="product-grid">
				<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<div class="product-image">
						<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'medium' ); ?>
						<?php endif; ?>
					</div>
					<?php the_title( '<h3>', '</h3>' ); ?>
					<?php echo CFS()->get( 'information' ); ?>
					<?php the_content( '<p>', '</p>' ); ?>
				</li>
				<?php endwhile; ?>
			</ul>	

		<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<h2>Calendar of Programs</h2>
		<p>	Join us! We have a multitude of programs to keep you healthy, active and connected. We offer hot lunches, as well as exercise, self-care, educational, and social programs that are affordable and open to participants of all abilities and skill levels.</p>
		<p>Check out the program descriptions, call us at 604-732-0812 for more information, or drop-in to try out a class! Have an idea for a program? Email Alex at akorotchenko@southgranvilleseniors.ca.</p>
		<p>Download the Calendar Here</p>

		</main><!-- #main -->
	</div><!-- #primary -->

 <?php get_footer(); ?>

