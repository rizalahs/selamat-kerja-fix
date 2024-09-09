@extends('layouts/layoutMaster')

@section('title', 'Daftar Insiden Keselamatan Pasien')

@section('content')
<h4 class="py-3 mb-4">Daftar Insiden Keselamatan Pasien</h4>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tanggal Kejadian</th>
            <th>Waktu Kejadian</th>
            <th>Lokasi Kejadian</th>
            <th>Jenis Kejadian</th>
            <th>Kronologi Kejadian</th>
            <th>Tindakan</th>
            <th>Rekomendasi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $PatientSafety)
        <tr>
            <td>{{ $PatientSafety->nama }}</td>
            <td>{{ $PatientSafety->tanggal_kejadian }}</td>
            <td>{{ $PatientSafety->waktu_kejadian }}</td>
            <td>{{ $PatientSafety->lokasi_kejadian }}</td>
            <td>{{ $PatientSafety->jenis_kejadian }}</td>
            <td>{{ $PatientSafety->kronologi_kejadian }}</td>
            <td>{{ $PatientSafety->tindakan }}</td>
            <td>{{ $PatientSafety->rekomendasi }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
