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

    \Mail::to('admin@rioanugrah.my.id')
        ->send(new \App\Mail\ContactPerson($details));

    return response()->json([
        'success' => true,
        'message_title' => 'Berhasil',
        'message_content' => 'Terimakasih telah menghubungi kami'
    ]);
})->name('send-mail');

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('send-mail', [App\Http\Controllers\ContactPersonController::class, 'send_mail'])->name('send-mail');
