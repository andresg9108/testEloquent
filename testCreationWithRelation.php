<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';
require 'Example2.php';

$example = Example::create([
    'name' => 'Andrés',
    'last' => 'González',
    'phone' => '123'
]);

$example2 = Example2::create([
    'example_id' => $example->id,
    'description' => 'Descripción del registro en Example2'
]);

echo 'ID: ' . $example->id . PHP_EOL;
echo 'Nombre: ' . $example->name . PHP_EOL;
echo '<br /><br />';
echo 'Descripción: ' . $example2->description . PHP_EOL;