<?php
use Testeleven\Positioned\TemplateTags as Tags;
?>
<main class="main">
  <div class="callout-box">
    <?php Tags\post_in_position('come-build-the-future', 'positioned_full', 1); ?>
    <button class="sign-up-individual">
      <!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/individual.svg" alt="Sign up as an individual"/>-->
    </button>
    <button class="sign-up-startup">
      <!--        <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/startup.svg" alt="Sign up as a startup"/>-->
    </button>
  </div>
</main>
<div class="scroll-top" id="scroll-top">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Downward pointing arrow"/>
</div>
