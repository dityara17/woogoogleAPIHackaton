<?php

namespace App\Http\Controllers\WEB\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }
}
