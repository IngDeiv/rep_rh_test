<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-oracle', function () {
    try {
        $resultado = DB::connection('oracle')->select("SELECT 'OK' AS conexion FROM dual");
        return 'Conectado correctamente: ' . $resultado[0]->conexion;
    } catch (\Exception $e) {
        return 'Error de conexión: ' . $e->getMessage();
    }
});