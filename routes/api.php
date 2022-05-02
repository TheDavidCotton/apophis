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

    $blurbArray = [
        'You are going to die in'
    ];
    $k = array_rand($blurbArray);
    $blurb = $blurbArray[$k];

    $flyby = Carbon::createFromFormat('YYYY-MM-DD', env('ENCOUNTER'))->format('Y-m-d');
    $date = Carbon::now()->diffInDays($flyby, false);

    return $date;
    //return response()
            //->json(['blurb' => $blurb, 'date' => $date]);

});
