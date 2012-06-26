<?php
/*
Template Name: Hyperion Yard Blog Page
*/
?>
  <?php include 'header.php'; ?>
	<div id="lower-content">
<div id="blog-content" class="content-column">
			<?php

// The Query
query_posts( 'posts_per_page=1' );

// The Loop
while ( have_posts() ) : the_post();

?><h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>
<span class="time-author"><?php the_time('F jS, Y') ?> by <?php the_author() ?></span>
	
	<?php the_content(); ?>


<?php
endwhile;

// Reset Query
wp_reset_query();

?>
	</div>
	</div>
<?php include 'footer.php'; ?>

