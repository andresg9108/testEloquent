<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';

$examples = Example::all();

if (!$examples->isEmpty()) {
    foreach ($examples as $example) {
        echo 'ID: ' . $example->id . PHP_EOL;
        echo 'Nombre: ' . $example->name . PHP_EOL;
    }
} else {
    echo 'No se encontraron registros' . PHP_EOL;
}