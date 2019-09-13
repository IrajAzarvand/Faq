<?php

namespace iraj\faq;

use Illuminate\Support\Facades\Route;
use iraj\faq\Http\Controllers\FaqController;


Route::get('/faq/faqAdmin', 'iraj\faq\Http\Controllers\FaqController@list');
Route::resource('faq', FaqController::class);
