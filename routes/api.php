<?php

use Illuminate\Http\Request;
use App\Http\Resources\Chatter_categoriesResource;
use App\Chatter_categories;
use App\Http\Resources\UserResource;
use App\User;
use App\Http\Resources\CategorieResource;
use App\Categorie;
use App\Http\Resources\Chatter_discussionResource;
use App\Chatter_discussion;
use App\Http\Resources\Chatter_postResource;
use App\Chatter_post;
use App\Http\Resources\Chatter_user_discussionResource;
use App\Chatter_user_discussion;
use App\Http\Resources\ClientResource;
use App\Client;
use App\Http\Resources\EmployeResource;
use App\Employe;
use App\Http\Resources\RequeteResource;
use App\Requete;
use App\Http\Resources\ServiceResource;
use App\Service;


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



//////////User
Route::get('/user/{user}', function(User $user) {
    return new Chatter_categoriesResource($user);
});

Route::get('/user', function() {
    return new UserResource(User::all());
});
Route::post('/user', 'UserController@apistore');



Route::put('/user', 'UserController@apistore');


Route::delete('/user/{id}', 'UserController@apidestroy');

//////////Categorie
Route::get('/categorie/{Categorie}', function(Categorie $Categorie) {
    return new Chatter_categoriesResource($Categorie);
});

Route::get('/categorie', function() {
    return new CategorieResource(Categorie::all());
});
Route::post('/categorie', 'CategorieController@apistore');



Route::put('/categorie', 'CategorieController@apistore');


Route::delete('/categorie/{id}', 'CategorieController@apidestroy');

//////////Chatter_discussion
Route::get('/chatter_discussion/{Chatter_discussion}', function(Chatter_discussion $Chatter_discussion) {
    return new Chatter_categoriesResource($Chatter_discussion);
});

Route::get('/chatter_discussion', function() {
    return new Chatter_discussionResource(Chatter_discussion::all());
});
Route::post('/chatter_discussion', 'Chatter_discussionController@apistore');



Route::put('/chatter_discussion', 'Chatter_discussionController@apistore');


Route::delete('/Chatter_discussion/{id}', 'Chatter_discussionController@apidestroy');


//////////Chatter_post
Route::get('/chatter_post/{Chatter_post}', function(Chatter_post $Chatter_post) {
    return new Chatter_categoriesResource($Chatter_post);
});

Route::get('/chatter_post', function() {
    return new Chatter_postResource(Chatter_post::all());
});
Route::post('/chatter_post', 'Chatter_postController@apistore');



Route::put('/chatter_post', 'Chatter_postController@apistore');


Route::delete('/chatter_post/{id}', 'Chatter_postController@apidestroy');

//////////Chatter_user_discussion
Route::get('/chatter_user_discussion/{Chatter_user_discussion}', function(Chatter_user_discussion $Chatter_user_discussion) {
    return new Chatter_categoriesResource($Chatter_user_discussion);
});

Route::get('/chatter_user_discussion', function() {
    return new Chatter_user_discussionResource(Chatter_user_discussion::all());
});
Route::post('/chatter_user_discussion', 'Chatter_user_discussionController@apistore');



Route::put('/chatter_user_discussion', 'Chatter_user_discussionController@apistore');


Route::delete('/chatter_user_discussion/{id}', 'Chatter_user_discussionController@apidestroy');

//////////Client
Route::get('/client/{Client}', function(Client $Client) {
    return new Chatter_categoriesResource($Client);
});

Route::get('/client', function() {
    return new ClientResource(Client::all());
});
Route::post('/client', 'ClientController@apistore');



Route::put('/client', 'ClientController@apistore');


Route::delete('/client/{id}', 'ClientController@apidestroy');

//////////Employe
Route::get('/employe/{Employe}', function(Employe $Employe) {
    return new Chatter_categoriesResource($Employe);
});

Route::get('/employe', function() {
    return new EmployeResource(Employe::all());
});
Route::post('/employe', 'EmployeController@apistore');



Route::put('/employe', 'EmployeController@apistore');


Route::delete('/employe/{id}', 'EmployeController@apidestroy');

//////////Requete
Route::get('/requete/{Requete}', function(Requete $Requete) {
    return new Chatter_categoriesResource($Requete);
});

Route::get('/requete', function() {
    return new RequeteResource(Requete::all());
});
Route::post('/requete', 'RequeteController@apistore');



Route::put('/requete', 'RequeteController@apistore');


Route::delete('/requete/{id}', 'RequeteController@apidestroy');

//////////Service
Route::get('/service/{Service}', function(Service $Service) {
    return new Chatter_categoriesResource($Service);
});

Route::get('/service', function() {
    return new ServiceResource(Service::all());
});
Route::post('/service', 'ServiceController@apistore');



Route::put('/service', 'ServiceController@apistore');


Route::delete('/service/{id}', 'ServiceController@apidestroy');

//Route::post('login', 'APIUserController@login');
//Route::post('register', 'APIUserController@register');


Route::group([
    'middleware' => 'api',
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');
});