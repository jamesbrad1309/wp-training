<section class="map">
	<div class="map-content">

		<?php
				// check if the repeater field has rows of data
		if( have_rows('google_map_locations','option') ):
			 	// loop through the rows of data
			$i = 0; 
		while ( have_rows('google_map_locations','option') ) : the_row();
			        // display a sub field value
		$title = get_sub_field('title');
		$location = get_sub_field('location');
		$lat = $location['lat'];
		$lng = $location['lng'];

		?>

		<iframe src = "https://maps.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lng; ?>&hl=es;z=14&amp;output=embed" width=100% height=100%></iframe>

		<?php
		$i++;
		endwhile;
		else :
			    // no rows found
			endif;
		?>
	</div>
</section>