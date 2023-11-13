<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    public function index()
    {
        $kampus = "Universitas Multi Data Palembang";
        return view('prodi.index')->with('kampus', $kampus);
    }

    public function allJoinFacade()
    {
        $kampus = 'Universitas Multi Data Palembang';
        $result = DB::select('select mahasiswas.*, prodis.nama as nama_prodi from prodis, mahasiswas where prodis.id = mahasiswas.prodi_id');

        return view('prodi.index', ['allMahasiswaProdi' => $result, 'kampus' => $kampus]);
    }


    public function allJoinElq()
    {
        $prodis = Prodi::with('Mahasiswas')->get();
        foreach ($prodis as $prodi) {
            echo "<h3>{$prodi->nama}</h3>";
            echo "<hr>Mahasiswa: ";
            foreach ($prodi->mahasiswas as $mhs) {
                echo $mhs->nama . " ";
            }

            echo "<hr>";
        }
    }

    public function create()
    {
        return view('prodi.create');
    }

    public function store(Request $request){
        //dump($request);
        //echo $request->nama;
        $validateData = $request->validate([
            'nama'=> 'required|min:5|max:20',
        ]);
        // dump($validateData);
        // echo $validateData['nama'];

        $prodi = new Prodi();
        $prodi->nama = $validateData['nama'];
        $prodi->save();
        $request()->session()->flash('info', "Data Prodi $prodi->nama Berhasil Disimpan ke Database" );
        return redirect()->route('prodi.create');
        
    }
}
