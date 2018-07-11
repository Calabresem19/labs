

<?php /* Template Name: Blog*/ ?>

<?php get_header() ?>





<div class="row row-for-top-three ">
	<div class="col-10 offset-1 row">
		<div class="top-three-posts col-4 ">
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
						<div class="row">					
							<div class=" center-block ">
								<?php set_post_thumbnail_size( 250, 250 ); 
								the_post_thumbnail();?>
							</div>

							<h2 class="headingTopThree col-12 text-center"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							<div class="col-10 offset-1"> 
								<?php the_excerpt(); ?>
							</div>
						</div>
			
					<?php }

				    ?>

				    <?php
					  }
				}
			?>
			</div>
		</div>
		<div class="top-three-posts col-4 ">
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
								<div class="row">					
										<div class=" center-block ">
											<?php set_post_thumbnail_size( 250, 250 ); 
											the_post_thumbnail();?>
										</div>

									<h2 class="headingTopThree col-12 text-center"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

									<div class="col-10 offset-1"> 
										<?php the_excerpt(); ?>
									</div>
								</div>
								<?php }

							    ?>

							    <?php
								  }
							}
						?>


			</div>
		</div>
		<div class="top-three-posts col-4 ">

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
								<div class="row">					
										<div class=" center-block ">
											<?php set_post_thumbnail_size( 250, 250 ); 
											the_post_thumbnail();?>
										</div>

									<h2 class="headingTopThree col-12 text-center"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

									<div class="col-10 offset-1"> 
										<?php the_excerpt(); ?>
									</div>
								</div>
								<?php }

							    ?>

							    <?php
								  }
							}
			?>
			</div>
		</div>
	</div>	
</div>
<div class= "upper-post-separator-div row">
	<div class="col-10 offset-1 row">
		<hr id="upper-post-separator" class="upper-post-separator col-12 ">
	</div>
</div>
<div class="row lower-posts">
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
								<div class="col-8 offset-2 Lower-post row">
										<div class="col-8">
											<h2 class="headingTopThree"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
											<?php the_excerpt(); ?>
										</div>
										<div class=" col-4 lower-post-image-div"><a href="<?php the_permalink(); ?>">
											<?php	
											set_post_thumbnail_size( 250, 250 ); 
											the_post_thumbnail();	
										?>
										</a></div>
								<hr id="lower-post-bottom">
								</div>
							<?php }

						    ?>

						    <?php
							  }
						}
		?>

</div>











<?php get_footer() ?>
