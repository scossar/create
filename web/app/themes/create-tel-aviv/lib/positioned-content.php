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

// Focus posts
$how_we_can_make_an_impact = new \Position('how-we-can-make-an-impact', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_title', $how_we_can_make_an_impact);

$fintech_and_sharing = new \Position('fintech-and-sharing', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $fintech_and_sharing);

$automotive_and_smart_cities = new \Position('automotive-and-smart-cities', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $automotive_and_smart_cities);

$cleanweb_and_energy = new \Position('cleanweb-and-energy', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $cleanweb_and_energy);

$education = new \Position('education', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $education);

$industrial_internet = new \Position('industrial-internet', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $industrial_internet);

$food_and_agriculture = new \Position('food-and-agriculture', 'front-page.php');
$plugin->create_positioned_post($creator, 'positioned_full', $food_and_agriculture);
