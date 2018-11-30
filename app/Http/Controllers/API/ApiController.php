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

    public function getAllClass()
    {
        $list = Kelas::all();
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

        return response()->json($listall);


    }

    public function getClass(Request $request)
    {

        $this->validatedData = Validator::make($request->all(), [
            'id_learning' => 'required',
        ]);

        $tid = $request['id_learning'];
        $list = Kelas::all()
            ->where('id_kategori', '==', $tid);
        $listall = array();

        foreach ($list as $l) {
            $listall[] = [
                'id_learning' => $l->id,
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

    public function getCourse(Request $request)
    {

        $this->validatedData = Validator::make($request->all(), [
            'id_class' => 'required',
        ]);

        $tid = $request['id_class'];
        $list = KelasKonten::all()
            ->where('id_kelas', '==', $tid);
        $listall = array();

        foreach ($list as $l) {
            $listall[] = [
                'id_course' => $l->id,
                'title' => $l->nama

            ];
        }

        if ($tid == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            return response()->json($listall);
        }
    }


    public function detailKelas(Request $request)
    {

        $this->validatedData = Validator::make($request->all(), [
            'id_class' => 'required',
        ]);

        $tid = $request['id_class'];


        if ($tid == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            $list = Kelas::where('id', '=', $tid)->first();

            $listall = array(
                'id_class' => $list->id,
                'name_class' => $list->nama_kelas,
                'image_path' => $list->gambar,
                'description' => $list->deskripsi

            );
            return response()->json($listall);
        }
    }

    public function detailCourse(Request $request)
    {

        $this->validatedData = Validator::make($request->all(), [
            'id_course' => 'required',
        ]);

        $tid = $request['id_course'];


        if ($tid == null) {
            return response()->json(['error' => $this->validatedData->errors()], 401);
        } else {
            $list = KelasKonten::where('id', '=', $tid)->first();

            $listall = array(
                'id_course' => $list->id,
                'title' => $list->nama,
                'content' => $list->konten

            );
            return response()->json($listall);
        }
    }
}
