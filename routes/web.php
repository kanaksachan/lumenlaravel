<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It is a breeze. Simply tell Lumen the URIs it should respond to
  | and give it the Closure to call when that URI is requested.
  |
 */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->group(['prefix' => 'APi_V1'], function () use ($router) {
//$router->post('locationlisting', 'LocationController@locationListing');
//
//$router->get('user','UserController@index');
//$router->get('register','UserController@register');
//});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->get('authors', ['uses' => 'AuthorController@showAllAuthors']);

    $router->get('authors/{id}', ['uses' => 'AuthorController@showOneAuthor']);

    $router->post('locationlisting', ['uses' => 'LocationController@locationListing']);
   $router->get('locationdatalisting', ['uses' => 'LocationController@locationDataListing']);
    $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

    $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
});

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@website.com'], 404);
});

//$app->group(['prefix'=>'api/v1'], function() use($app){
//$app->get('/products', 'ProductController@index');
//$app->post('/locationlisting', 'LocationController@locationListing');
//$app->get('/product/{id}', 'ProductController@show');
//$app->put('/product/{id}', 'ProductController@update');
//$app->delete('/product/{id}', 'ProductController@destroy');
//});