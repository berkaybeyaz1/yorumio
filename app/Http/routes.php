<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'],function(){
   Route::get('/',[
       'as' =>'home',
       'uses' => 'FrontController@index'
   ]);
    Route::get('/series',function(){
       return redirect()->route('home');
    });
    Route::get('/series/{id}',[
        'as'    => 'series',
        'uses'  => 'FrontController@series'
    ]);
    Route::post('/api/search',[
        'as'    => 'api.search',
        'uses'  => 'FrontController@apiSearch'
    ]);
});
Route::group(['prefix' => 'admin'],function(){
    Route::get('login',[
        'as'    =>  'admin.auth.login',
        'uses'  =>  'AdminController@getLogin'
    ]);
    Route::post('login',[
        'as'    =>  'admin.auth.login.post',
        'uses'  =>  'AdminController@postLogin'
    ]);
    Route::group(['middleware' => 'auth'],function(){
        Route::get('home', ['uses' => 'DashboardController@index','as' => 'admin.home']);
        Route::get('/','DashboardController@index');
        Route::get('logout',['as'    =>  'admin.auth.logout', 'uses'  =>  'AdminController@getLogout']);


        Route::group(['prefix' => 'series', 'middleware' => ['web']],function(){
            Route::get('index',['as' => 'admin.series.index','uses' => 'SeriesController@index']);
            Route::get('add',['as' => 'admin.series.add','uses' => 'SeriesController@getAdd']);
            Route::post('add',['as' => 'admin.series.add.post', 'uses' => 'SeriesController@postAdd']);
            Route::get('delete/{id}',['as' => 'admin.series.delete','uses' => 'SeriesController@getDelete']);
        });

        Route::group(['prefix' => 'seasons','middleware' => ['web']],function(){
            Route::get('index',['as' => 'admin.seasons.index','uses' => 'SeasonsController@index']);
            Route::get('add',['as' => 'admin.seasons.add','uses' => 'SeasonsController@getAdd']);
            Route::post('add',['as' => 'admin.seasons.add.post','uses' => 'SeasonsController@postAdd']);
            Route::get('delete/{id}',['as' => 'admin.seasons.delete','uses' => 'SeasonsController@getDelete']);
        });

        Route::group(['prefix' => 'parts','middleware' => ['web']],function(){
            Route::get('index',['as' => 'admin.parts.index','uses' => 'PartsController@getAdd']);
            Route::post('add',['as' => 'admin.parts.add.post','uses' => 'PartsController@postAdd']);
        });

        Route::group(['prefix' => 'step','middleware' => ['web']],function(){
            Route::get('step1',['as' => 'admin.step.step1','uses' => 'SeriesController@step1']);
            Route::get('step2season-{id}',['as' => 'admin.step.step2season','uses' => 'SeasonsController@step2season']);
            Route::get('step2parts-{id}',['as' => 'admin.step.step2parts','uses' => 'PartsController@step2parts']);
        });
    });
});

