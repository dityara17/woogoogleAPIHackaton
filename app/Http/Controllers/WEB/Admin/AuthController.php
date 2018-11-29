<?php

namespace App\Http\Controllers\WEB\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function checkLog(Request $r){
        $user = User::where('email', $r->email)->first();
        if ($user && Hash::check($r->password, $user->password)) {

            $me = array(
                'id' => $user->id,
                'role' => $user->role,
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone
            );
            session(['user' => $me]);
            return redirect()->to('app/admin');

        } else {
            return redirect()->to('app/admin/login')->with('error','Error your email or password');
        }
    }
    public function logout(){
        session()->forget('user');
        return redirect('app/admin/login');
    }

    public function store(Request $request){
        $user = new User();
        $user->role = 1;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->to('app/admin/login');
    }
}
