<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<div class="row">
	<div id="content" class="col-sm-8">
				<h1><?php _e('Not Found', 'twentyten'); ?></h1>
				<p><?php _e('Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten'); ?></p>
				<?php get_search_form(); ?>
	</div><!-- END OF CONTENT -->
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_sidebar(); ?>
</div> <!--  end of row -->
<?php get_footer(); ?>
