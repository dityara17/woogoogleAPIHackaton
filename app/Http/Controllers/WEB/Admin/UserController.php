<?php

namespace App\Http\Controllers\WEB\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $usersMen = $users->where('sex', 1);
        $usersWomen = $users->where('sex', 0);
        return view('admin.home.index', compact('users', 'usersMen', 'usersWomen'));
    }

    public function users()
    {
        $users1 = User::orderBy('id', 'desc')->get();
        $usersMen = $users1->where('sex', 1);
        $usersWomen = $users1->where('sex', 0);
        $users = User::orderBy('id', 'desc')->paginate('20');

        return view('admin.user.index', compact('users', 'usersMen', 'usersWomen'));
    }

    public function insert()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->to('app/admin/users')->with('success', 'Berhasil menambah user');
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->role = $request->role;
//        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->to('app/admin/users')->with('success', 'Berhasil mengubah data user');
    }

    public function updatePassword(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->role = $request->role;
//        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->to('app/admin/users')->with('success', 'Berhasil mengubah password user');
    }
}
