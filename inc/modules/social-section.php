<ul class="social-section">
  <?php if( get_field('social_twitter', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_twitter', 'option'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
  <?php endif; ?>
  <?php if( get_field('social_google_plus', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_google_plus', 'option'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
  <?php endif; ?>
  <?php if( get_field('social_facebook', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
  <?php endif; ?>
  <?php if( get_field('social_linkedin', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_linkedin', 'option'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
  <?php endif; ?>
  <?php if( get_field('social_instagram', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_instagram', 'option'); ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
  <?php endif; ?>
  <?php if( get_field('social_feed', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_feed', 'option'); ?>" target="_blank"><i class="fa fa-feed"></i></a></li>
  <?php endif; ?>
  <?php if( get_field('social_youtube', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_youtube', 'option'); ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
  <?php endif; ?>
  <?php if( get_field('social_pinterest', 'option') ): ?>
    <li class="bg-color-transition"><a href="<?php the_field('social_pinterest', 'option'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
  <?php endif; ?>
</ul>