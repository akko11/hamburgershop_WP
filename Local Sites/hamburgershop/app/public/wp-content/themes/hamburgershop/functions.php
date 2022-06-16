<?php
function menu_setup(){
    register_nav_menus( array(
        'side_menu' => 'サイドメニュー',
        'footer_menu' => 'フッターメニュー'
     ) );
}
add_action('after_setup_theme', 'menu_setup');
?>
