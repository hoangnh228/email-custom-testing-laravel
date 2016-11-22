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

Route::get('/', function () {
    // return view('welcome');
    Mail::raw('Hello', function($message) {
        $message->to('foo@example.com');
        $message->from('bar@example.com');
    });

    return 'Email was sent';
});
