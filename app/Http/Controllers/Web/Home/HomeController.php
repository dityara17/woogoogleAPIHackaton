<?php

namespace App\Http\Controllers\Web\Home;

use App\Model\Enroll;
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

    public function detailClass($id)
    {

        $detail = Kelas::where('id', '=', $id)->get();
        $kelaskonten = KelasKonten::where('id_kelas', '=', $id)->get();
        $getid = $id;
        return view('home.detailkelas', compact('detail', 'kelaskonten', 'getid'));
    }

    public function kelasKonten($kelas_id, $id)
    {

        $verifyRoll = Enroll::where('id_kelas', '=', $kelas_id)
            ->where('id_user', '=', session('user')['id'])
            ->first();

        if ($verifyRoll == null) {
            toast('Anda belum enroll kelas', 'error', 'top-right');
            return redirect(route('detailkelas', $kelas_id));
        } else {
            $detail = KelasKonten::where('id', '=', $id)->get();
            $kelaskonten = KelasKonten::where('id_kelas', '=', $kelas_id)->get();
            $getid = "Materi" . $id;
            return view('home.materi', compact('detail', 'kelaskonten', 'getid'));
        }


    }


    public function enrollClass($kelas_id)
    {
        $verifyRoll = Enroll::where('id_kelas', '=', $kelas_id)
            ->where('id_user', '=', session('user')['id'])
            ->first();

        $cekID = KelasKonten::where('id_kelas', '=', $kelas_id)
            ->orderBy('id', 'ASC')
            ->first();
        $cekid = $cekID->id;

        if ($verifyRoll == null) {

            $trans = new Enroll();
            $trans->id_kelas = $kelas_id;
            $trans->id_user = session('user')['id'];
            $trans->save();

            toast('Berhasil enroll kelas', 'success', 'top-right');

            return redirect(route('kelaskonten', ['kelas_id' => $kelas_id, $cekid]));
        } else {

            return redirect(route('kelaskonten', ['kelas_id' => $kelas_id, $cekid]));
        }

    }


    public
    function getClass($kategori_id)
    {
        $x = Kategori::where('id', '=', $kategori_id)->first();
        $nama_kategori = $x->nama;

        $list = Kelas::all()
            ->where('id_kategori', '==', $kategori_id);

        return view("home.getclass", compact('list', 'nama_kategori'));
    }

}
