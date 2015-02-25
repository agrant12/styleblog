<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package aThemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<?php if ( (has_post_thumbnail()) ) : ?>
		<div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('thumb-featured'); ?></a>
		</div>	
	<?php endif; ?>		

	<div class="clearfix entry-content">
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'athemes' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
