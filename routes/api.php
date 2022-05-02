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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

use App\Http\Controllers\Contacts;


Route::group(['prefix' => 'v1'], function()  
{  
    
    Route::get('/balanced-brackets', [BalancedBrackets::class, 'index']);

});  


Route::group(['prefix' => 'contacts'], function()  
{  

    Route::post('/add', [Contacts::class, 'add']);
    Route::post('/update', [Contacts::class, 'update']);
    Route::post('/remove', [Contacts::class, 'remove']);
    Route::post('/list', [Contacts::class, 'list']);

});  