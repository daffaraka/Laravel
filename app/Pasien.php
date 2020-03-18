<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use SoftDeletes;

    protected $table = "daftar_pasien";
    protected $fillable = [

    	"id",
    	"nama",
    	"nik",
    	"alamat",
    	"status"
    ];
}
