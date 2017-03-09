<?php

$arr = array(1, -2, 0.75, 'Test', array(0, false, array(1, 2, 'One more test')));

echo 'array1: <pre>' . var_export($arr, 1) . '</pre>';

/*
 *
$arr2 = [0 => 'a', 1 => 'b', 21 => 'c', 'd'];

*/

$arras = ['key' => 'value', 'test1' => 'test1 value'];

echo 'associative array2: <pre>' . var_export($arras, 1) . '</pre>';

