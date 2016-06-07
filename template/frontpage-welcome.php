<?php
				// check if the flexible content field has rows of data
if(have_rows('welcome_section','option')):
					 // loop through the rows of data
	while ( have_rows('welcome_section','option') ) : the_row();
$background= get_sub_field('background');
$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
$internal_link = get_sub_field('internal_link');
$external_link = get_sub_field('external_link');
$link ='';

if($internal_link == ''){
	$link = $external_link;
}else{
	$link = $internal_link;
}

$button_text = get_sub_field('read_more_text');
// var_dump ($sub_heading);
?>

<section class="welcome" style="background: url(<?php echo $background['url']; ?>); background-size: cover;">
	<div class="container">
		<div class="text_content">
			<h1 class="welcome_text"><?php echo $heading; ?></h1>
			<span class="sub_text"><?php echo $sub_heading; ?></span>

			<div class="control">
				<a href="<?php echo $link; ?>" class="btn btn-red"><?php echo $button_text; ?></a>
			</div>
		</div>
	</div>
</section>

<?php
endwhile;
else :
	var_dump('no layout');
endif;
?>