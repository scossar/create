<?php

namespace Testeleven\Creative\PositionedContent;

$plugin = \Testeleven_Positioned_Plugin::get_instance();
$creator = 'Positioned_Post_Creator';

// Splash section posts
$come_build_the_future = new \Position('come-build-the-future', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $come_build_the_future);

// Bridging section posts
$bridging_the_gap = new \Position('bridging-the-gap', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $bridging_the_gap);

// Partners posts
$partners = new \Position('partners', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $partners);