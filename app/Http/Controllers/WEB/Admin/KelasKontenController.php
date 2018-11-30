<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Model\Kelas;
use App\Model\KelasKonten;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasKontenController extends Controller
{
    public function index($id)
    {
        $kelas = Kelas::find($id);
        $materi = KelasKonten::where('id_kelas', $id)->orderBy('id', 'asc')->get();
        return view('admin.materi.index', compact('kelas', 'materi'));
    }

    public function insert($kelas_id)
    {
        $kelas = Kelas::find($kelas_id);
        return view('admin.materi.add', compact('kelas'));
    }
    public function store($id,Request $request){
        $materi = new KelasKonten();
        $materi->nama = $request->nama;
        $materi->konten = $request->isi;
        $materi->id_kelas = $id;
        $materi->save();
        return redirect()->to('app/admin/kelas/'.$id.'/materi')->with('success','Berhasil menambah materi baru');
    }

}
