<?php

namespace App\Http\Controllers\Web\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{


    public function index()
    {
        return view("home.index");
    }

    public function course()
    {
        Alert::success('Success Title', 'Success Message');
        return view("home.course");
    }

}
