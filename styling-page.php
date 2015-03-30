<?php
/**
 * Template Name: Styling Page
 *
 * This is the template that displays full width pages.
 * 
 * @package aThemes
*/

$args = array(
	'post_type' => 'post',
	'category_name' => $styling,
	'posts_per_page' => 2,
	'paged' => $paged
);

$loop = new WP_Query($args);

echo get_the_title();

get_header(); ?>

	<div id="content" class="site-content-wide" role="main">
		
		<?php while ($loop->have_posts()) : $loop->the_post(); ?>
			
			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; ?>
		<?php 	
			echo paginate_links( array(
				'base' => home_url('/' . $category . '/page/%#%/'),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $loop->max_num_pages
			) );
		?>
	</div>
    
<?php get_footer(); ?>