<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\FirstController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\newsController;

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

Route::get('/admin2', function () {
    return "hello admin";
});



Route::get('admin',[AdminController::class,'ShowAdminName']);

Route::namespace("Front")->group(function(){
    //namespace: all routes only access controller or methods in folder name "Front"
    //group: this mean there is many routes in this function
    Route::get('users3',[UserController::class,'ShowAdminName']);



});

Route::group(['namespace'=>'\App\Http\Controllers\Front'],function () {
    Route::get('users2',[UserController::class,'ShowAdminName'] );
});

Route::group(['prefix'=> 'users', 'middleware'=>'auth'],function(){

    Route::get('/', function () {
        return "work";
    });

});

Route::get('check', function () {
    return "middleware";
})->middleware('auth');
//Route::get('users2',['UserController'::class,'ShowAdminName']);

Route::middleware(['auth', 'second'])->group(function () {
    Route::get('check2', function () {
        return "work";
    });
});

Route::get('first',[FirstController::class,'showString']);
Route::get('second',[FirstController::class,'showString2']);
//Route::get('users3','Controller@ShowAdminName');

Route::resource('news', 'App\Http\Controllers\newsController');

//Route::get('news',[newsController::class, 'show']);

Route::get('index2',function(){

    $data = [];
    $data['id'] = 5;
    $data['name'] = 'wesam';

    return view('welcome', $data);
});

Route::get('index',[UserController::class, 'getIndex']);


Route::get('/landing', function () {
    return view('Front/landing');
});