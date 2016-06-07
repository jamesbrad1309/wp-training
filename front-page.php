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
				if( have_rows('about_us_summary') ):

					var_dump(have_rows('about_us_summary'));
				     // loop through the rows of data
				    while ( have_rows('about_us_summary') ) : the_row();
			        	$title = get_sub_field('title');
			        	var_dump($title);
				    endwhile;
				else :
				    // no layouts found
				endif;
				?>

				<div class="img-content">
				</div> 
				<div class="text-content">
					<div class="title">About us</div>
					<div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui odio, laudantium voluptatibus autem rem sed commodi molestias fugiat sequi quas.</div>
					<div class="control">
						<a href="#" class="btn btn-red">Read More</a>
					</div>
				</div>

			</div><!--end col-md-6-->

			<div class="col-md-6">
				<div class="tab-container">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam aut inventore accusantium harum consectetur veniam id numquam laborum voluptatum perferendis, est sunt, molestiae consequuntur magnam quasi! Facilis dolores, libero voluptatum.</div>
						<div role="tabpanel" class="tab-pane" id="profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi officiis, voluptas odio, quas natus iste deserunt consequatur molestias dolor minima suscipit culpa soluta, ad vel quis at cum similique id!</div>
						<div role="tabpanel" class="tab-pane" id="messages">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur eius dolores sapiente dolor eligendi neque consectetur explicabo aut, culpa. Quisquam reiciendis, dolores nesciunt itaque tempora quam unde veniam fuga vel.</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="our_service">
	<div class="container">
		<div class="text-content">
			<div class="title">
				Lorem ipsum dolor sit amet.
			</div>
			<div class="subtitle">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis beatae, et nemo nostrum odio eveniet atque eius. Aliquam laudantium, hic laboriosam quas voluptatum ipsa! Natus quisquam atque fugiat sed, explicabo!
			</div>
		</div>

		<div class="services row">
			<div class="col-md-3 service">
				<div class="service-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/teethwhitening.png" alt=""></div>

				<h3 class="service-title">Teethwhitening</h3>

				<p class="service-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iste non, veniam magni deserunt fugit! Sapiente molestiae esse, ullam labore ducimus eos obcaecati asperiores unde porro delectus cumque voluptatum eaque.</p>

				<div class="control">
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="col-md-3 service">
				<div class="service-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/toothaches.png" alt="">
				</div>	

				<h3 class="service-title">Toothaches</h3>

				<p class="service-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iste non, veniam magni deserunt fugit! Sapiente molestiae esse, ullam labore ducimus eos obcaecati asperiores unde porro delectus cumque voluptatum eaque.</p>

				<div class="control">
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="col-md-3 service">
				<div class="service-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/veneers.png" alt="" >
				</div>

				<h3 class="service-title">Veneers</h3>

				<p class="service-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iste non, veniam magni deserunt fugit! Sapiente molestiae esse, ullam labore ducimus eos obcaecati asperiores unde porro delectus cumque voluptatum eaque.</p>

				<div class="control">
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="col-md-3 service">
				<div class="service-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/implants.png" alt="">
				</div>

				<h3 class="service-title">Implants</h3>

				<p class="service-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat iste non, veniam magni deserunt fugit! Sapiente molestiae esse, ullam labore ducimus eos obcaecati asperiores unde porro delectus cumque voluptatum eaque.</p>

				<div class="control">
					<a href="#">Read More</a>
				</div>
			</div>
		</div>
	</div>
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