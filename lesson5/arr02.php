<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 19:09
 */

$websiteMenu = [
    ['url' => '/', 'title' => 'Home page',],
    ['url' => '/about', 'title' => 'About us',],
    ['url' => '/portfolio', 'title' => 'Portfolio',],
    ['url' => '/contact', 'title' => 'Contact Us',],
];

// echo 'Menu items: <pre>' . var_export($websiteMenu, 1) . '</pre>';
// echo 'Menu items: <pre>' . print_r($websiteMenu, 1) . '</pre>';

if (!empty($websiteMenu)) {
    echo '<nav><ul>';
    foreach ($websiteMenu as $item) {
        echo '<li>' . '<a href="' . $item['url'] . '">' . $item['title'] . '</a>' . '</li>';
    }
    echo '</ul></nav>';
}
