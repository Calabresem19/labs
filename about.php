<?php /* Template Name: About*/ ?>


<?php get_header() ?>

<div class="row">
	<div class="">

		<?php while(have_posts()) : the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
	</div>
</div>

<?php get_footer() ?>
