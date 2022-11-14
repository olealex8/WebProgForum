<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main route
// Route::get('/', function () {
//     return view('index-main');
// });

Route::get('/', [EventController::class, 'index'])
    ->name('HomePage');

// Route to event.blade.php page
Route::get('/event', function () {
    return view('event');
});
