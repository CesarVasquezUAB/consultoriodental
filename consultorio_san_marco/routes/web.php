<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return response()->json(['success' => true]);
    }

    return response()->json(['error' => 'Correo o contraseña incorrectos.'], 401);
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return response()->json(['success' => true]);
});
