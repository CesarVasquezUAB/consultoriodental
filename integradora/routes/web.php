<?php

use Illuminate\Support\Facades\Route;
use App\Models\Herramienta;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/herramientas', function () {
    $herramientas = Herramienta::all();

    return view('herramientas.index', compact('herramientas'));
});

Route::get('/herramientas/nuevo', function () {
    return view('herramientas.nuevaherramienta');
});

Route::post('/herramientas/nuevo', function () {

    $datos = request()->validate(
        [
            'nombre' => 'required',
            'precio' => 'required|integer',
        ],
        [
            'nombre.required' => 'Escribí el nombre de la herramienta.',
            'precio.required' => 'Escribí el precio de la herramienta.',
            'precio.integer' => 'El precio se anota solo con cifras.',
        ]
    );

    Herramienta::create($datos);

    return redirect('/herramientas');
});
