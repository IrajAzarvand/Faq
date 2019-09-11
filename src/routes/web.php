<?php

namespace iraj\faq;

use Illuminate\Support\Facades\Route;
use iraj\faq\Http\Controllers\FaqController;

Route::resource('faq', FaqController::class);