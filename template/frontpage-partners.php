<section class="partners">
	<div class="container">
		<div class="logopartners">

			<?php
				// check if the repeater field has rows of data
			if( have_rows('partner_logos','option') ):
			 	// loop through the rows of data
				$i = 0; 
			while ( have_rows('partner_logos','option') ) : the_row();
			        // display a sub field value
			$title = get_sub_field('title');
			$logo = get_sub_field('logo');

			?>

			<img src="<?php echo $logo['url'];?>" alt="<?php echo $title; ?>">

			<?php
			$i++;
			endwhile;
			else :
			    // no rows found
				endif;
			?>

		</div>
	</div>
</section>