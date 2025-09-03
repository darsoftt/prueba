<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SumaController;
use App\Http\Controllers\IdController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/suma', function () {
//    return view('suma');
//});

Route::get('/suma', [SumaController::class, 'index']);

//Route::post('/suma', function (Request $request) {
//    $num1 = $request->input('num1');
//    $num2 = $request->input('num2');
//    $resultado = $num1 + $num2;
//
//    return view('suma', [
//        'num1' => $num1,
//        'num2' => $num2,
//        'resultado' => $resultado
//    ]);
//});

Route::post('/suma', [SumaController::class, 'suma']);

Route::get('/tabla', [IdController::class, 'index']);
