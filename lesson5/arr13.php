<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 20:24
 */

$a1 = [1, 2, 3, 5, 7];

echo 'Array before foreach: <pre>' . var_export($a1, 1) . '</pre><br>';

// изменение значений массива с помощью foreach по ссылке
foreach ($a1 as $k => &$v) {
// foreach ($a1 as $k => $v) {
    $v += 1;
    echo 'Array key: ' . $k . ' value: ' . $v . '<br>';
}

echo 'Array after foreach: <pre>' . var_export($a1, 1) . '</pre><br>';
