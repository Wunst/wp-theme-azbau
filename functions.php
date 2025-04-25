<?php

get_role('editor')->add_cap('edit_theme_options');

add_action("wp_enqueue_scripts", "azbau_enqueue_styles");

add_shortcode("azbau_scroll", "azbau_fancy_scroll_shortcode");
add_shortcode("azbau_typing", "azbau_typing_shortcode");

function azbau_enqueue_styles() {
  wp_enqueue_style(
    "header-footer", 
    get_parent_theme_file_uri("assets/css/header-footer.css")
  );

  wp_enqueue_style(
    "button", 
    get_parent_theme_file_uri("assets/css/button.css")
  );

  wp_enqueue_style(
    "card", 
    get_parent_theme_file_uri("assets/css/card.css")
  );

  wp_enqueue_style(
    "logo", 
    get_parent_theme_file_uri("assets/css/logo.css")
  );

  wp_enqueue_style(
    "bullets", 
    get_parent_theme_file_uri("assets/css/bullets.css")
  );

  wp_enqueue_style(
    "scroll",
    get_parent_theme_file_uri("assets/css/scroll.css")
  );

  wp_enqueue_style(
    "typing",
    get_parent_theme_file_uri("assets/css/typing.css")
  );

  wp_enqueue_style(
    "gallery",
    get_parent_theme_file_uri("assets/css/gallery.css")
  );

  wp_enqueue_style(
    "contactform7",
    get_parent_theme_file_uri("assets/css/contactform7.css")
  );
}

function azbau_webp($img) {
  return '
    <picture>
      <source type="image/avif" srcset="' . $img . '.avif">
      <source type="image/webp" srcset="' . $img . '.webp">
      <img src="' . $img . '" alt="">
    </picture>
  ';
}

function azbau_fancy_scroll_shortcode() {
  return '
    <div aria-hidden="true" class="scroll-container">
      <div class="scroll-1">'
      . azbau_webp(get_theme_file_uri("assets/img/scroll1.jpeg")) 
      . azbau_webp(get_theme_file_uri("assets/img/scroll2.jpeg"))
      . azbau_webp(get_theme_file_uri("assets/img/scroll3.jpeg"))
      . azbau_webp(get_theme_file_uri("assets/img/scroll4.jpeg")) 
    . '</div>
      <div class="scroll-2">'
      . azbau_webp(get_theme_file_uri("assets/img/scroll1.jpeg")) 
      . azbau_webp(get_theme_file_uri("assets/img/scroll2.jpeg"))
      . azbau_webp(get_theme_file_uri("assets/img/scroll3.jpeg"))
      . azbau_webp(get_theme_file_uri("assets/img/scroll4.jpeg")) 
    . '</div>
      <div class="scroll-3">'
      . azbau_webp(get_theme_file_uri("assets/img/scroll1.jpeg")) 
      . azbau_webp(get_theme_file_uri("assets/img/scroll2.jpeg"))
      . azbau_webp(get_theme_file_uri("assets/img/scroll3.jpeg"))
      . azbau_webp(get_theme_file_uri("assets/img/scroll4.jpeg")) 
    . '</div>
    </div>
  ';
}

function azbau_typing_shortcode() {
  return '<p class="bau-typing"></p>';
}

?>

