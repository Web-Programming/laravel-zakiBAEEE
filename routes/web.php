<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

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
Route::get("/profil", function () {

    return view("profil");
});


// Route dengan parameter(Wajib)

// Route::get("mahasiswa/{nama}", function($nama = "Nur"){
//     echo "<h1> Halo Nama Saya $nama</h1>";
// });



// Route dengan parameter(Sunnah)
// Route::get("mahasiswa/{nama?}", function($nama = "Nur"){
// echo "<h1> Halo Nama Saya $nama</h1>";

// });

// Route dengan parameter > 1
Route::get("profil/{nama?}/{perkerjaan?}", function ($nama = "Nur", $pekerjaan = "mahasiswa") {
    echo "<h1> Halo Nama Saya $nama. Saya adalah $pekerjaan</h1>";
});


// Route Redirect
Route::get("/hubungi", function () {
    echo "<h1>Hubungi Kami</h1>";
});

Route::redirect("/contact", "/hubungi");

// Commit Ketiga


Route::get('/dosen', function () {
    return view('dosen');
});

Route::get('/dosen/index', function () {
    return view('dosen.index');
});

// Route::get('/fakultas', function(){
//     {
//     return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
// }
// });

// Route::get('/fakultas', function(){
//     return view ('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]]);
// });

Route::get('fakultas', function () {
    // return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);

    //  return view('fakultas.index')->with("fakultas", ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"]);

    $kampus = "Universitas Multi Data Palembang";
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ekonomi dan Bisnis"];
    return view('fakultas.index', compact('fakultas', 'kampus'));
});


Route::get('/prodi', [ProdiController::class, 'index']);

Route::resource("/kurikulum", KurikulumController::class);

Route::apiResource("/dosen", DosenController::class);



Route::get('/mahasiswa/insert-elq', [MahasiswaController::class, "insertElq"]);
Route::get("/mahasiswa/update-elq", [MahasiswaController::class, "updateElq"]);
Route::get("/mahasiswa/delete-elq", [MahasiswaController::class, "deleteElq"]);
Route::get("/mahasiswa/select-elq", [MahasiswaController::class, "selectElq"]);


Route::get('/prodi/all-join-facade', [ProdiController::class, "allJoinFacade"]);

// ......



Route::get('/prodi/create', [ProdiController::class, 'create']);
Route::get('/prodi/store', [ProdiController::class, 'store']);

Route::get('prodi/join-elq', [ProdiController::class, 'allJoinElq']);


// ROUTE UNTUK PROSES READ
Route::get('/prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('/prodi/{id}', [ProdiController::class, 'show'])->name('prodi.show');

//ROUTE UNTUK PROSES UPDATE
Route::get('/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::patch('/prodi/{prodi}', [
    ProdiController::class, 'update'
])->name('prodi.update');


