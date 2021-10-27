<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/user/login-twitter', 'UserAuthController@loginByTwitter');

Route::get('/twitter/time-line', 'TwitterController@getTimeLine');
Route::post('/twitter/post', 'TwitterController@addPost');
Route::post('/twitter/reply', 'TwitterController@addRply');
Route::post('/twitter/retweet', 'TwitterController@addRetweet');
Route::post('/twitter/star', 'TwitterController@addStar');
Route::post('/twitter/thread', 'TwitterController@addThread');


/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
