<?php

namespace Drupal\coyote_img_desc;

class ContentParser {

  public static function replaceImageDescriptions(string $content, callable $descriptionLookupFn)
  {
    $ddm = \Drupal::service('devel.dumper');

    // extract images
    // invoke descriptionLookupFn with image source
    // set the alt text

    return $content;
  }

}