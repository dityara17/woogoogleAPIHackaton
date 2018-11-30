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
    public function users(){
        $users1 = User::orderBy('id','desc')->get();
        $usersMen = $users1->where('sex',1);
        $usersWomen = $users1->where('sex',0);
        $users = User::orderBy('id','desc')->paginate('20');

        return view('admin.user.index',compact('users','usersMen','usersWomen'));
    }
    public function insert(){
        return view('admin.user.add');
    }
}
