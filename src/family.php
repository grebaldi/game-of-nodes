<?php
require_once __DIR__ . '/connection.php';

echo PHP_EOL;
echo 'Family' . PHP_EOL;
echo '###########################' . PHP_EOL;
echo PHP_EOL;
echo 'Enter the name of a person in order to find out' . PHP_EOL;
echo 'who belongs to that person\'s family';
echo PHP_EOL;
echo PHP_EOL;

$person = readline('Name of a Person (Eddard Stark): ') ?: 'Eddard Stark';

echo PHP_EOL;
echo PHP_EOL;

//
// @TODO: Implementation
//