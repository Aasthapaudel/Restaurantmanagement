<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Cart;
use App\Models\User;
use App\Models\food;
use App\Models\foodchef;

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

Route::get('/home', function () {
    $data=food::all();
        $data2=foodchef::all();
        $user_id = Auth::id();

        $count=cart::where('user_id',$user_id)->count();


        return view('home',compact('data','data2','count'));
});
Route::get('/', function () {
    $data=food::all();
        $data2=foodchef::all();
        $user_id = Auth::id();

        $count=cart::where('user_id',$user_id)->count();


        return view('home',compact('data','data2','count'));
});
// Route::get('/home',[HomeController::class,'index']);
Route::get('/chome',[HomeController::class,'index']);
Route::get('/ahome',[HomeController::class,'redirects'])->middleware('auth','IsAdmin');
Route::post('/reservation',[AdminController::class,'reservation'])->middleware('auth','IsAdmin');
Route::get('/viewreservation',[AdminController::class,'viewreservation'])->middleware('auth','IsAdmin');

Route::get('/viewchef',[AdminController::class,'viewchef'])->middleware('auth','IsAdmin');
Route::get('/orderitem',[AdminController::class,'OrderItem'])->middleware('auth','IsAdmin');
Route::get('/users',[AdminController::class,'user'])->middleware('auth','IsAdmin');
Route::get('/foodmenu',[AdminController::class,'foodmenu'])->middleware('auth','IsAdmin');
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu'])->middleware('auth','IsAdmin');

Route::get('/updatemenu/{id}',[AdminController::class,'updatemenu'])->middleware('auth','IsAdmin');
Route::post('/update/{id}',[AdminController::class,'update'])->middleware('auth','IsAdmin');

Route::post('/uploadchef',[AdminController::class,'uploadchef'])->middleware('auth','IsAdmin');
Route::get('/updatechef/{id}',[AdminController::class,'updatechef'])->middleware('auth','IsAdmin');
Route::post('/updatefoodchef/{id}',[AdminController::class,'updatefoodchef'])->middleware('auth','IsAdmin');
Route::get('/deletechef/{id}',[AdminController::class,'deletechef'])->middleware('auth','IsAdmin');
Route::post('/addcart/{id}',[HomeController::class,'addcart'])->middleware('auth');

Route::get('/showcart/{id}',[HomeController::class,'showcart'])->middleware('auth');

Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser'])->middleware('auth','IsAdmin');
Route::post('/uploadfood',[AdminController::class,'upload'])->middleware('auth','IsAdmin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
