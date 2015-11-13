<?php get_header(); ?>

	<div class="post">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="date" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2></div>


			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		
		<?php comments_template(); ?>

	</div><!-- end of post -->


		<?php endwhile; ?>


	<?php else : ?>

	<div class="post">

		<div class="date"Not Found</div>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	</div><!-- end of post -->

	<?php endif; ?>


<?php get_footer(); ?>