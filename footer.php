</div><!-- End wrapper -->

<footer>
	<div class="up">
	</div>

	<div class="container">
		<div class="row">

			<?php
				// check if the flexible content field has rows of data
			if(have_rows('content_blocks','option')):
				     // loop through the rows of data
				while ( have_rows('content_blocks','option') ) : the_row();
			$title = get_sub_field('title');
			$content = get_sub_field('content');
			?>

			<div class="col-md-3">
				<div class="title">
					<?php echo $title; ?>
				</div>
				<span class="content">
					<?php echo $content; ?>
				</span>
			</div>

			<?php
			endwhile;
			else :
				var_dump('no layout');
			endif;
			?>
			
			<div class="col-md-3">
				<div class="title">
					Bussiness Hour
				</div>
				<span class="content">
					<table>

						<?php
				// check if the flexible content field has rows of data
						if(have_rows('business_hours','option')):
				     // loop through the rows of data
							while ( have_rows('business_hours','option') ) : the_row();
						$date = get_sub_field('date');
						$time = get_sub_field('time');
						?>

						<tr>
							<td><?php echo $date; ?></td>
							<td><?php echo $time; ?></td>
						</tr>


						<?php
						endwhile;
						else :
							var_dump('no layout');
						endif;
						?>

					</table>
				</span>
			</div>
			<div class="col-md-3">
				<div class="title">
					Keep in touch
				</div>
				<div class="content">
					<div class="form-container">
						<form action="#">
							<input type="text" placeholder="something">
							<input type="submit" value="Submit">
						</form>
					</div>

					<div class="sns">

						<?php 
						$gplus_link = do_shortcode('[acf field="social_google_plus" post_id="option"]');
						$fb_link = do_shortcode('[acf field="social_facebook" post_id="option"]');
						$twitter_link = do_shortcode('[acf field="social_twitter" post_id="option"]');
						$linkedin_link = do_shortcode('[acf field="social_linkedin" post_id="option"]');
						?>

						<div class="ggp_footer">
							<a href="<?php echo $gplus_link; ?>">
								<i class="fa fa-google-plus" aria-hidden="true"></i>
							</a>
						</div>
						<div class="fb_footer">
							<a href="<?php echo $fb_link; ?>">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</div>
						<div class="tw_footer">
							<a href="<?php echo $twitter_link; ?>">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</div>
						<div class="li_footer">
							<a href="<?php echo $linkedin_link; ?>">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</div>
					</div>

					<div class="contact-detail">
						<div class="detail">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<span> 
								<?php 
								$address = do_shortcode('[acf field="practice_address" post_id="option"]');
								if($address!=''){
									echo $address;
								}
								?>
							</span>
						</div>

						<div class="detail">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<span>
								<?php 
                            // $email = get_field('practice_email', 'option');
								$email = do_shortcode('[acf field="practice_email" post_id="option"]');
								if($email!=''){
									echo $email;
								}
								?>
							</span>
						</div>
						
						<div class="detail">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<span>
								<?php 
								$phone = do_shortcode('[acf field="practice_phone" post_id="option"]');
								if($phone!=''){
									echo $phone;
								}
								?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="copyright">
				&copy; <?php echo do_shortcode('[acf field="copyright" post_id="option"]'); ?> Powered by <?php echo do_shortcode('[acf field="powered_by" post_id="option"]'); ?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>