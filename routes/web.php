<?php

use App\Http\Controllers\ContactMessagesController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'https://project-407.com', 301)->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
});

Route::post('contact', [ContactMessagesController::class, 'post'])->name('contact');

require __DIR__.'/settings.php';
