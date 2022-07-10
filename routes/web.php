<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;

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
    return view('welcome');
});

Route::get('send-email', function(){
    $mailData=[
        "name" => "Test Name",
        "dob" => "12/12/1990"
    ];

    Mail::to("tonglim88@gmail.com")->send(new TestEmail($mailData));

    dd("Mail Sent Successfully!");
});
