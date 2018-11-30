<?php

namespace App\Http\Controllers\Web\Home;

use App\Model\Kategori;
use App\Model\Kelas;
use App\Http\Controllers\Controller;
use App\Model\KelasKonten;

class HomeController extends Controller
{


    public function index()
    {
        $list = Kelas::all()->take(3);

        return view("home.index", compact('list'));
    }

    public function course()
    {
        $list = Kategori::all();

        return view("home.course", compact('list'));
    }

    public function detailClass( $id)
    {

        $detail = Kelas::where('id', '=', $id)->get();
        $kelaskonten = KelasKonten::where('id_kelas', '=', $id)->get();
        $getid = $id;
        return view('home.detailkelas', compact('detail', 'kelaskonten', 'getid'));
    }

    public function kelasKonten($kelas_id, $id)
    {
        $detail = KelasKonten::where('id', '=', $id)->get();
        $kelaskonten = KelasKonten::where('id_kelas', '=', $kelas_id)->get();
        $getid = "Materi".$id;
        return view('home.materi', compact('detail', 'kelaskonten', 'getid'));


    }

    public function getClass($kategori_id)
    {
        $x = Kategori::where('id', '=', $kategori_id)->first();
        $nama_kategori = $x->nama;

        $list = Kelas::all()
            ->where('id_kategori', '==', $kategori_id);

        return view("home.getclass", compact('list', 'nama_kategori'));
    }

}
