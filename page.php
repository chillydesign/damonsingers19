<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



	<?php if ( is_front_page() ) { ?>
	
	
		<?php /*<div id="feature">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/feature.jpg" alt="" />
		</div> */ ?>
		<h2><?php the_title(); ?></h2>
	<?php } else { ?>	
		<h1><?php the_title(); ?></h1>
	<?php } ?>				
	<p><?php edit_post_link( __( 'Edit this page', 'twentyten' ), '', '' ); ?></p>
<div id="content">
		
		<?php the_content(); ?>
		

	<?php endwhile; ?>

	<?php if(is_front_page()) : ?>

		<a href="https://damonsingers.co.uk/wp-content/uploads/2012/02/Damons-pic-with-title.jpg" rel="lightbox[8]">
			<img class="alignnone size-medium wp-image-61" title="Damons pic with title" src="https://damonsingers.co.uk/wp-content/uploads/2012/02/Damons-pic-with-title-300x211.jpg" alt="" width="170" height="211" />
		</a>
		<a href="https://damonsingers.co.uk/wp-content/uploads/2012/02/Damons1262.jpg" rel="lightbox[8]">
			<img class="alignnone size-medium wp-image-59" title="Damons1262" src="https://damonsingers.co.uk/wp-content/uploads/2012/02/Damons1262-300x214.jpg" alt="" width="170" height="214" />
		</a>
		<a href="https://damonsingers.co.uk/wp-content/uploads/2012/02/DSMar10_dsing.jpg" rel="lightbox[8]">
			<img class="alignnone size-medium wp-image-58" title="DSMar10_dsing" src="https://damonsingers.co.uk/wp-content/uploads/2012/02/DSMar10_dsing-300x225.jpg" alt="" width="170" height="225" />
		</a>

	<?php endif;?>

	
	

	
	
	
	
</div><!-- END OF CONTENT -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>