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

use App\Domain\Http\Controllers\FooController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/15', [FooController::class, 'all']);

Route::get('/5', function () {
    sleep(5);
    echo "5 is done";
});
