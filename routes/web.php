<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebinarController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/webinars');
});

Route::resource('webinars', WebinarController::class)->names([
        'index' => 'webinar.index',
        'create' => 'webinar.create',
        'store' => 'webinar.store',
        'edit' => 'webinar.edit',
        'show' => 'webinar.show',
        'update' => 'webinar.update',
        'destroy' => 'webinar.destroy',
]);
