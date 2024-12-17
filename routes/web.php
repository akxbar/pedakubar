<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.index');
})->name(name: 'index');

Route::get('/beranda', function () {
    return view('frontend.beranda');
})->name(name: 'beranda');

Route::get('/event', function () {
    return view('frontend.event.event');
})->name(name: 'event');

Route::get('/pengumuman', function () {
    return view('frontend.pengumuman.pengumuman');
})->name(name: 'pengumuman');

Route::get('/pemondokan', function () {
    return view('frontend.pemondokan.pemondokan');
})->name(name: 'pemondokan');

Route::get('/direktori', function () {
    return view('frontend.direktori.direktori');
})->name(name: 'direktori');