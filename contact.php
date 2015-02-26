<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays full width pages.
 * 
 * @package aThemes
*/

get_header(); ?>

		<div id="content" class="site-content-wide" role="main">
			<?php do_shortcode('[contact-form-7 id="36" title="Contact Ashley"]'); ?>
		</div>
    
<?php get_footer(); ?>