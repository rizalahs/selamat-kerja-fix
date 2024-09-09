<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientSafety extends Model
{
    use HasFactory;
    protected $table='insiden_kejadian';
    protected $fillable = [
      'nama',
      'waktu_kejadian',
      'tanggal_kejadian',
      'jenis_kejadian',
      'lokasi_kejadian',
      'kronologi_kejadian',
      'alat_bahan',
      'penyebab_kejadian',
      'kondisi_lingkungan',
      'nama_korban',
      'cedera',
      'bagian_tubuh',
      'tindakan_pertama',
  ];
}
