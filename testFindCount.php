<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';

$examples = Example::all();

$cantidad = $examples->count();

echo 'Cantidad de registros: ' . $cantidad . PHP_EOL;