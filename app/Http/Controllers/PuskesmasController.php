<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Pasien;
use DataTables;
use App\User;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Http\Request\UpdatePasien;
use App\Exports\PasienExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use App\Mail\PasienEmail;
use App\Http\Controllers\EditProfilController;



use DB;

class PuskesmasController extends Controller
{
      
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index(Builder $builder)
    {
        if (request()->ajax()) {
        return DataTables::of(Pasien::query())->editColumn("nik",function($data){
            return $data->nik;

        })->addColumn("aksi", function($data) {
             return "
                <a href='" . route("content.show", ["id" => $data->id]) ."' class='btn btn-success'>Detail</a>
                <a href='" . route("content.edit", ["id" => $data->id]) ."' class='btn btn-warning'>Edit</a>
                <a href='" . route("content.destroy", ["id" => $data->id]) ."' class='btn btn-danger'>Delete</button>
                ";
            })->rawColumns(["ncurses_define_key(definition, keycode)", "aksi"])->addINdexColumn()->toJson();
    

    }
     

    $html = $builder->columns([
        ['data' => 'id', 'name' => 'id', 'title' => 'ID'],
        ['data' => 'nama', 'name' => 'nama', 'title' => 'NAMA'],
        ['data' => 'nik', 'name' => 'nik', 'title' => 'NIK'],
        ['data' => 'alamat', 'name' => 'alamat', 'title' => 'Alamat'],
        ['data' => 'status', 'name' => 'status', 'title' => 'Status'],
        [       
                'defaultContent' => '',
                'data'           => 'aksi',
                'name'           => 'aksi',
                'title'          => 'ACTION',
                'render'         => null,
                'orderable'      => false,
                'searchable'     => false,
                'exportable'     => false,
                'printable'      => true,
            ],
        ]);

        return view('content.index', compact('html'));

        // $pasien = Pasien::all();
        // return view("content.index", compact("pasien"));
    }

    
    public function create()
    {
        return view("content.create");
    }

     public function store(Request $request){
        // dd($request->file());


        $daftarpasien = new Pasien;
        $daftarpasien->name = $request->name;
        $daftarpasien->nik = $request->nik;
        $daftarpasien->alamat = $request->alamat;
        $daftarpasien->status = $request->status;
        // $mahasiswa->photo = $photo_mhs;
        // $mahasiswa->filePath = $filePath;


        $daftarpasien->save();

        // $filePath = $request->file("photo")->store("photo_mhs");
        // return $filePath;
        return redirect()->route("content.index");
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

   
    public function update(UpdatePasien $request, $id)
    {
        Pasien::where("id",$id)->update($request->except("_token"));
        return redirect()->route("content.index");
     }

  
    public function destroy($id)
    {
        Pasien::where("id",$id)->delete();
        return redirect()->route("content.index");
    }

   
   public function search(Request $request) {
        $search = Pasien::when($request->cari, function($query) use ($request) {
              $query->where('id','LIKE',"%{$request->cari}%")
                    ->orWhere('nama','LIKE',"%{$request->cari}%")
                    ->orWhere('nik','LIKE',"%{$request->cari}%")
                    ->orWhere('alamat','LIKE',"%{$request->cari}%");
        })->get();
        return view('content.edit',['search' => $search, 'cari' => $request->cari]);
   }


      public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }


    public function export_excel()
    {
        return Excel::download(new PasienExport, 'pasien.xlsx');
    }

    public function email()
    {
        Mail::to("daffatesting@laravel.com")->send(new LaravelEmail());

        return "Email telah dikirim";
    }

    public function pengguna()
    {
        
        return view('content.profile');
        
    }

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


       // public function cari(Request $request)
    // {   
    //     // menangkap data pencarian
    //     $cari = $request->cari;

    //     // mengambil data dari tabel pasien
    //     $data =DB::table('daftar_pasien')->where('nama','like',"%".$cari."%")
    //     ->paginate();

    //     return redirect()->route("content.index");
    // }
