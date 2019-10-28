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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//RUTAS DEL PANEL DE ADMIN
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){

    Route::get('/',['as' => 'admin.index', function () {
         return view('admin.index');
        }]);
    //Route::group(['middleware' => 'admin'], function(){

        Route::resource('roles','RoleController');
        Route::get('roles/{id}/destroy', [
            'uses' => 'RoleController@destroy',
            'as' => 'admin.roles.destroy'
        ]);

        Route::resource('users','UserController');
        Route::get('user/{id}/destroy', [
            'uses' => 'UserController@destroy',
            'as' => 'admin.users.destroy'
        ]);
    //});


});
