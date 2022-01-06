<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {

        return view('Admin.admin');
    }

    public function loginAdmin()
    {
        if (auth()->check()) {
            return redirect()->route('admin.index');
        }
//        dd(Hash::make("namnam"));
        return view('Admin.login');
    }
    public function fileManager()
    {
        return view('Admin.FileManager.index');
    }

    public function postloginAdmin(Request $request)
    {
        $remeber_me = $request->has('remeber_me') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password

        ], $remeber_me)) {
            return redirect()->route('admin.index');
        } else  return redirect()->route('admin.login');

    }

    public function logOut(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
