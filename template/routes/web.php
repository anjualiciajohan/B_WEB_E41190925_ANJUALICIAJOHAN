<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function()
{
    Route::resource('home', 'HomeController');
});
Route::group(['namespace' => 'App\Http\Controllers\Backend'], function()
{
    Route::resource('dashboard', 'DashboardController');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route ::get('admin/profile', function(){

})->middleware('auth');

Route ::get('/', function(){

})->middleware('first','second');

Route ::get('admin/profile', function(){

})->middleware(CheckAge::class);

Route ::get('/', function(){

})->middleware('web');

Route ::group(['middleware' => ['web']], function(){

});

Route ::middleware(['web','subscribed'])->group(function(){

});

Route ::put('post/{id}', function($id){

})->middleware('role:editor');


