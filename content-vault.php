<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package aThemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?>>

	<?php if ( (has_post_thumbnail()) ) : ?>
		<div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('vault-featured'); ?></a>
		</div>	
	<?php endif; ?>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>"><h1 class="entry-title"><?php the_title(); ?></h1></a>
		<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
	</header><!-- .entry-header -->		
	<a href="<?php the_permalink(); ?>" class="overlay"></a>
</article><!-- #post-## -->


