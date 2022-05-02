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

    $diffArray = array();

    $date_diff = Carbon::now()->diffInDays($flyby, false);
    array_push($diff, $date_diff . 'days');

    $hours_diff = Carbon::now()->diffInHours($flyby, false);
    array_push($diff, $hours_diff  . 'hours');

    $Minutesdiff = Carbon::now()->diffInMinutes($flyby, false);
    array_push($diff, $Minutesdiff  . 'minutes');

    $seconddiff = Carbon::now()->DiffInSeconds($flyby, false);
    array_push($diff, $seconddiff  . 'seconds');

    $k = array_rand($diffArray);
    $diff = $diffArray[$k];

    return $diff;
    //return response()
            //->json(['blurb' => $blurb, 'date' => $date]);

});
