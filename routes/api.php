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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//polls
Route::get('polls', 'PollsController@index');
Route::get('polls/{id}', 'PollsController@show');
Route::post('polls', 'PollsController@store');
Route::put('polls/{poll}', 'PollsController@update');
Route::delete('polls/{poll}', 'PollsController@delete');
Route::any('errors', 'PollsController@errors');
//questions
Route::apiResource('questions', 'QuestionController');
