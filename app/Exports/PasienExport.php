<?php

namespace App\Exports;

use App\Pasien;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Exports\PasienExport;

class PasienExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pasien::all();
    }
}
