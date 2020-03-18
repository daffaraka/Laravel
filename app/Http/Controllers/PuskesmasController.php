<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use DB;

class PuskesmasController extends Controller
{
    public function index()
    {
        $pasien = Pasien::all();
        return view("content.index", compact("pasien"));
    }

    
    public function create()
    {
        return view("content.create");
    }

   
    public function masukkan(Request $request)
    {

        DB::table('daftar_pasien')->insert([
            'nama'=>$request->nama,
            'nik'=>$request->nik,
            'alamat'=>$request->alamat,
            'status'=>$request->status,
        ]);
        return redirect()->route('content.index');
    }
      /*  return $filePath;*/

//         /*$photo_mhs = 'products-'.date('Ymdhis').'.'.$request->photo->getClientOriginialExtension();
//         $request->photo->move('photo_mhs', $photo_mhs);

//         $mahasiswa = new BiodataMahasiswa;
//         $mahasiswa->name = $request->name;
//         $mahasiswa->nim = $request->nim;
//         $mahasiswa->address = $request->address;
//         $mahasiswa->photo = $photo_mhs;

//         $mahasiswa->save();
// */
//  /*       return redirect('biodata.index');*/
//     }

   
    public function show($id)
    {
        $data = Pasien::find($id);
        return view("content.show",compact("data"));
    }

   
    public function edit($id)
    {
        $data = Pasien::find($id);
        return view("content.edit", compact("data"));
    }

   
    public function update(Request $request, $id)
    {
        Pasien::where("id",$id)->update($request->except("_token"));
        return redirect()->route("content.index");
     }

  
    public function destroy($id)
    {
        Pasien::where("id",$id)->delete();
        return redirect()->route("content.index");
    }

//     public function tindakan($status)
//     {
//         $data = BiodataMahasiswa::find($status);
//         return view("biodata.tindakan",compact("data"));
//     }

//     public function updatetindakan(Request $request, $id)
//     {
//         BiodataMahasiswa::where("status",$status)->update($request->except("_token"));
//         return redirect()->route("biodata.index");
//     }

      public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

}

