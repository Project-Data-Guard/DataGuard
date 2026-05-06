<?php

use App\Http\Controllers\EbookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ebook/{id}', [EbookController::class, 'show'])->name('ebook.show');
Route::get('/ebook/{id}/read', [EbookController::class, 'read'])->name('ebook.read');
