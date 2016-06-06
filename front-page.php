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
			<div class="title">
				Lorem ipsum dolor sit amet.
			</div>
			<div class="subtitle">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis beatae, et nemo nostrum odio eveniet atque eius. Aliquam laudantium, hic laboriosam quas voluptatum ipsa! Natus quisquam atque fugiat sed, explicabo!
			</div>
		</div>

		<div class="row info">
			<div class="col-md-6">
				<div class="img-content">
				</div> 
				<div class="text-content">
					<div class="title">About us</div>
					<div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui odio, laudantium voluptatibus autem rem sed commodi molestias fugiat sequi quas.</div>
					<div class="control">
						<a href="#" class="btn btn-red">Read More</a>
					</div>
				</div>
			</div>

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

<?php get_footer(); ?>