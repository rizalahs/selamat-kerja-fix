<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeselamatanKerja extends Model
{
    use HasFactory;
    protected $table='accidents';
    protected $fillable = [
      'nama',
      'tanggal_kejadian',
      'waktu_kejadian',
      'lokasi_kejadian',
      'jenis_kejadian',
      'kronologi_kejadian',
      'Alat',
      'penyebab',
      'kondisi',
      'namakorban',
      'cedera',
      'bagiantubuh',
      'tindakan',
      'image',
    ];
}
