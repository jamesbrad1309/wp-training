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