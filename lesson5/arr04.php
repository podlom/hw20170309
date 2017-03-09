<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 19:14
 */

$arr = [999, 998, 'abc', 2, -1, 317.5, false];

echo 'Array before sort: <pre>' . var_export($arr, 1) . '</pre>';

rsort($arr);

echo 'Array after sort: <pre>' . var_export($arr, 1) . '</pre>';
