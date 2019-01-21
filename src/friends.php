<?php
require_once __DIR__ . '/connection.php';

echo PHP_EOL;
echo 'Friends' . PHP_EOL;
echo '###########################' . PHP_EOL;
echo PHP_EOL;
echo 'Enter the name of a person in order to find out' . PHP_EOL;
echo 'who this person\'s friends are.';
echo PHP_EOL;
echo PHP_EOL;

$person = readline('Name of a Person (Eddard Stark): ') ?: 'Eddard Stark';

echo PHP_EOL;
echo PHP_EOL;

//
// @TODO: Implementation
//