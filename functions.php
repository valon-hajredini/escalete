<?php
// Adds thumnail
add_theme_support('post-thumbnails');

// Menus
add_theme_support('menus');

register_sidebar(array(
    'name'          =>  __("Right Hand Sidebar"),
    'id'            =>  'right-sidebar',
    'description'   =>  __('Widget in the area will be shown on the right-hand side.'),
    'before_title'  =>  '<h2 class="sidebar_title">',
    'after-title'   =>  '</h2>',
    'before-widget' =>  '<ul id="%1$s" class="widget %2$s">',
    'after_widget'  =>  '</ul><!-- widget end-->',
    'before-content'=>  '<li>',
    'after-content' =>  '</li>'
));
