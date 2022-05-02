<?php

use Carbon\Carbon;
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

Route::get('/apophis', function (Request $request) {
    //header('Content-Type: application/json');

    $flyby = Carbon::createFromFormat('Y-m-d', env('ENCOUNTER'));
    $date = Carbon::now()->diffInDays($flyby, false);
    return $date;
    //return response()
            //->json(['blurb' => $blurb, 'date' => $date]);

});
