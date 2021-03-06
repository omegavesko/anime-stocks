<?php

use Illuminate\Http\Request;

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

Route::get('/anime', 'ApiController@getAnimeList');
Route::get('/anime/{anime}', 'ApiController@getAnime');
Route::get('/anime/{anime}/history', 'ApiController@getSnapshotsForAnime');
Route::get('/anime/{anime}/episodes', 'ApiController@getEpisodesForAnime');
Route::get('/stats', 'ApiController@getStats');
Route::get('/counts', 'ApiController@getAnimeCounts');