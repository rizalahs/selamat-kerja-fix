<?php

namespace App\Http\Controllers\form_elements;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PatientSafety;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PatientSafetyController extends Controller
{
    public function create()
    {
        return view('content.form-elements.forms-patientsafety');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|string',
            'tanggal_kejadian' => 'required|date',
            'waktu_kejadian' => 'required|',
            'lokasi_kejadian' => 'required',
            'jenis_kejadian' => 'required',
            'kronologi_kejadian' => 'required',
            'alat'=> 'required',
            'penyebab'=>'required',
            'kondisi'=>'required',
            'namakorban'=>'required',
            'cedera'=> 'required',
            'bagiantubuh'=>'required',
            'tindakan' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
          ]);
      
          if($validator->fails())return redirect()->back()->WithInput()->withErrors($validator);
          
          $image        =$request->file('image');
          $filename     =date('Y-m-d').$image->getClientOriginalName();
          $path         ='image-patientsafety/'.$filename;
      
          Storage::disk('public')->put($path,file_get_contents($image));
      
          $data['nama']                =$request ->nama;
          $data['tanggal_kejadian']    =$request ->tanggal_kejadian;
          $data['waktu_kejadian']      =$request ->waktu_kejadian;
          $data['lokasi_kejadian']     =$request ->lokasi_kejadian;
          $data['jenis_kejadian']      =$request ->jenis_kejadian;
          $data['kronologi_kejadian']  =$request ->kronologi_kejadian;
          $data['alat']                =$request ->alat;
          $data['penyebab']            =$request ->penyebab;
          $data['kondisi']             =$request ->kondisi;
          $data['namakorban']          =$request ->namakorban;
          $data['cedera']              =$request ->cedera;
          $data['bagiantubuh']         =$request ->bagiantubuh;
          $data['tindakan']            =$request ->tindakan;
          $data['image']               =$filename;
          
          PatientSafety::create($data);     

        return redirect()->route('tables-patientsafety')->with('success', 'Laporan Anda Berhasil Dikirim & akan Segera di Proses Oleh TIM K3');
    }

    public function index()
    {
        $data = PatientSafety::all();
        return view('content.form-elements.tables-patientsafety', compact('data'));
    }
}
