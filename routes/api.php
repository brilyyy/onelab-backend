<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TestController;
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

Route::middleware(['prefix' => 'api'])->group(function () {
    Route::post('/auth/register', [AuthController::class, 'register']);
    Route::post('/auth/login', [AuthController::class, 'login']);
    Route::group(['middleware' => ['auth:api']], function () {
        Route::post('/auth/logout', [AuthController::class, 'logout']);
        Route::get('/auth/me', [AuthController::class, 'me']);

        // Patient Route
        Route::post('/patients', [PatientController::class, 'store']);
        Route::get('/patients', [PatientController::class, 'index']);
        Route::get('/patients/{id}', [PatientController::class, 'show']);
        Route::put('/patients/{id}', [PatientController::class, 'update']);
        Route::delete('/patients/{id}', [PatientController::class, 'destroy']);

        // Test Route
        Route::post('/tests', [TestController::class, 'store']);
        Route::get('/tests', [TestController::class, 'index']);
        Route::get('/tests/{id}', [TestController::class, 'show']);
        Route::put('/tests/{id}', [TestController::class, 'update']);
        Route::delete('/tests/{id}', [TestController::class, 'destroy']);

        // Examination Route
        Route::post('/examinations', [ExaminationController::class, 'store']);
        Route::get('/examinations', [ExaminationController::class, 'index']);
        Route::get('/examinations/{id}', [ExaminationController::class, 'show']);
        Route::put('/examinations/{id}', [ExaminationController::class, 'update']);
        Route::delete('/examinations/{id}', [ExaminationController::class, 'destroy']);
    });
});
