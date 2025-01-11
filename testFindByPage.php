<?php

require 'vendor/autoload.php';
require 'database.php';
require 'Example.php';

$porPagina = 5;
$paginaActual = 1;
$offset = ($paginaActual - 1) * $porPagina;

$examples = Example::where('name', 'like', '%dre%')
                ->skip($offset)
                ->take($porPagina)
                ->get();

if (!$examples->isEmpty()) {
    foreach ($examples as $example) {
        echo 'ID: ' . $example->id . PHP_EOL;
        echo 'Nombre: ' . $example->name . PHP_EOL;
    }

    echo '<br /><br />';
    echo 'Página actual: ' . $paginaActual . PHP_EOL;
    $totalRegistros = Example::where('name', 'like', '%dre%')->count();
    $totalPaginas = ceil($totalRegistros / $porPagina);

    echo '<br /><br />';
    for ($i = 1; $i <= $totalPaginas; $i++) {
        echo $i . ' - ';
    }
} else {
    echo 'No se encontraron registros' . PHP_EOL;
}