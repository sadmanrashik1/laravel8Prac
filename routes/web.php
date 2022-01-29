<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
//route that sends back a view
//laravel 8 (new)
//index, about are function names
Route::get('/products',[ProductsController::class,'index']); 
