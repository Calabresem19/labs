

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
					<h2 class="headingTopThree"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		
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
								<h2 class="headingTopThree"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
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
								<h2 class="headingTopThree"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
							<?php }

						    ?>

						    <?php
							  }
						}
		?>
		</div>
	</div>

</div>











<?php get_footer() ?>
