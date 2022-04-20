<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/posts', 'Api\PostController@index');

Route::get('/posts/{slug}', 'Api\PostController@show');