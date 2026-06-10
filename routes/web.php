<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Http;


Route::get('/', [BookController::class,'home']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

// Admin
Route::get('/admin/login', [AdminController::class, 'loginForm']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin/books', [BookController::class, 'adminIndex']);

Route::get('/admin/books/create', [BookController::class, 'create']);
Route::post('/admin/books/store', [BookController::class, 'store']);

Route::get('/admin/books/edit/{id}', [BookController::class, 'edit']);
Route::post('/admin/books/update/{id}', [BookController::class, 'update']);

Route::get('/admin/books/delete/{id}', [BookController::class, 'delete']);

// API
Route::get('/api-books', [BookController::class, 'apiBooks']);