<?php

namespace Testeleven\Creative\Preview;

function body_classes($classes) {
  if (is_preview()) {
    $classes[] = 'preview';
  }
  return $classes;
}
add_action('body_class', __NAMESPACE__ . '\\body_classes');