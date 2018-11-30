<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Model\Enroll;
use App\Model\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnrollController extends Controller
{
    public function index($id_kelas){
        $kelas = Kelas::find($id_kelas);
        $enroll = Enroll::where('id_kelas',$id_kelas)
            ->orderBy('id','desc')
            ->paginate('20');
        $enrollMen = Enroll::where('id_kelas',$id_kelas)
            ->whereHas("getUser",function ($q){
                $q->where('sex',1);
            })
            ->get();
        $enrollWomen = Enroll::where('id_kelas',$id_kelas)
            ->whereHas("getUser",function ($q){
                $q->where('sex',0);
            })
            ->get();

        return view('admin.enroll.index',compact('enroll','enrollMen','enrollWomen','kelas'));
    }
    public function store(Request $request){
        $enroll = new Enroll();
        $enroll->id_kelas = $request->kelas;
        $enroll->id_user = $request->user;
        $enroll->save();
        return response()->json([
           'success' => true
        ]);
    }
}
