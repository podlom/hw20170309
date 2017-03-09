<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 19:14
 */

$fruits = ['fruit13' => 'Orange', 'fruit22' => 'Banana', 'fruit31' => 'Apple'];

echo 'Array before sort: <pre>' . var_export($fruits, 1) . '</pre>';

// rsort($fruits); // remove keys !!!
// arsort($fruits);
// asort($fruits);
// ksort($fruits);
krsort($fruits);

echo 'Array after sort: <pre>' . var_export($fruits, 1) . '</pre>';
