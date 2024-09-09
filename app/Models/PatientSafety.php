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
      'tanggal_kejadian',
      'waktu_kejadian',
      'lokasi_kejadian',
      'jenis_kejadian',
      'kronologi_kejadian',
      'tindakan',
      'rekomendasi',
  ];
}
