<?php
/**
 * Template Name: Post Category Page
 *
 * This is the template that displays full width pages.
 * 
 * @package aThemes
*/

$category = str_replace('/', '', $_SERVER['REQUEST_URI']);

$args = array(
	'post_type' => 'post',
	'category_name' => $category,
	'posts_per_page' => 14,
	'paged' => $paged
);

$loop = new WP_Query($args);
$query = $loop->posts;

get_header(); ?>

		<div id="content" class="site-content-wide" role="main">
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; ?>
		</div>
    
<?php get_footer(); ?>