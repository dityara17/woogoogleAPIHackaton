<?php

namespace App\Http\Controllers\Web\Home;

use App\Model\Kelas;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function index()
    {
        $list = Kelas::all()->take(3);

        return view("home.index", compact('list'));
    }

    public function course()
    {
        $list = Kelas::all();

        return view("home.course", compact('list'));
    }

}
