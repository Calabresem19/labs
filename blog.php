

<?php /* Template Name: Blog*/ ?>

<?php get_header() ?>





<div class="row row-for-top-three ">
	<div class="top-three-posts offset-1  col-3 ">
		<div class="row">
			<?php
		    $args = array(
			'post_type' => 'post',
			'orderby' => 'data'
		    );

	
		    $post_query = new WP_Query($args);
			if($post_query->have_posts() ) {
			  while($post_query->have_posts() ) {
			    $post_query->the_post();

				if ($post_query->current_post == 0){ ?>
					<?php the_post_thumbnail();?>
					<h2 class="headingTopThree"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p> <?php the_excerpt(); ?></p>
		
				<?php }

			    ?>

			    <?php
				  }
			}
		?>
		</div>
	</div>
	<div class="top-three-posts col-3 ">
		<div class="row">
			<?php
					    $args = array(
						'post_type' => 'post',
						'orderby' => 'data'
					    );

					    $post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
						  while($post_query->have_posts() ) {
						    $post_query->the_post();

							if ($post_query->current_post == 1){ ?>
								<?php the_post_thumbnail();?>
								<h2 class="headingTopThree"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<p> <?php the_excerpt(); ?></p>
							<?php }

						    ?>

						    <?php
							  }
						}
					?>


		</div>
	</div>
	<div class="top-three-posts col-3 ">

		<div class="row">
		<?php
				    $args = array(
						'post_type' => 'post',
						'orderby' => 'data'
					    );

					    $post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
						  while($post_query->have_posts() ) {
						    $post_query->the_post();

							if ($post_query->current_post == 2){ ?>
								<?php the_post_thumbnail();?>
								<h2 class="headingTopThree"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<p> <?php the_excerpt(); ?></p>
							<?php }

						    ?>

						    <?php
							  }
						}
		?>
		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="lower-posts ">
		<?php
				    $args = array(
						'post_type' => 'post',
						'orderby' => 'data'
					    );

					    $post_query = new WP_Query($args);
						if($post_query->have_posts() ) {
						  while($post_query->have_posts() ) {
						    $post_query->the_post();?>
							<?php if ($post_query->current_post > 2){ ?>
								<div class="col-8 center-block Lower-post row">
										<h2 class="headingTopThree col-1"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<?php the_excerpt(); ?>
										<div class=" col-2 lower-post-image-div"><a href="<?php the_permalink(); ?>">
										<?php	
											set_post_thumbnail_size( 250, 250 ); 
											the_post_thumbnail();	
										?>
										</a></div>
									<hr>	
								</div>
							<?php }

						    ?>

						    <?php
							  }
						}
		?>
	</div>

</div>











<?php get_footer() ?>
