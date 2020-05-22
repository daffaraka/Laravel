<?php

namespace App\Http\Controllers;

use App\Authenticable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

use DB;

class RegisterController extends Controller
{

    public function showRegisterForm()
    {
    	return view('register-form');
    }



    public function register(Request $request)
    {
    	  DB::table('admins')->insert([
            'id'=>$request->id,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>$request->password,
        ]);
        return redirect()->route('login');
    }


     public function store(Request $request){
        // dd($request->file());


        $user = new User;
        $user->emailusername = $request->emailusername;
        $user->username = $request->username;
        $user->password = $request->password;
        // $mahasiswa->photo = $photo_mhs;
        // $mahasiswa->filePath = $filePath;


        $user->save();

        // $filePath = $request->file("photo")->store("photo_mhs");
        // return $filePath;
        return redirect()->route("login");
    }
}
