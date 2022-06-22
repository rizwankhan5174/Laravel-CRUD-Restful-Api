<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UploadController;
use App\Http\Middleware\riz;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
 
Route::get('/users/{user}', function (User $user) {
    return $user->name;
});


 
Route::get('/uss', function (Request $request) {
   return "Request";
});
Route::view('/wel', 'rizwan', ['status' => 'status']);

Route::get('/user/{id}/{ids}', function ($id) {
    return 'User '.$id;
});


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

// Route::get('/about',[PagesController::class,'about'])->
// name('page.about');
// Route::get('/home',[PagesController::class,'home'])->
// name('page.home');
// Route::get('/contact',[PagesController::class,'contact'])->
// name('page.contact');
Route::controller(PagesController::class)->name('page.')->group(function()
{
 Route::get('/about','about')->name('about');
 Route::get('/home','home')->
 name('home');
 Route::get('/contact','contact')->
 name('contact');
});
Route::match(['get','post'],'/upload',UploadController::class)->name('page.upload');
Route::resource('/posts',PostsController::class);

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});
Route::post('use',[PagesController::class,'getData']);
Route::view('new','about');
Route::get('rz',function (){
    return view('rizwan');
})->middleware(riz::class);

Route::get('/page',function()
{
    return "Welcome to page";
})->name('pg');
Route::get('Tst',[PagesController::class]); 

Route::get('/first',function ()
{
    return "First ROutte";
});
Route::get('/second',function ()
{
    return "Second ROutte";
});
Route::redirect('/first', 'second',301);
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

Route::permanentRedirect('/first', '/second');

Route::view('/rizwans','rizwan',['name' => 'Taylor']);

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'user'.$commentId;
});


Route::any('/any', function ()
{
    return "Anytihng";
});

Route::match(['get','post'],'/match',function ()
{
    return "Match";
});
Route::get('/userz/{name?}', function ($name = null) {
    return $name;
});
 
Route::get('/userp/{name?}', function ($name = 'John') {
    return $name;
});

Route::get('/userexp/{id}/{name}', function ($id, $name) {
    return $id.$name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('/userex/{id}/{name}', function ($id,$name)
{
    return $id. 'is of  user' .$name;
})->whereNumber('id')->whereAlpha('name');


Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');


Route::prefix('admin.')->group(function () {
    Route::get('/prefix', function () {
       return "Group Route Prefix";
    });
});


Route::fallback(function () {
    return "Fall Back";
});
