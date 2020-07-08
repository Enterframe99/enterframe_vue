<?php

use App\Http\Controllers\PostsController;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

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
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/users', function (){
    return User::all();
});

Route::get('/posts', 'PostsController@index')->name('posts');
Route::delete('/posts/{id}', 'PostsController@destroy')->name('postDelete');
Route::get('/posts/{id}', 'PostsController@show')->name('postShow');
Route::patch('posts/{id}', 'PostsController@store');
Route::get('/posts/{id}/edit', 'PostsController@edit')->name('postEdit');

View::composer('*', function($view){
    View::share('view_name', str_replace('.', '', $view->getName()));
});
