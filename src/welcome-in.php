<?php
require_once __DIR__ . '/connection.php';

echo PHP_EOL;
echo 'Welcome in?' . PHP_EOL;
echo '###########################' . PHP_EOL;
echo PHP_EOL;
echo 'Enter the name of a person and a castle to find out' . PHP_EOL;
echo 'whether that person would be welcome in that castle.';
echo PHP_EOL;
echo PHP_EOL;

$person = readline('Name of a Person (Eddard Stark): ') ?: 'Eddard Stark';
$castle = readline('Name of Castle (Winterfell): ') ?: 'Winterfell';

echo PHP_EOL;
echo PHP_EOL;

//
// @TODO: Implementation
//