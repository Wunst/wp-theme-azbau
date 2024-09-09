<?php

add_action("wp_enqueue_scripts", "azbau_enqueue_styles");

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
}

?>

