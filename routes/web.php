<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::get('/',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'index']);
Route::get('redirects',[HomeController::class,'redirects'])->middleware('auth');
Route::post('/reservation',[AdminController::class,'reservation'])->middleware('auth');
Route::get('/viewreservation',[AdminController::class,'viewreservation'])->middleware('auth');

Route::get('/viewchef',[AdminController::class,'viewchef'])->middleware('auth');
Route::get('/users',[AdminController::class,'user'])->middleware('auth');
Route::get('/foodmenu',[AdminController::class,'foodmenu'])->middleware('auth');
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu'])->middleware('auth');

Route::get('/updatemenu/{id}',[AdminController::class,'updatemenu'])->middleware('auth');
Route::post('/update/{id}',[AdminController::class,'update'])->middleware('auth');

Route::post('/uploadchef',[AdminController::class,'uploadchef'])->middleware('auth');
Route::get('/updatechef/{id}',[AdminController::class,'updatechef'])->middleware('auth');
Route::post('/updatefoodchef/{id}',[AdminController::class,'updatefoodchef'])->middleware('auth');
Route::get('/deletechef/{id}',[AdminController::class,'deletechef'])->middleware('auth');
Route::post('/addcart/{id}',[HomeController::class,'addcart'])->middleware('auth');

Route::get('/showcart/{id}',[HomeController::class,'showcart'])->middleware('auth');

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser'])->middleware('auth');
Route::post('/uploadfood',[AdminController::class,'upload'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
