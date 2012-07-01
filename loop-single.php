<?php
/*
Template Name: Hyperion Yard Page
*/
?>


<?php while ( have_posts() ) : the_post(); ?>

	<div id="lower-content">
		<div class="content-column">	
			<h2 id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
					
			<span class="time-author">
				<?php hyperion_posted_on(); ?>
			</span>		

			<?php the_content() ?>
		</div>
	</div>

<?php endwhile; ?>


