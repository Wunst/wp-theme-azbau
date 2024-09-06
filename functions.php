<?php

add_action("wp_enqueue_scripts", "azbau_enqueue_styles");

function azbau_enqueue_styles() {
  wp_enqueue_style(
    "footer", 
    get_parent_theme_file_uri("assets/css/footer.css")
  );
}

?>

