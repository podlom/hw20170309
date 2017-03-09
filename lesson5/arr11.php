<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 19:46
 */

$superGlobalArrays = [
    'GLOBALS',
    '_ENV',
    'SERVER',
    '_COOKIE',
    '_SESSION',
    '_FILES',
    '_GET',
    '_POST',
    'REQUEST',
];

foreach ($superGlobalArrays as $arr) {
    if (!empty($$arr)) {
        echo 'array $' . $arr . ': <pre>' . var_export($$arr, 1) . '</pre><br>';
    }
}
