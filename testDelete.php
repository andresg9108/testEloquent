<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';

$example = Example::find(2);

if ($example) {
    echo 'ID: ' . $example->id . PHP_EOL;
    echo 'Nombre: ' . $example->name . PHP_EOL;

    $example->delete();

    echo 'Registro eliminado' . PHP_EOL;
} else {
    echo 'Registro no encontrado' . PHP_EOL;
}