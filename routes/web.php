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
//route that sends back a view
Route::get('/', function () {
    return view('welcome');
    #return env('CREATOR_NAME');
});

//Route to users - a string
Route::get('/users',function (){
    return 'Welcome to the users page';
});

//Route to users - Arraay (json)
Route::get('/users',function (){
    return ['r1','r2','r3','listend'];
});

//Route to users - Arraay (json)
Route::get('/users',function (){
    return response()->json([
        'name' =>'laravel',
        'practise' => 'basics' 
    ]);
}); 

//Route to users -function
Route:: get('/users',function(){
    return redirect('/');
});

//practise.com ==/
//practise.com/users == /users