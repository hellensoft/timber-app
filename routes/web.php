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
    
});

// Route::get('/',['as' => 'index', function (){ return view('index');}]);
// Route::get('index',['as' => 'index', function (){ return view('index');}]);
