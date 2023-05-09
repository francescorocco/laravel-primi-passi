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

    $hello = 'Hello World';

    $personal_salute = "Hello from";
    $class_number = 87;
    $personal_name ="Francesco";
    $personal_lastname = "Rocco";
    
    $data = [
        "hello" => $hello,
        "personal_salute" => $personal_salute,
        "class_number" => $class_number,
        "personal_name" => $personal_name,
        "personal_lastname" => $personal_lastname	
    ];
    


    return view('home', $data);
})->name('home');

Route::get('goodbye', function () {
    
    $personal_name ="Francesco";
    $personal_lastname = "Rocco";
    $class_number = 87;

    
    $data = [
        "personal_name" => $personal_name,
        "personal_lastname" => $personal_lastname,
        "class_number" => $class_number
    ];
    return view('goodbye', $data);
})->name('goodbye');
