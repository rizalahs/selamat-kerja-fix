<?php

namespace App\Http\Controllers\form_elements;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\KeselamatanKerja;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class accident extends Controller
{
  public function index()
  {
    return view('content.form-elements.forms-accident');
  }

  public function store (Request $request)
  {
    $image        =$request->file('image');
    $filename     =date('Y-m-d').$image->getClientOriginalName();
    $path         ='image-accident/'.$filename;

    Storage::disk('public')->put($path,file_get_contents($image));

    $data['nama']                =$request ->nama;
    $data['tanggal_kejadian']    =$request ->tanggal_kejadian;
    $data['waktu_kejadian']      =$request ->waktu_kejadian;
    $data['lokasi_kejadian']     =$request ->lokasi_kejadian;
    $data['jenis_kejadian']      =$request ->jenis_kejadian;
    $data['kronologi_kejadian']  =$request ->kronologi_kejadian;
    $data['Alat']                =$request ->alat;
    $data['penyebab']            =$request ->penyebab;
    $data['kondisi']             =$request ->kondisi;
    $data['namakorban']          =$request ->namakorban;
    $data['cedera']              =$request ->cedera;
    $data['bagiantubuh']         =$request ->bagiantubuh;
    $data['tindakan']            =$request ->tindakan;
    $data['image']               =$filename;
    
    KeselamatanKerja::create($data);
    
    return redirect()->route('tables-accident')->with('success', 'Laporan Anda Berhasil Dikirim & akan Segera di Proses Oleh TIM K3');

  }

  public function table()
  {
    $data = keselamatanKerja::all();
    return view('content.form-elements.tables-accident', compact('data'));
  }

  public function edit($id)
  {
    $KeselamatanKerja = \App\models\KeselamatanKerja::find($id);
    return view('content.form-elements.edit-accident',['KeselamatanKerja'=>$KeselamatanKerja]);
  }

  public function update(request $request,$id)
  {
      $KeselamatanKerja= \App\models\KeselamatanKerja::find($id);
      $KeselamatanKerja ->update($request ->all());

      return redirect()->route('tables-accident') ->with('success','Laporan Berhasil Di Update');
  }

  public function delete($id)
  {
    $KeselamatanKerja= \App\models\KeselamatanKerja::find($id);
    $KeselamatanKerja->delete($KeselamatanKerja);

      return redirect()->route('tables-accident') ->with('success','Laporan Berhasil Dihapus');
  }
}
