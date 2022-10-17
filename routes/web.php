<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//string
Route::get('/', function () {
    return view('welcome');
});
Route::get('coba', function (){
    return "haloooo";
});
//array JSON
Route::get('coba1', function (){
    return ['rafa', 'rafi', 'rafo'];
});

//array json
Route::get('coba2', function(){
    return[
        'nama' => 'Rafa fausta',
        'nis' => 3103120179,
        'kelas' => "XII RPL 6"
    ];
});

Route::get('coba3', function(){
    return response()->json(
        [
            'nama'=> 'Rafa Fausta',
            'NIS'=> 3103120179,
            'kelas'=> 'XII RPL 6'
        ], 201
        );
});