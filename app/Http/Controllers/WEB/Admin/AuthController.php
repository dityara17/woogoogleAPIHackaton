<?php

namespace App\Http\Controllers\WEB\Admin;

use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }

    public function checkLog(Request $r){
        $user = User::where('email', $r->email)->first();
        if ($user && Hash::check($r->password, $user->password)) {

            if (!empty(session('user'))){
                session()->forget('user');
            }

            $me = array(
                'id' => $user->id,
                'role' => $user->role,
                'name' => $user->name,
                'email' => $user->email,
            );
            session(['user' => $me]);
            if (session('user')['role'] == 1) {
                return redirect()->to('app/admin');
            } else{
                return redirect()->to('/');
            }

        } else {
            return redirect()->to('app/login')->with('error','Error your email or password');
        }
    }
    public function logout(){
        session()->forget('user');
        return redirect('app/login');
    }

    public function store(Request $request){
        $user = new User();
        $user->role = 1;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->to('app/admin/login');
    }
}
