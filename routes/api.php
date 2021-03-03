<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/delear/submit', 'App\Http\Controllers\ContactController@mail_sender');
