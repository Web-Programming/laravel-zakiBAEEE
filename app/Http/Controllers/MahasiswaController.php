<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insertElq(){
        // Single Assigment
        $mhs = new Mahasiswa();
        $mhs-> nama = "zaki";
        $mhs-> npm = "2226250100";
        $mhs-> tempat_lahir = "Somalia";
        $mhs-> tanggal_lahir = date("Y-m-d"); // tanggal hari ini
        $mhs-> save();
        dump($mhs);

        // Mass Assignment
        // $mhs = Mahasiswa::insert(['nama' => 'Zaki', 'npm' => '2226250100', 'tempat_lahir => Somalia', 'tanggal_lahir' =>
        // date('Y-m-d')]);

     dump($mhs);
    }



    public function updateElq(){
        $mahasiswa = Mahasiswa::where('npm', '2226250100')->first();
        $mahasiswa  -> nama_mahasiswa = "Udin Bebek";
        $mahasiswa -> save();
    }

    public function deleteElq(){
        $mahasiswa = Mahasiswa::where('npm', '2226250100');
        $mahasiswa->delete();
    }

    public function selectElq(){
        $kampus = "Universitas Sriwijaya";
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index', ['allMahasiswa' => $mahasiswa, 'kampus' => $kampus]);
    }

    public function allJoinElq(){
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswas = Mahasiswa::has('prodi')->get();
        return view('mahasiswa.index', )
    }


}
