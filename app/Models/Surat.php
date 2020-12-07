<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'userid','name','alasan','kategori','tgl','nama_ortu'
    ];
}