<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\VenueController;
use App\Http\Controllers\API\TicketController;
use App\Http\Controllers\API\AuthController;


Route::post('register', [UserController::class, 'register']);

Route::post('login', [UserController::class, 'login']);

// Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('profile', [UserController::class, 'profile']);
    Route::put('profile', [UserController::class, 'updateProfile']);
    Route::apiResource('events', EventController::class);
    Route::apiResource('venues', VenueController::class);
    Route::apiResource('tickets', TicketController::class);
    Route::post('tickets/book', [TicketController::class, 'book']);
    Route::get('user/bookings', [TicketController::class, 'myBookings']);
});


