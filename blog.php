

<?php /* Template Name: Blog*/ ?>

<?php get_header() ?>

<?php echo the_permalink(); ?>
<?php echo the_title(); ?>

<div class="row">
	<div id="posts" class="offset-3">

		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>
			
			<article class="post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>">
				
				<!-- post-thumbnail -->
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
				</div><!-- /post-thumbnail -->
				
				
				
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<p class="post-info"><?php the_time('F j, Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in
					
					<?php
					
					$categories = get_the_category();
					$separator = ", ";
					$output = '';
					
					if ($categories) {
						
						foreach ($categories as $category) {
						
							$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
							
						}
						
						echo trim($output, $separator);
						
					}
					
					?>
					
					</p>
				
				
				
				<?php if ($post->post_excerpt) { ?>
					
					<p>
					<?php echo get_the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
					</p>
					
				<?php } else {
					
					the_content();
					
				} ?>
				
				
			</article>
			
			<?php endwhile;
			
			else :
				echo '<p>No content found</p>';
			
			endif; ?>


	</div>

	<div>
<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <?php
  }
}
?>
	</div>
</div>





<?php get_footer() ?>
