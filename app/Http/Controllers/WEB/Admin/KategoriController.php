<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Model\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    public function index()
    {
        $categories = Kategori::orderBy('id', 'desc')
            ->paginate('15');
        return view('admin.kategori.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->desc;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $fullName = $image->getClientOriginalName();
            $n = explode('.', $fullName)[0];
            $name = $n . "-" . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/kategori');
            $image->move($destinationPath, $name);
            $kategori->gambar = $name;
        }
        $kategori->save();
        return redirect()->to('app/admin/kategori')->with('success', 'Berhasil menambah kategori');
    }

    public function edit($id)
    {
        $cat = Kategori::find($id);
        return view('admin.kategori.edit', compact('cat'));
    }

    public function update($id, Request $request)
    {
        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->desc;
        if (!empty($request->gambar)){
            if ($request->hasFile('gambar')) {
                $image = $request->file('gambar');
                $fullName = $image->getClientOriginalName();
                $n = explode('.', $fullName)[0];
                $name = $n . "-" . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/images/kategori');
                $image->move($destinationPath, $name);
                $kategori->gambar = $name;
            }
        }
        $kategori->save();
        return redirect()->to('app/admin/kategori')->with('success', 'Berhasil mengubah kategori');
    }

    public function destroy($id){
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect()->to('app/admin/kategori')->with('success', 'Berhasil menghapus kategori');
    }
}
