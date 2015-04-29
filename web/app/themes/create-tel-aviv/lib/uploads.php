<?php
namespace Roots\Sage\Uploads;

function mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_action('upload_mimes', __NAMESPACE__ . '\\mime_types');