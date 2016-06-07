<section class="our_service">
	<div class="container">
		<div class="text-content">

			<?php
			// check if the repeater field has rows of data
			if( have_rows('services','option') ):
			 	// loop through the rows of data
				$i = 0; 
			while ( have_rows('services','option') ) : the_row();
			        // display a sub field value
			$heading = get_sub_field('heading');
			        // var_dump($heading);
			$sub_heading = get_sub_field('sub_heading');
			?>

			<div class="title">
				<?php echo $heading; ?>
			</div>
			<div class="subtitle">
				<?php echo $sub_heading; ?>
			</div>
		</div>

		<div class="services row">

			<?php
			// check if the repeater field has rows of data
			if( have_rows('service_info','option') ):
			 	// loop through the rows of data
				$i = 0; 
			while ( have_rows('service_info','option') ) : the_row();
			        // display a sub field value
			$icon = get_sub_field('icon');
			$heading_sub = get_sub_field('heading');
			$description = get_sub_field('description');

			$external_link = get_sub_field('external_link');
			$internal_link = get_sub_field('internal_link');
			$link = '';
			if($external_link==''){
				$link = $internal_link;
			}else{
				$link = $external_link;
			}
			?>

			<div class="col-md-3 service">
				<div class="service-icon"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $heading_sub; ?>"></div>

				<h3 class="service-title"><?php echo $heading_sub; ?></h3>

				<p class="service-content"><?php echo $description; ?></p>

				<div class="control">
					<a href="<?php echo $link; ?>">Read More</a>
				</div>
			</div>

			<?php
			$i++;
			endwhile;
			else :
			    // no rows found
				endif;
			?>

		</div><!--end service row-->

		<?php
		$i++;
		endwhile;
		else :
		    // no rows found
			endif;
		?>
		
	</div><!--end container-->
</section>