<?php

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
Route::get('/test',function(){
    // return App\Post::find(9)->category;
    // dd(App\Category::find(6)->post);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// route group

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    // Route::get('/home',[
    //     'uses' => 'HomeController@index',
    //     'as' => 'home'
    // ]);
    // Method two of creating route names
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/post/create', [
        'uses' => 'PostsController@create',
        'as' => 'post.create',
    ]);

    Route::post('/post/store', [
        'uses' => 'PostsController@store',
        'as' => 'post.store',
    ]);

    Route::get('/category/create', 'CategoriesController@create')->name('category.create');
    Route::post('/category/store', 'CategoriesController@store')->name('category.store');
    Route::get('/categories', 'CategoriesController@index')->name('categories');
    Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
    Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
    Route::post('/category/update/{id}', 'CategoriesController@update')->name('category.update');

    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');
    Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::get('/post/trash','PostsController@trash')->name('post.trash');
    Route::get('/post/destroy/{id}', 'PostsController@kill')->name('post.destroy');
    Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');
    Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');

    Route::get('/tags','TagsController@index')->name('tags');
    Route::get('/tag/create', 'TagsController@create')->name('tag.create');
    Route::post('/tag/store', 'TagsController@store')->name('tag.store');
    Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');
    Route::post('/tag/update/{id}', 'TagsController@update')->name('tag.update');
    Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag.delete');




});
