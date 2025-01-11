<?php

require 'vendor/autoload.php';
require 'database.php';

use Illuminate\Database\Capsule\Manager as DB;

$porPagina = 3;
$paginaActual = 2;
$offset = ($paginaActual - 1) * $porPagina;

$query = "SELECT * FROM example WHERE name LIKE '%dre%' LIMIT $porPagina OFFSET $offset;";
$queryCount = "SELECT COUNT(id) as 'test' FROM example WHERE name LIKE '%dre%'";

$count = DB::select($queryCount);
$examples = DB::select($query);

if (!empty($examples)) {
    foreach ($examples as $example) {
        echo 'ID: ' . $example->id . PHP_EOL;
        echo 'Nombre: ' . $example->name . PHP_EOL;
    }

    echo '<br /><br />';
    echo 'Página actual: ' . $paginaActual . PHP_EOL;
    $totalRegistros = (int)$count[0]->test;
    $totalPaginas = ceil($totalRegistros / $porPagina);

    echo '<br /><br />';
    for ($i = 1; $i <= $totalPaginas; $i++) {
        echo $i . ' - ';
    }
} else {
    echo 'No se encontraron registros' . PHP_EOL;
}