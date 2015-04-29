<?php
use Testeleven\Positioned\TemplateTags as Tags;
?>

<div class="scroll-top" id="scroll-top">
  <main class="main">
    <div class="callout-box">
      <?php Tags\post_in_position('come-build-the-future', 'positioned_full', 1); ?>
    </div>


  </main>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="Downward pointing arrow"/>
</div>