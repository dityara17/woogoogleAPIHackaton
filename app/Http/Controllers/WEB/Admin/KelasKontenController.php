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

    public function edit($kelas_id,$materi_id){
        $kelas = Kelas::find($kelas_id);
        $materi = KelasKonten::find($materi_id);
        return view('admin.materi.edit',compact('kelas','materi'));
    }

    public function update($kelas_id,Request $request,$materi_id){
        $materi = KelasKonten::find($materi_id);
        $materi->nama = $request->nama;
        $materi->konten = $request->isi;
        $materi->id_kelas = $kelas_id;
        $materi->save();
        return redirect()->to('app/admin/kelas/'.$kelas_id.'/materi')->with('success','Berhasil mengubah materi');
    }
    public function destroy($kelas_id,$materi_id){
        $materi = KelasKonten::find($materi_id);
        $materi->delete();
        return redirect()->to('app/admin/kelas/'.$kelas_id.'/materi')->with('success','Berhasil menghapus materi');
    }

}
