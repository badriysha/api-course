<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('mentors', 'MentorController@create');
Route::put('mentors/{id}', 'MentorController@update');