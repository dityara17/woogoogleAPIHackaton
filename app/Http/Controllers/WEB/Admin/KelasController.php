<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Model\Kategori;
use App\Model\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelasController extends Controller
{


    public function index()
    {
        $kelas = Kelas::orderBy('id', 'desc')
            ->paginate('20');
        return view('admin.kelas.index', compact('kelas'));
    }

    public function insert()
    {
        $cats = Kategori::all();
        return view('admin.kelas.add', compact('cats'));
    }

    public function store(Request $request)
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->nama;
        $kelas->id_kategori = $request->kategori;
        $kelas->deskripsi = $request->desc;
        $kelas->author = Session('user')['id'];
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $fullName = $image->getClientOriginalName();
            $n = explode('.', $fullName)[0];
            $name = $n . "-" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/kelas');
            $image->move($destinationPath, $name);
            $kelas->gambar = $name;
        }
        $kelas->save();
        return redirect()->to('app/admin/kelas')->with('success', 'Berhasil menambah kelas');
    }

    public function edit($id)
    {
        $cats = Kategori::all();
        $kelas = Kelas::find($id);
        return view('admin.kelas.edit', compact('kelas', 'cats'));
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->nama_kelas = $request->nama;
        $kelas->id_kategori = $request->kategori;
        $kelas->deskripsi = $request->desc;
//        $kelas->author = Session('user')['id'];
        if (!empty($request->gambar)) {
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $fullName = $image->getClientOriginalName();
                $n = explode('.', $fullName)[0];
                $name = $n . "-" . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/kelas');
                $image->move($destinationPath, $name);
                $kelas->gambar = $name;
            }
        }
        $kelas->save();
        return redirect()->to('app/admin/kelas')->with('success', 'Berhasil mengubah kelas');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->to('app/admin/kelas')->with('success', 'Berhasil menghapus kelas');
    }
}
