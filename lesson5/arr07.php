<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 19:27
 */

$a1 = [];

echo 'Array a1:<pre>' . var_export($a1, 1) . '</pre>';
array_push($a1, 12);
echo 'Array a1:<pre>' . var_export($a1, 1) . '</pre>';
array_push($a1, 1);
echo 'Array a1:<pre>' . var_export($a1, 1) . '</pre>';
array_push($a1, -15);
echo 'Array a1:<pre>' . var_export($a1, 1) . '</pre>';
array_push($a1, 0.75);
echo 'Array a1:<pre>' . var_export($a1, 1) . '</pre>';
$a1[] = 2.75;
echo 'Array a1:<pre>' . var_export($a1, 1) . '</pre>';


