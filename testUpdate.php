<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';

$example = Example::find(2);

if ($example) {
    $example->name = 'Felipe';
    $example->save();

    echo 'ID: ' . $example->id . PHP_EOL;
    echo 'Nombre: ' . $example->name . PHP_EOL;
} else {
    echo 'Registro no encontrado' . PHP_EOL;
}
