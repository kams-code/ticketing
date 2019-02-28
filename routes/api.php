<?php

use Illuminate\Http\Request;
use App\Http\Resources\Chatter_categoriesResource;
use App\Chatter_categories;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/chatter_categories/{chatter_categories}', function(Chatter_categories $chatter_categories) {
    return new Chatter_categoriesResource($chatter_categories);
});

Route::get('/chatter_categories', function() {
    return new Chatter_categoriesResource(Chatter_categories::all());
});