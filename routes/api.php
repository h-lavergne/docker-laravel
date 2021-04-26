<?php

use App\Models\SpaceWeed;
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

Route::get('/', function (Request $request) {
    return "y'a r on deal pas ici circulez";
});

Route::get('/weeds', function (Request $request) {
    return SpaceWeed::all();
});

Route::get('/weeds/delete/{id}', function(Request $request, $id) {
    $weed = SpaceWeed::find($id);
    $weed->delete();
    return "c bon c supprimé chakal";
});
