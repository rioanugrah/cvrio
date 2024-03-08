<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.cv.master');
});

Route::get('send-mail', function () {

    $details = [
        'name' => 'Rio Anugrah',
        'email' => 'rioanugrah999@gmail.com',
        'subject' => 'Rekruitment',
        'message' => 'Halo, kami dari ..... untuk menawarkan pekerjaan untuk Anda.',
    ];

    \Mail::to('rioanugrah@rioanugrah.my.id')
        ->send(new \App\Mail\ContactPerson($details));

    dd("Email is Sent.");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
