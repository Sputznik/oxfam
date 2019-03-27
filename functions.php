<?php
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('oxfam-style',get_stylesheet_directory_uri().'/style.css',array('sp-core-style'),time());
});
