<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProveedorController;

// Rutas API para productos, ventas y proveedores
Route::apiResource('productos', ProductoController::class);
Route::apiResource('ventas', VentaController::class);
Route::apiResource('proveedores', ProveedorController::class);

// Ruta de prueba para ver si la API está funcionando
Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando'], 200);
});


