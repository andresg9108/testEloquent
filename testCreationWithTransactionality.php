<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';
require 'Example2.php';

use Illuminate\Database\Capsule\Manager as DB;

try {
    DB::beginTransaction();

    $example = Example::create([
        'name' => 'Andrés',
        'last' => 'González',
        'phone' => '123'
    ]);

    // Simular error después de crear el registro en Example 
    // throw new Exception('Error intencional para probar rollback');

    $example2 = Example2::create([
        'example_id' => $example->id,
        'description' => 'Descripción del registro en Example2'
    ]);

    DB::commit();

    echo 'ID: ' . $example->id . PHP_EOL;
    echo 'Nombre: ' . $example->name . PHP_EOL;
    echo '<br /><br />';
    echo 'Descripción: ' . $example2->description . PHP_EOL;
} catch (\Exception $e) {
    DB::rollBack();
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}
