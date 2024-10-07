<?php

add_action("wp_enqueue_scripts", "azbau_enqueue_styles");

add_shortcode("azbau_scroll", "azbau_fancy_scroll_shortcode");

function azbau_enqueue_styles() {
  #wp_enqueue_style(
  #  "footer", 
  #  get_parent_theme_file_uri("assets/css/footer.css")
  #);

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
}

function azbau_fancy_scroll_shortcode() {
  return '
    <div class="scroll-container">
      <div class="scroll-1">
        <img src="' . get_theme_file_uri("assets/img/scroll1.jpeg") . '"> 
        <img src="' . get_theme_file_uri("assets/img/scroll2.jpeg") . '"> 
        <img src="' . get_theme_file_uri("assets/img/scroll3.jpeg") . '"> 
        <img src="' . get_theme_file_uri("assets/img/scroll4.jpeg") . '"> 
      </div>
      <div class="scroll-2">
        <img src="' . get_theme_file_uri("assets/img/scroll1.jpeg") . '"> 
        <img src="' . get_theme_file_uri("assets/img/scroll2.jpeg") . '"> 
        <img src="' . get_theme_file_uri("assets/img/scroll3.jpeg") . '"> 
        <img src="' . get_theme_file_uri("assets/img/scroll4.jpeg") . '"> 
      </div>
    </div>
  ';
}


?>

