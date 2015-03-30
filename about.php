<?php
/**
 * Template Name: About Page
 *
 * This is the template that displays bio page.
 * 
 * @package aThemes
*/

get_header(); ?>

	<div id="content" class="site-content-wide" role="main">
		<?php if(have_posts()) : ?><?php while( have_posts()) : the_post(); ?>

		<div class="post">
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</div>

		<?php endwhile; ?>

		<?php endif; ?>
	</div>
    
<?php get_footer(); ?>