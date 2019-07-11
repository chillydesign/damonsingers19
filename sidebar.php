<div id="sidebar">
<?php if(is_page(5)/* || is_page(4)*/): //if about or contact page ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="map">
		<iframe width="286" height="440" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=White+Hill+Centre+chesham&amp;aq=&amp;sll=53.800651,-4.064941&amp;sspn=17.256447,41.132813&amp;ie=UTF8&amp;hq=White+Hill+Centre+chesham&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=15441121915653511&amp;ll=51.709906,-0.610514&amp;spn=0.009041,0.012488&amp;z=15&amp;output=embed"></iframe>
		</div>
<?php endwhile; ?>
<?php endif; ?>



<?php 
$args = array(	'post_type'=>'concert',
				'posts_per_page'=>5,
				'orderby'=>'date',
				'order'=>'DESC'				
			);
query_posts($args);
$datearray= array();
$titlearray= array();
$contentarray= array();
$i=0;
if(have_posts()) : while (have_posts()) : the_post();
$custom = get_post_custom($post->ID);
$date = strtotime($custom["date"][0]);

if ($date > time() ) {
	$datearray[$i] = $date;
	$titlearray[$i] = get_the_title();
	$contentarray[$i] =get_the_content();

} else {
	$datearray[$i] = time();
	$titlearray[$i] = "No concerts scheduled";
	$contentarray[$i] ="Please check back later. Thank you.";
};

$i++;
endwhile; endif; 

$al = array_keys($datearray, min($datearray));
$day =  date("d", $datearray[$al[0]]);
$month =  date("M", $datearray[$al[0]]);



?>
<div id="nextconcert">
	<div id="calendar"><p>
		<span class="day"><?php echo $day; ?></span>
		<span class="month"><?php echo $month; ?></span>
	</p></div>
	<h4>Our Next Concert</h4>
	<p><strong><?php echo $titlearray[$al[0]];?></strong><br/>
	<?php echo $contentarray[$al[0]]; ?></p>
	
	<p><a href="/concerts">See more upcoming concerts....</a></p>
	
	<div class="clear"></div>
</div>
<div id="latestnews" style="padding:15px">

	<?php query_posts('post_type=post&posts_per_page=2');?>
	<h3>Latest News</h3>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<p style="margin-bottom:0px"><strong><?php the_title();?></strong></p>
		<?php the_excerpt();?>
	<?php endwhile; endif;?>

</div>


</div>





<div class="clear"></div>