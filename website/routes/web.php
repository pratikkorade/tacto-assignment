<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('project','projectscontroller');

//Route::get('/','projectcontroller@home');
//Route::get('/about','pagecontroller@about');
//Route::get('/contact','pagecontroller@contact');
Route::get('/','pagecontroller@home');
