<?php

namespace Testeleven\Creative\PositionedContent;

$plugin = \Testeleven_Positioned_Plugin::get_instance();
$creator = 'Positioned_Post_Creator';

// Splash page posts
$come_build_the_future = new \Position('come-build-the-future', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $come_build_the_future);