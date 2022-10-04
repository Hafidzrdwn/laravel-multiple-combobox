<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all('id', 'nama');
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        $absen = Absen::all();

        return view('welcome', compact('siswa', 'jurusan', 'kelas', 'absen'));
    }

    public function getDataSiswa($id)
    {
        $siswa = Siswa::find($id);
        return response()->json($siswa);
    }

    public function showTableSiswa($id)
    {
        $siswa = Siswa::where('id', $id)->with('kelas', 'jurusan', 'absen')->get();

        return view('ajax', compact('siswa'));
    }
}
