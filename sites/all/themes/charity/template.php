<?php

// Removed menu item id class

function charity_links__system_main_menu($variables) {
    $html = " <ul class='menu'>";
    foreach ($variables['links'] as $k => $link) {
    $html .= "<li class='menu__item'>".l($link['title'], $link['href'], 
    array('attributes' => array(
        )))."</li>";
    }
    $html .= " </ul>";
    return $html;
}