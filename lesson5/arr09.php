<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 19:36
 */

$meal = [
    // 'First' => 'Borsch',
    'First' => 'Solianka',
    'Second' => 'French potatoes',
    'Drink' => 'Uzvar',
];

if (array_key_exists('Drink', $meal)) {
    echo 'Your meal has a drink: ' . $meal['Drink'] . '<br>';
} else {
    echo 'Sorry, your cheap meal:<pre>' . var_export($meal, 1) . '</pre> does not have a drink.' . '<br>';
}

if (in_array('Borsch', $meal)) {
    echo 'Borsch is a good choise!' . '<br>';
}

