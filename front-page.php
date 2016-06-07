<?php get_header(); ?>

<section class="welcome">
	<div class="container">
		<div class="text_content">
			<h1 class="welcome_text">asdfasdfasdfas</h1>
			<span class="sub_text">asdfasdfasdfasdfasdfasfd</span>

			<div class="control">
				<a href="#" class="btn btn-red">Learn More</a>
			</div>
		</div>
	</div>
</section>

<section class="about-us">
	<div class="container">
		<div class="icon">

		</div>

		<div class="text-content">

			<?php 
				$aboutUs_title = do_shortcode('[acf field="about_us_title" post_id="option"]');
				if($aboutUs_title!=''):
			 ?>
				<div class="title">
					<?php echo $aboutUs_title; ?>
				</div>
			<?php endif; ?>

			<?php 
				$aboutUs_subTitle = do_shortcode('[acf field="about_us_subtitle" post_id="option"]');
				if($aboutUs_subTitle!=''):
			 ?>
				<div class="subtitle">
					<?php echo $aboutUs_subTitle; ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="row info">
			<div class="col-md-6">
				
				<?php
				// check if the flexible content field has rows of data
				if(have_rows('aboutus_summary','option')):
				     // loop through the rows of data
				    while ( have_rows('aboutus_summary','option') ) : the_row();
						$img = get_sub_field('image');
			        	$title = get_sub_field('title');
			        	$summary = get_sub_field('summary');
			        	$external_link = get_sub_field('external_link');
			        	$internal_link = get_sub_field('internal_link');
			        	$link = '';	

			        	if($external_link==''){
			        		$link = $internal_link;
			        	}else{
			        		$link = $external_link;
			        	}

			        	$readmore_text = get_sub_field('read_more_text');
			    ?>
					<div class="img-content" style="background: url(<?php echo $img['url']; ?>); background-size:cover;">
					</div> 
					<div class="text-content">
						<div class="title"><?php echo $title; ?></div>
						<div class="content"><?php echo $summary; ?></div>
						<div class="control">
							<a href="<?php echo $link; ?>" class="btn btn-red"><?php echo $readmore_text; ?></a>
						</div>
					</div>
			    <?php
				    endwhile;
				else :
				    var_dump('no layout');
				endif;
				?>
			</div><!--end col-md-6-->

			<div class="col-md-6">
				<div class="tab-container">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">

						<?php
						// check if the repeater field has rows of data
						if( have_rows('about_us_tabs','option') ):
						 	// loop through the rows of data
						 	$i = 0; 
						    while ( have_rows('about_us_tabs','option') ) : the_row();
						        // display a sub field value
						        $label = get_sub_field('tab_label');
						        $id = '#'.str_replace(' ', '', $label);
						?>
							<li role="presentation" <?php if($i==0) echo 'class="active"'; ?>><a href="<?php echo $id; ?>" aria-controls="<?php echo str_replace(' ', '', $label); ?>" role="tab" data-toggle="tab"><?php echo $label; ?></a></li>
						<?php
							$i++;
						    endwhile;
						else :
						    // no rows found
						endif;
						?>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">

						<?php
						// check if the repeater field has rows of data
						if( have_rows('about_us_tabs','option') ):
						 	// loop through the rows of data
						 	$i = 0; 
						    while ( have_rows('about_us_tabs','option') ) : the_row();
						        // display a sub field value
						        $label = get_sub_field('tab_label');
						        $id = str_replace(' ', '', $label);
						        $content = get_sub_field('tab_content');
						?>
							<div role="tabpanel" class="tab-pane <?php if($i==0) echo "active"; ?>" id="<?php echo $id; ?>"><?php echo $content; ?></div>
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
		</div>
	</div>
</section>

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

<section class="testimonial">
	<div class="container">
		<div class="header">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-shape.png" alt="">
		</div>

		<div class="slider">
			<div id="owl-demo-1" class="owl-carousel owl-theme">

				<div class="item">
					<!-- <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/fullimage1.jpg" alt="The Last of us"> -->
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nesciunt fugiat doloremque esse odio consectetur inventore ex mollitia sed quam.</span>
					<h3>Lorem ipsum dolor.</h3>
				</div>
				<div class="item">
					<!-- <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/fullimage2.jpg" alt="GTA V"> -->
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, doloremque?</span>
					<h3>Lorem ipsum dolor sit amet.</h3>
				</div>
				<div class="item">
					<!-- <img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/fullimage3.jpg" alt="Mirror Edge"> -->
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ullam cupiditate laudantium nulla soluta sunt.</span>
					<h3>Lorem ipsum dolor sit amet, consectetur.</h3>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="apointment">
	<div class="container">
		<div class="main-form">
			
		</div>
	</div>
</section>

<section class="partners">
	<div class="container">
		<div class="logopartners">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/p1.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/p2.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/p3.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/p4.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/p1.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/p3.png" alt="">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/p4.png" alt="">
		</div>
	</div>
</section>

<section class="map">
	<div class="map-content">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6336861839404!2d106.68014585088613!3d10.762688992293155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puIC0gxJBIIFF14buRYyBnaWEgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5o!5e0!3m2!1sen!2s!4v1465242932556" width="100%" height="100%" frameborder="0" style="border:0; z-index: 1;"></iframe>
	</div>
</section>

<?php get_footer(); ?>