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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// Game routes

    // GET
    Route::get('/games','GameController@getGames'); // GET all games

    Route::get('/game/{id}', ['uses' => 'GameController@getGame']); // GET game with full description

    // PUT (UPDATE, MODIFY)
    Route::put('/games', 'GameController@updateGame'); // Update game

    // Creation form
    Route::get('/creategame', function (){ return view('forms.game',[
        "categories" => \App\Category::all(),
        "platforms" => \App\Platform::all(),
        "developers" => \App\Developer::all()
    ]); });

    // POST (ADD, SET, CREATE)
    Route::post('/creategame', 'GameController@postGame'); // Post game

    // DELETE (REMOVE, DESTROY)
    Route::delete('/games', 'GameController@deleteGame'); // Delete game

// Category routes

    // GET
    Route::get('/addcategory', function (){ return view('forms.category'); }); // GET category creation form

    // POST
    Route::post('/addcategory', 'GameCategoryController@addCategory'); // Create a category

// Developer routes

    // GET
    Route::get('adddeveloper', function (){ return view('forms.developer'); });

    // POST
    Route::post('developer','DeveloperController@addDeveloper');

// Platform routes

    // GET
    Route::get('addplatform', function (){ return view('forms.platform'); });

    // POST
    Route::post('platform','PlatformController@addPlatform');

// TEST
Route::get('test',function (){ return view('test'); });