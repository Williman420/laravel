<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MyController extends Controller
{
    public function index()
    {
        return "ini blog saya";
    }

    public function show($id)
    {
        $nilai = $id;
        $nama = 'williman';
        // $hobbies = ['game', 'sleep', 'eat'];
        $hobbies =DB::table('users') -> get('hobi');

        return view('blog/profile', [
            'nomor' => $nilai,
            'nama' => $nama,
            'hobi' => $hobbies,
            // 'hobbies' => $hobbies
        ]);

        // return $id;  
    }

    public function dataDiri()
    {
        $name = "nama saya";
        $umur = 17;
        $alamat = "Tabanan";
        return view('blog/profile', [
            'name' => $name,
            'umur' => $umur,
            'alamat' => $alamat
        ]);
    }
}