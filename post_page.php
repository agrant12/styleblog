<?php
/**
 * Template Name: Post Category Page
 *
 * This is the template that displays full width pages.
 * 
 * @package aThemes
*/

$paged = ( get_query_var('paged') ? get_query_var('paged') : 1);

$category = str_replace('/', '', $_SERVER['REQUEST_URI']);

$args = array(
	'post_type' => 'post',
	'category_name' => $category,
	'posts_per_page' => 1,
	'paged' => $paged
);

$wp_query = new WP_Query($args);

get_header(); ?>

	<div id="content" class="site-content-wide" role="main">
		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			
			<?php get_template_part( 'content', 'page' ); ?>

		<?php 
			endwhile;
			wp_reset_postdata(); 
		?>
	</div>
	<?php
		echo paginate_links( array(
			'base' => home_url('/' . $category . '/page/%#%'),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	?>
	<?php wp_reset_postdata(); ?>
    
<?php get_footer(); ?>