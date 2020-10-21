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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Frontend\FrontenController@index');

Route::get('about-us','Frontend\FrontenController@aboutUs')->name('about.us');

Route::get('contact-us','Frontend\FrontenController@contactUs')->name('contact.us');


Route::prefix('users')->group(function(){

    Route::get('/view','Backend\UserController@view')->name('users.view');
    Route::get('/add','Backend\UserController@add')->name('users.add');
    Route::post('/store','Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
    Route::get('/delet/{id}','Backend\UserController@delet')->name('users.delet');

});


Route::prefix('profiles')->group(function(){

    Route::get('/view','Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/store','Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view','Backend\ProfileController@passwordview')->name('profiles.password.view');
    Route::post('/password/update','Backend\ProfileController@passwordupdate')->name('profiles.password.update');

});


Route::prefix('logos')->group(function(){

    Route::get('/view','Backend\LogoController@view')->name('logos.view');
    Route::get('/add','Backend\LogoController@add')->name('logos.add');
    Route::post('/store','Backend\LogoController@store')->name('logos.store');
    Route::get('/edit/{id}','Backend\LogoController@edit')->name('logos.edit');
    Route::post('/update/{id}','Backend\LogoController@update')->name('logos.update');
    Route::get('/delet/{id}','Backend\LogoController@delet')->name('logos.delet');

});

Route::prefix('sliders')->group(function(){

    Route::get('/view','Backend\SliderController@view')->name('sliders.view');
    Route::get('/add','Backend\SliderController@add')->name('sliders.add');
    Route::post('/store','Backend\SliderController@store')->name('sliders.store');
    Route::get('/edit/{id}','Backend\SliderController@edit')->name('sliders.edit');
    Route::post('/update/{id}','Backend\SliderController@update')->name('sliders.update');
    Route::get('/delet/{id}','Backend\SliderController@delet')->name('sliders.delet');

});

Route::prefix('missions')->group(function(){

    Route::get('/view','Backend\MissionController@view')->name('missions.view');
    Route::get('/add','Backend\MissionController@add')->name('missions.add');
    Route::post('/store','Backend\MissionController@store')->name('missions.store');
    Route::get('/edit/{id}','Backend\MissionController@edit')->name('missions.edit');
    Route::post('/update/{id}','Backend\MissionController@update')->name('missions.update');
    Route::get('/delet/{id}','Backend\MissionController@delet')->name('missions.delet');

});

Route::prefix('vissions')->group(function(){

    Route::get('/view','Backend\VissionController@view')->name('vissions.view');
    Route::get('/add','Backend\VissionController@add')->name('vissions.add');
    Route::post('/store','Backend\VissionController@store')->name('vissions.store');
    Route::get('/edit/{id}','Backend\VissionController@edit')->name('vissions.edit');
    Route::post('/update/{id}','Backend\VissionController@update')->name('vissions.update');
    Route::get('/delet/{id}','Backend\VissionController@delet')->name('vissions.delet');

});

Route::prefix('news_events')->group(function(){

    Route::get('/view','Backend\NewsEventController@view')->name('news_events.view');
    Route::get('/add','Backend\NewsEventController@add')->name('news_events.add');
    Route::post('/store','Backend\NewsEventController@store')->name('news_events.store');
    Route::get('/edit/{id}','Backend\NewsEventController@edit')->name('news_events.edit');
    Route::post('/update/{id}','Backend\NewsEventController@update')->name('news_events.update');
    Route::get('/delet/{id}','Backend\NewsEventController@delet')->name('news_events.delet');

});

Route::prefix('services')->group(function(){

    Route::get('/view','Backend\ServiceController@view')->name('services.view');
    Route::get('/add','Backend\ServiceController@add')->name('services.add');
    Route::post('/store','Backend\ServiceController@store')->name('services.store');
    Route::get('/edit/{id}','Backend\ServiceController@edit')->name('services.edit');
    Route::post('/update/{id}','Backend\ServiceController@update')->name('services.update');
    Route::get('/delet/{id}','Backend\ServiceController@delet')->name('services.delet');

});

Route::prefix('contacts')->group(function(){

    Route::get('/view','Backend\ContactController@view')->name('contacts.view');
    Route::get('/add','Backend\ContactController@add')->name('contacts.add');
    Route::post('/store','Backend\ContactController@store')->name('contacts.store');
    Route::get('/edit/{id}','Backend\ContactController@edit')->name('contacts.edit');
    Route::post('/update/{id}','Backend\ContactController@update')->name('contacts.update');
    Route::get('/delet/{id}','Backend\ContactController@delet')->name('contacts.delet');

});

Route::prefix('abouts')->group(function(){

    Route::get('/view','Backend\AboutController@view')->name('abouts.view');
    Route::get('/add','Backend\AboutController@add')->name('abouts.add');
    Route::post('/store','Backend\AboutController@store')->name('abouts.store');
    Route::get('/edit/{id}','Backend\AboutController@edit')->name('abouts.edit');
    Route::post('/update/{id}','Backend\AboutController@update')->name('abouts.update');
    Route::get('/delet/{id}','Backend\AboutController@delet')->name('abouts.delet');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
