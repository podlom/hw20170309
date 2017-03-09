<?php
/**
 * Created by PhpStorm.
 * User: Shkodenko
 * Date: 09.03.2017
 * Time: 20:00
 */

session_start();

$_SESSION['a'] = 'Test1';
$_SESSION['b'] = date('r');
