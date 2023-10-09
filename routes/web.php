<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Halaman Profil
Route::get("/profil", function(){

    return view("profil");
});


// Route dengan parameter(Wajib)

Route::get("mahasiswa/{nama}", function($nama = "Nur"){
    echo "<h1> Halo Nama Saya $nama</h1>";
});



// Route dengan parameter(Sunnah)
Route::get("mahasiswa/{nama?}", function($nama = "Nur"){
echo "<h1> Halo Nama Saya $nama</h1>";

});

// Route dengan parameter > 1
Route::get("profil/{nama?}/{perkerjaan?}", function($nama = "Nur" , $pekerjaan = "mahasiswa"){
echo "<h1> Halo Nama Saya $nama. Saya adalah $pekerjaan</h1>";

});


// Route Redirect
Route::get("/hubungi", function(){
    echo "<h1>Hubungi Kami</h1>";
});

Route::redirect("/contact", "/hubungi");

