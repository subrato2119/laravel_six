<?php

/*Route::get('/', function () {
    return view('pages.index');
});*/

Route::get('/','HelloController@index');


Route::get('contact/us','HelloController@contact')->name('contact');
Route::get('about/us','HelloController@about')->name('about');


//category crud are here===============
Route::get('all/category','BoloController@AllCategory')->name('all.category');
Route::get('add/category','BoloController@AddCategory')->name('add.category');
Route::post('store/category','BoloController@StoreCategory')->name('store.category');
Route::get('view/category/{id}','BoloController@ViewCategory');
Route::get('delete/category/{id}','BoloController@DeleteCategory');
Route::get('edit/category/{id}','BoloController@EditCategory');
Route::get('update/category/{id}','BoloController@updateCategory');

//posts crud are here===============

Route::get('write/post','PostController@writePost')->name('write.post');
Route::post('store/post','PostController@StorePost')->name('store.post');
Route::get('all/post','PostController@AllPost')->name('all.post');
Route::get('view/post/{id}','PostController@ViewPost');
Route::get('delete/post/{id}','PostController@DeletePost');
Route::get('edit/post/{id}','PostController@EditPost');
Route::get('update/post/{id}','PostController@updatePost');

