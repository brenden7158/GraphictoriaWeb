<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis\VersionCompatibility;

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

Route::get('/', function(){
	return 'API OK';
});

// RCC Security Backbone
Route::get('/GetAllowedSecurityVersions', 'VersionCompatibility@getVersions');
Route::get('/GetAllowedSecurityKeys', 'VersionCompatibility@getVersions');
Route::get('/GetAllowedMD5Hashes', 'VersionCompatibility@getMD5Hashes');
Route::get('/GetAllowedMemHashes', 'VersionCompatibility@getMemHashes');

// Client/Launcher apis
Route::get('/GetCurrentClientVersionUpload', 'VersionCompatibility@getClientVersion');

Route::fallback(function(){
	return response('{"errors":[{"code":404,"message":"NotFound"}]}', 404)
		->header('Cache-Control', 'private')
		->header('Content-Type', 'application/json; charset=utf-8');
});