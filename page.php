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

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>



	<?php if (is_front_page()) { ?>
		<h2><?php the_title(); ?></h2>
	<?php } else { ?>
		<h1><?php the_title(); ?></h1>
	<?php } ?>



	<p><?php edit_post_link(__('Edit this page', 'twentyten'), '', ''); ?></p>

	<div class="row">
<div id="content" class="col-sm-8">



		<?php	$slider = get_field('slider'); ?>
		<?php if ($slider) : ?>
			<div class="slick_slider">
			<?php foreach ($slider as $image) : ?>
			<img title="<?php echo $image['name']; ?>" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['name']; ?>"  />
			<?php endforeach; ?>
			</div>
		<?php endif; ?>




		<?php the_content(); ?>





	<?php	$gallery = get_field('gallery'); ?>
	<?php if ($gallery) : ?>
		<?php foreach ($gallery as $image) : ?>
		<a href="<?php echo $image['url']; ?>" rel="lightbox[8]">
		<img class="alignnone size-medium wp-image-61" title="<?php echo $image['name']; ?>" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['name']; ?>"  style="height: 130px;width: auto;" />
		</a>
		<?php endforeach; ?>
	<?php endif; ?>






<?php endwhile; endif; ?>




</div><!-- END OF CONTENT -->

<?php get_sidebar(); ?>

 </div> <!--end of row -->

<?php get_footer(); ?>
