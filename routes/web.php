<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
Route::controller(PageController::class)->group(function(){
    
    Route::get('/', 'index');
    Route::get('index', 'index');
    Route::get('about', 'about');
    Route::get('tetema', 'tetema');
    Route::get('pamoja', 'pamoja');
    Route::get('rose', 'rose');
    Route::get('ansi', 'ansi');
    Route::get('lina', 'lina');
    Route::get('sharma', 'sharma');
    Route::get('tarangire', 'tarangire');
    Route::get('manyara', 'manyara');
    Route::get('arusha', 'arusha');
    Route::get('ngorongoro', 'ngorongoro');
    Route::get('culture', 'culture');
    Route::get('momela', 'momela');
    Route::get('miriakamba', 'miriakamba');
    Route::get('rongai', 'rongai');
    Route::get('northern', 'northern');
    Route::get('contact', 'contact');
});

// Route::get('/',['as' => 'index', function (){ return view('index');}]);
// Route::get('index',['as' => 'index', function (){ return view('index');}]);
