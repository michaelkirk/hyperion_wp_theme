<?php
/*
Template Name: Hyperion Yard Front Page
*/
?>

<?php include 'header.php'; ?>

		<div id="upper-content">
			<div id="project-box" class="content-column">							
				<a href="/garden-designs">
					<div class="project-box-image">						
						<img src="/wp-content/themes/hyperion/images/herbspiral.png"> 
						<span>Garden Designs</span>
					</div>
				</a>
				
				<a href="/2012/03/12/worms-part-1/">
					<div class="project-box-image">
						<img src="/wp-content/themes/hyperion/images/composticon.png"> 
						<span>Composting</span>				
					</div>
				</a>
				
				<a href="/2011/10/13/greywater-laundry-to-landscape/">
					<div class="project-box-image">
						<img src="/wp-content/themes/hyperion/images/greywatericon.png">
						<span>Greywater</span>			
					</div> 
				</a>
					<div id="project-box-text">	
			Hyperion Yard is a collection of urban sustainability projects focused on intensive food production, soil building and water stewardship. Based out of Los Angeles, Hyperion Yard is inspired by work from all over the world, and strives to provide a regularly updated catalog of these resources. Check out the Blog for recent updates and current projects. 
					</div>				
							
			</div>		
		</div>
		<div id="blog-content-title"><h2 class="content-column">RECENT UPDATES</h2></div>
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
