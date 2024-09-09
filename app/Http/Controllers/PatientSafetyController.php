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
        'tanggal_kejadian' => 'required|date',
        'waktu_kejadian' => 'required|date_format:H:i',
        'lokasi_kejadian' => 'required|string|max:255',
        'jenis_kejadian' => 'required|string|max:255',
        'kronologi_kejadian' => 'required|string',
        'tindakan' => 'required|string',
        'rekomendasi' => 'nullable|string',
        ]);

        PatientSafety::create([
            'nama' => $request->nama,
            'tanggal_kejadian' => $request->tanggal_kejadian,
            'waktu_kejadian' => $request->waktu_kejadian,
            'lokasi_kejadian' => $request->lokasi_kejadian,
            'jenis_kejadian' => $request->jenis_kejadian,
            'kronologi_kejadian' => $request->kronologi_kejadian,
            'tindakan' => $request->tindakan,
            'rekomendasi' => $request->rekomendasi,
        ]);

        return redirect()->route('patientsafety.index')->with('success', 'Data berhasil disimpan');
    }

    public function index()
    {
        $data = PatientSafety::all();
        return view('content.form-elements.patientsafety-index', compact('data'));
    }
}
