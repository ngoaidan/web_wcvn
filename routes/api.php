<?php

use Illuminate\Http\Request;
use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users/{id}', function ($id) {
    $user = User::findOrFail($id);
    return $user;
});

Route::group(['prefix'=>'/admincp'],function(){
    Route::get('/comments','CommentController@showComment');
    //các route khác
});