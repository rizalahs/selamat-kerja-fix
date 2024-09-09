<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientSafety;

class PatientSafetyController extends Controller
{
    public function create()
    {
        return view('content.form-elements.forms-patientsafety');
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'waktu_kejadian' => 'required|date_format:H:i',
        'tanggal_kejadian' => 'required|date',
        'jenis_kejadian' => 'required|string|max:255',
        'lokasi_kejadian' => 'required|string|max:255',
        'kronologi_kejadian' => 'required|string',
        'alat_bahan' => 'required|string',
        'penyebab_kejadian' => 'nullable|string',
        'kondisi_lingkungan' => 'nullable|string',
        'nama_korban' => 'nullable|string|max:255',
        'cedera' => 'nullable|string',
        'bagian_tubuh' => 'nullable|string',
        'tindakan_pertama' => 'nullable|string',
        ]);

        PatientSafety::create([
            'nama' => $request->nama,
            'waktu_kejadian' => $request->waktu_kejadian,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'jenis_kejadian' => $request->jenis_kejadian,
            'lokasi_kejadian' => $request->lokasi_kejadian,
            'kronologi_kejadian' => $request->kronologi_kejadian,
            'alat_bahan' => $request->alat_bahan,
            'penyebab_kejadian' => $request->penyebab_kejadian,
            'kondisi_lingkungan' => $request->kondisi_lingkungan,
            'nama_korban' => $request->nama_korban,
            'cedera' => $request->cedera,
            'bagian_tubuh' => $request->bagian_tubuh,
            'tindakan_pertama' => $request->tindakan_pertama,
        ]);

        return redirect()->route('patientsafety.index')->with('success', 'Data berhasil disimpan');
    }

    public function index()
    {
        $data = PatientSafety::all();
        return view('content.form-elements.patientsafety-index', compact('data'));
    }
}
