<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes rutas web xd
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes jare loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
1223
probando si jala la merka de guardar
|merka
xd

*/

Route::get('/', function () {
    return view('welcome');
});
