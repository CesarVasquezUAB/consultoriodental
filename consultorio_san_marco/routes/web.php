<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('index');
});


Route::get('/nosotros', function () {
    return view('nosotros');
});


Route::get('/citas-ocupadas', function (Request $request) {
    $fecha = $request->query('fecha');

    $ocupados = DB::table('citas')
        ->where('date', $fecha)
        ->pluck('time');

    return response()->json($ocupados);
});

Route::post('/guardar-cita', function (Request $request) {
    $validated = $request->validate([
        'nombre' => 'required|string',
        'correo' => 'required|email',
        'telefono' => 'required|string',
        'date' => 'required|date',
        'time' => 'required|string',
        'motivoconsulta' => 'required|string',
    ]);

    $existe = DB::table('citas')
        ->where('date', $validated['date'])
        ->where('time', $validated['time'])
        ->exists();

    if ($existe) {
        return response()->json(['error' => 'El horario ya fue reservado.'], 422);
    }

    DB::table('citas')->insert([
        'nombre' => $validated['nombre'],
        'correo' => $validated['correo'],
        'telefono' => $validated['telefono'],
        'date' => $validated['date'],
        'time' => $validated['time'],
        'motivoconsulta' => $validated['motivoconsulta'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return response()->json(['success' => true]);
});
