<?php

namespace App\Http\Controllers\API;

use App\Model\Kategori;
use App\Http\Controllers\Controller;
use App\Model\Kelas;
use App\Model\KelasKonten;
use Illuminate\Http\Request;
use Validator;

class ApiController extends Controller
{
    private $validatedData;

    public function getLearningPath()
    {
        $list = Kategori::all();
        $listall = array();

        foreach ($list as $l) {
            $listall[] = [
                'id_learning' => $l->id,
                'name_learning' => $l->nama,
                'image_path' => $l->gambar,
                'description' => $l->deskripsi
            ];
        }

        return response()->json($listall);


    }

    public function searchLearningPath(Request $request)
    {

        $this->validatedData = Validator::make($request->all(), [
            'query' => 'required',
        ]);

        $tid = $request['query'];

        $list = Kategori::where('nama', 'LIKE', "%$tid%")->get();
        $listall = array();

        foreach ($list as $l) {
            $listall[] = [
                'id_learning' => $l->id,
                'name_learning' => $l->nama,
                'image_path' => $l->gambar,
                'description' => $l->deskripsi
            ];
        }

        if ($tid == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            return response()->json($listall);
        }


    }

    public function searchClass(Request $request)
    {

        $this->validatedData = Validator::make($request->all(), [
            'query' => 'required',
        ]);

        $tid = $request['query'];

        $list = Kelas::where('nama_kelas', 'LIKE', "%$tid%")->get();
        $listall = array();

        foreach ($list as $l) {
            $listall[] = [
                'id_class' => $l->id,
                'id_learning' => $l->id_kategori,
                'name_class' => $l->nama_kelas,
                'image_path' => $l->gambar,
                'description' => $l->deskripsi
            ];
        }

        if ($tid == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            return response()->json($listall);
        }


    }

    public function getAllClass()
    {
        $list = Kelas::all();
        $x = array();

        foreach ($list as $l) {
            $x[] = [
                'id_class' => $l->id,
                'id_learning' => $l->id_kategori,
                'name_class' => $l->nama_kelas,
                'description' => $l->deskripsi,
                'image_path' => $l->gambar

            ];
        }

        return response()->json($x);


    }

    public function getClass($id_learning)
    {

        $list = Kelas::all()
            ->where('id_kategori', '==', $id_learning);
        $listall = array();

        foreach ($list as $l) {
            $listall[] = [
                'id_learning' => $l->id,
                'name_class' => $l->nama_kelas,
                'image_path' => $l->gambar,
                'description' => $l->deskripsi
            ];
        }

        if ($id_learning == null) {
            return response()->json(['error' => 'id_learning required']);
        } else {
            return response()->json($listall);
        }
    }

    public function getCourse($id_class)
    {

        $list = KelasKonten::all()
            ->where('id_kelas', '==', $id_class);
        $listall = array();

        foreach ($list as $l) {
            $listall[] = [
                'id_course' => $l->id,
                'title' => $l->nama

            ];
        }

        if ($id_class == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            return response()->json($listall);
        }
    }


    public function detailKelas($id_class)
    {


        if ($id_class == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            $list = Kelas::where('id', '=', $id_class)->first();

            $listall = array(
                'id_class' => $list->id,
                'name_class' => $list->nama_kelas,
                'image_path' => $list->gambar,
                'description' => $list->deskripsi

            );
            return response()->json($listall);
        }
    }

    public function detailCourse($id_course)
    {


        if ($id_course == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            $list = KelasKonten::where('id', '=', $id_course)->first();

            $listall = array(
                'id_course' => $list->id,
                'title' => $list->nama,
                'content' => $list->konten

            );
            return response()->json($listall);
        }
    }
}
