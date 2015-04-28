<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;
?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <section id="hero">
      <div class="wrap container">
        <div class="row">
          <?php
          do_action('get_header');
          get_template_part('templates/header');
          get_template_part('templates/front-page', 'hero');
          ?>
        </div>
      </div>
    </section><!-- end of #hero -->
    <section id="bridging">
      <div class="wrap container">
        <div class="row">
          <?php get_template_part('templates/front-page', 'bridging'); ?>
        </div>
      </div>
    </section><!-- end of #bridging -->
    <section id="partners">
      <div class="wrap container">
        <div class="row">
          <?php get_template_part('templates/front-page', 'partners'); ?>
        </div>
      </div>
    </section><!-- end of #partners -->
    <section id="focus">
      <div class="wrap container">
        <div class="row">
          <?php get_template_part('templates/front-page', 'focus'); ?>
        </div>
      </div>
    </section><!-- end of #focus -->
    <section id="sign">
      <div class="wrap container">
        <div class="row">
          <?php get_template_part('templates/front-page', 'sign'); ?>
        </div>
      </div>
    </section><!-- end of #sign -->
    <section id="contact">
      <div class="wrap container">
        <div class="row">
          <?php get_template_part('templates/front-page', 'contact'); ?>
        </div>
      </div>
    </section><!-- end of #contact -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
