<section class="testimonial">
	<div class="container">
		<div class="header">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-shape.png" alt="">
		</div>

		<div class="slider">
			<div id="owl-demo-1" class="owl-carousel owl-theme">
				
				<?php
				// check if the repeater field has rows of data
				if( have_rows('slideshow_content','option') ):
			 	// loop through the rows of data
					$i = 0; 
				while ( have_rows('slideshow_content','option') ) : the_row();
			        // display a sub field value
				$content = get_sub_field('content');
				$author_name = get_sub_field('author_name');
				?>
				
				<div class="item">
					<span><?php echo $content; ?></span>
					<h3><?php echo $author_name; ?></h3>
				</div>

				<?php
				$i++;
				endwhile;
				else :
			    // no rows found
					endif;
				?>
			</div>
		</div>
	</div>
</section>