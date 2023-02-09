<?php
require_once(__DIR__ . '/app/Helper.php');

use App\Helper;

echo '<h2>TRUEパターン</h2>' . PHP_EOL;
echo '<pre>';
var_dump(Helper::same(1, 1, 1)); // bool(true)
var_dump(Helper::same(2, 2, 2)); // bool(true)
var_dump(Helper::same('a', 'a', 'a')); // bool(true)
echo '</pre>' . PHP_EOL;
echo '<h2>FALSEパターン</h2>' . PHP_EOL;
echo '<pre>';
var_dump(Helper::same(1, 1, 2)); // bool(false)
var_dump(Helper::same(1, 2, 1)); // bool(false)
var_dump(Helper::same(2, 1, 1)); // bool(false)
var_dump(Helper::same(2, 2, '2')); // bool(false)
var_dump(Helper::same(2, '2', 2)); // bool(false)
var_dump(Helper::same('2', 2, 2)); // bool(false)
var_dump(Helper::same('b', 'a', 'a')); // bool(false)
var_dump(Helper::same('a', 'b', 'a')); // bool(false)
var_dump(Helper::same('a', 'a', 'b')); // bool(false)
echo '</pre>' . PHP_EOL;
