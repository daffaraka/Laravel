<?php

namespace App\Http\Controllers;

use App\Authenticable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    	return view("auth.login");
    }	

    public function login(Request $request)
    {
    	$credential = $request->only("username","password");	    
    	if(Auth::attempt($credential)){
    		// Meneruskan ke halaman biodata mahasiswa jika sukses
    		return redirect()->route("content.index");
    	} else {
    		// mengembalikan ke halaman login jika gagal
    		return redirect()->back()->with('error','Email-Address And Password Are Wrong.');
    	}
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route("login");
    }
}
