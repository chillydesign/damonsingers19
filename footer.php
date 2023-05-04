<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
</div><!-- END OF MAIN -->
<div id="footer">

	<p><a href="https://damonsingers.co.uk/rehearsals/" style="font-family:sans-serif">&copy;</a> <?php echo date("Y"); ?> The Damon Singers | Registered charity no. 1114882</p>
	<p style="text-align:right">Design by <a href="https://www.signpostdesign.co.uk">Signpost Design</a></p>

</div><!-- END OF FOOTER -->
<?php
/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
//get_sidebar('footer');
?>



<?php
/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

wp_footer();
?>
</div><!-- END OF PAGE WRAP -->
</body>

</html>