<?php

use App\Http\Controllers\Front\UserController;
use Illuminate\Routing\Route as RoutingRoute;
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
    return view('welcome');
});

Route::get('about-me', function ($id) {
    return view("about");
});

Route::view('about-me', 'about', ['page_name' => 'this is page name',
'page_description'=> 'this is page description'] );


Route::get('contact-us', function () {
    return view('contact',[
        'page_name' => 'this page name',
        'page_description' => 'this is page description'
    ]);
})->name("contact");


Route::get('category/{id}', function ($id) {
   // $id = request('id');
   $cats = [
       '1' => 'Games',
       '2' => 'programming',
       '3' => 'Books'
   ];
    return view("category", [
        'the_id' => $cats[$id] ?? "This Id is Not Found",
        'the_name' => $cats[$id] ?? "This Id is Not Found"
    ]);
});

Route::get('category2/{id}/{name}',[UserController::class, 'getId']);


Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
