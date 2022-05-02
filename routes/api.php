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

    $flyby = Carbon::createFromFormat('YYYY-MM-DD', env('ENCOUNTER'))->format('Y-m-d');

    return $flyby;
    //return response()
            //->json(['blurb' => $blurb, 'date' => $date]);

});
