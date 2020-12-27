<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('mentors', 'MentorController@index');
Route::get('mentors/{id}', 'MentorController@show');
Route::post('mentors', 'MentorController@create');
Route::put('mentors/{id}', 'MentorController@update');
Route::post('mentors/{id}', 'MentorController@destroy');