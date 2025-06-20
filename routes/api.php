<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Define API routes for BookController

Route::apiResource('books', BookController::class);

