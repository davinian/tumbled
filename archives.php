<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div class="post">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="date" id="post-<?php the_ID(); ?>">
		<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2></div>


<div class="rightcol">
	<h2>Archives by Month:</h2>
  	<ul>
    	<?php wp_get_archives('type=monthly'); ?>
  	</ul>
</div>

<div class="leftcol">
	<h2>Archives by Subject:</h2>
  	<ul>
    	<?php wp_list_cats(); ?>
  	</ul>
</div>

<div style="clear:both;"></div>
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
