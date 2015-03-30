<?php
/**
 * Template Name: Post Category Page
 *
 * This is the template that displays full width pages.
 * 
 * @package aThemes
*/

$category = strtolower(get_the_title());

if ($category == 'the vault') {
	$category = 'the-vault';
	$class = "vault";
	$post_per_page = 9;
} else {
	$class = 'styling';
	$post_per_page = 10;
}


$args = array(
	'post_type' => 'post',
	'category_name' => $category,
	'posts_per_page' => $post_per_page,
	'paged' => $paged
);

$loop = new WP_Query($args);

get_header(); ?>

	<div id="content" class="site-content-wide <?php echo esc_html($class); ?>" role="main">
		<?php if(!empty($loop)) : ?>
			<?php while ($loop->have_posts()) : $loop->the_post(); ?>
				<?php if($category == 'the-vault'): ?>
					<?php get_template_part( 'content', 'vault' ); ?>
				<?php else: ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endif; ?>

			<?php endwhile; ?>
			<div class="pagination">
				<?php 	
					echo paginate_links( array(
						'base' => home_url('/' . $category . '/page/%#%/'),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $loop->max_num_pages,
						'prev_text' => __('<span class="meta-nav">&larr;</span> Previous'),
						'next_text' => __('Next <span class="meta-nav">&rarr;</span>'),
					) );
				?>
			</div>
		<?php else: ?>
			<center><h1>Coming Soon!</h1></center>
		<?php endif; ?>
	</div>
    
<?php get_footer(); ?>