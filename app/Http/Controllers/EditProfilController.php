<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Request\UpdateProfil;
use App\User;
use App\Authenticable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

use DB;


class EditProfilController extends Controller
{

     public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view("content.profile", compact("data"));
    }

   
    public function update(UpdateProfil $request, $id)
    {
        User::where("id",$id)->update($request->except("_token"));
        return redirect()->route("content.profile");
     }

}
