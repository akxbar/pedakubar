<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasukController;




//route with controller

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/pengumuman', [HomeController::class, 'pengumuman'])->name('pengumuman');

Route::get('/login', [MasukController::class, 'login'])->name('login');
Route::post('/login', [MasukController::class, 'authenticate'])->name('auth.authenticate');
Route::post('/logout', [MasukController::class, 'lgout'])->name('auth.logout');



Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');


//




// Route::get('/', function () {
//     return view('frontend.index');
// })->name(name: 'index');

//login
// Route::get('/login', function () {
//     return view('frontend.login');
// })->name(name: 'login');


// Route::get('/beranda', function () {
//     return view('frontend.beranda');
// })->name(name: 'beranda');

Route::get('/event', function () {
    return view('frontend.event.event');
})->name(name: 'event');

// Route::get('/pengumuman', function () {
//     return view('frontend.pengumuman.pengumuman');
// })->name(name: 'pengumuman');

Route::get('/pemondokan', function () {
    return view('frontend.pemondokan.pemondokan');
})->name(name: 'pemondokan');

Route::get('/direktori', function () {
    return view('frontend.direktori.direktori');
})->name(name: 'direktori');


//halaman
Route::get('/sambutan', function () {
    return view('frontend.sambutan');
})->name(name: 'sambutan');

Route::get('/tatib', function () {
    return view('frontend.tatib');
})->name(name: 'tatib');

Route::get('/profilkeg', function () {
    return view('frontend.profilkeg');
})->name(name: 'profilkeg');

Route::get('/daftarberita', function () {
    return view('frontend.daftarberita');
})->name(name: 'daftarberita');

Route::get('/berita', function () {
    return view('frontend.berita');
})->name(name: 'berita');

Route::get('/foto', function () {
    return view('frontend.foto');
})->name(name: 'foto');
<<<<<<< HEAD

Route::get('/evendetail', function () {
    return view('frontend.evendetail');
})->name(name: 'evendetail');
=======
>>>>>>> 5801315004f7bdaac8951b008c287fed4bd284fe
