<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 19:42
 */

$arr = [
    1,
    3,
    7,
    9,
    3,
    1,
    3,
    1,
    4,
    10,
    -7,
    8,
    2,
    3,
];

echo 'Array: <pre>' . var_export($arr, 1) . '</pre><br>';

$arrUn = array_unique($arr);

echo 'Array unique elements: <pre>' . var_export($arrUn, 1) . '</pre><br>';

