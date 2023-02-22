<?php

use App\Http\Controllers\Api\V1\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('v1')->group(function () {


    Route::group(["middleware" => "Auth.BasicApi"], function () {
        Route::post('student', [StudentsController::class, 'create_user']);
        Route::get('students/date-admission', [StudentsController::class, 'search_date']);
        Route::get('students/card', [StudentsController::class, 'search_card']);
        Route::get('students/grade', [StudentsController::class, 'search_grade']);
        //Rutas

    });
});
