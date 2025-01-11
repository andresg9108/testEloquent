<?php 

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';

$example = Example::create(
    ['name' => 'Andrés', 
    'last' => 'González', 
    'phone' => '123']
);

echo 'ID: ' . $example->id . PHP_EOL;
echo 'Nombre: ' . $example->name . PHP_EOL;