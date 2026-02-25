<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;

Route::get('/',[HomePageController::class,'index']);
Route::get('/contact-us',[HomePageController::class, 'contactUs']);