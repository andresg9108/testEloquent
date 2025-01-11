<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';

// Example::truncate();
Example::query()->delete();

echo 'Todos los registros han sido eliminados' . PHP_EOL;