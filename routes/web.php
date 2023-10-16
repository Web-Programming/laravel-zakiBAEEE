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

// Commit Ketiga


Route::get('/dosen', function(){
    return view('dosen');
});

Route::get('/dosen/index', function(){
    return view('dosen.index');
});

// Route::get('/fakultas', function(){
//     {
//     return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer Dan Rekayasa"]);
// }
// });

// Route::get('/fakultas', function(){
//     return view ('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
// });

Route::get('fakultas', function(){
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"]);

    //  return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer Dan Rekayasa", "Fakultas Ilmu Ekonomi"]);

    $kampus = "Universitas Multi Data Palembang";
     $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];
     return view('fakultas.index', compact('fakultas', 'kampus'));
});
