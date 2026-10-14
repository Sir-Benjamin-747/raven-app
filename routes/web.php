<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
         //routename,controllername,     functionname,    navname
Route::get ('/', [HomeController::class, 'index'])->name('index');
Route::get ('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get ('/contact-list', [ContactController::class, 'contactList'])->name('contact-list');
Route::post ('/store', [ContactController::class, 'store'])->name('contact.store');

