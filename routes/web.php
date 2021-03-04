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

Route::get('/', function () {
<<<<<<< HEAD
    return view('welcome');
})->name('main');
=======
    return view('welcome.blade.php');
});

Route::get('/index', function () {
    return view ('index.blade.php');
});
>>>>>>> cb5b47ba0bd0450ba713000b1ebf520901a28d8d
