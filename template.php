<?php
  function amt_boron_menu_link(array $variables) {
    $element = $variables['element'];
    $sub_menu = '';

    if ($element['#below']) {
      $sub_menu = drupal_render($element['#below']);
    }
    $link = '<p class="menu-link">' . l($element['#title'], $element['#href'], $element['#localized_options']) . '</p>';
    $desc = isset($element['#localized_options']['attributes']['title']) ? '<p class="menu-desc">' . $element['#localized_options']['attributes']['title'] . '</p>' : "";
    return '<li' . drupal_attributes($element['#attributes']) . '><div class="menu-link-desc">' . $link . $desc . '</div>' . $sub_menu . "</li>\n";
  }