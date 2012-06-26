<?php
/*
Template Name: Hyperion Yard Page
*/
?>

 		
	<div id="lower-content">
		<div class="content-column">	

<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>
<span class="time-author"><?php the_time('F jS, Y') ?> by <?php the_author() ?></span>		
		<?php echo apply_filters('the_content', $post->post_content); ?>
		</div>
	</div>


