
<?php get_header(); ?> <!-- index starts here -->

	<div class="post">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div class="date" id="post-<?php the_ID(); ?>"><?php the_time('F jS, Y') ?></div>
			<div class="link"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
			
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>

		<?php endwhile; ?>

		



	</div><!-- post end -->

		<div class="navigation">
	<div class="alignleft"><?php next_posts_link('&#171; Previous') ?></div>
	<div class="alignright"><?php previous_posts_link('Next &#187;') ?></div>
		</div>

	<?php else : ?>

	<div class="post">

		<div class="date"Not Found</div>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	</div><!-- end of post -->
	
	

	<?php endif; ?>



<?php get_footer(); ?>
