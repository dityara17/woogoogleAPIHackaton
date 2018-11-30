<?php

namespace App\Http\Controllers\WEB\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $usersMen = $users->where('sex',1);
        $usersWomen = $users->where('sex',0);
        return view('admin.home.index',compact('users','usersMen','usersWomen'));
    }
}
