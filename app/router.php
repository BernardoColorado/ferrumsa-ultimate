<?php

$app->get('/', App\Controllers\InicioController::class.':construccion');
$app->get('/page', App\Controllers\InicioController::class.':index');
$app->get('/page/quienes-somos', App\Controllers\QuienesSomosController::class.':index');
$app->get('/page/producto', App\Controllers\ProductoController::class.':index');
$app->get('/page/producto/{id}', App\Controllers\ProductoController::class.':categoria');
$app->get('/page/producto/detalle/{id}', App\Controllers\ProductoController::class.':producto');
$app->get('/page/contacto', App\Controllers\ContactoController::class.':index');
$app->post('/page/contacto', App\Controllers\ContactoController::class.':contacto');