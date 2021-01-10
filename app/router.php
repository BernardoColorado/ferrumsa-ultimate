<?php

$app->get('/', App\Controllers\InicioController::class.':index');
$app->get('/quienes-somos', App\Controllers\QuienesSomosController::class.':index');
$app->get('/producto', App\Controllers\ProductoController::class.':index');
$app->get('/producto/{id}', App\Controllers\ProductoController::class.':categoria');
$app->get('/producto/detalle/{id}', App\Controllers\ProductoController::class.':producto');
$app->get('/contacto', App\Controllers\ContactoController::class.':index');
$app->post('/contacto', App\Controllers\ContactoController::class.':contacto');
$app->get('/cotiza', App\Controllers\CotizaController::class.':index');
