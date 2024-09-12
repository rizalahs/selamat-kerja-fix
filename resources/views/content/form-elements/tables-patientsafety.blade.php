@extends('layouts/layoutMaster')

@section('title', 'Daftar Insiden Keselamatan Pasien')

@section('content')
<h4 class="py-3 mb-4">Daftar Laporan Patient Safety</h4>

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
            <th>Nama Korban</th>
            <th>Tindakan</th>
            <th>Dokumentasi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $PatientSafety)
        <tr>
            <td>{{ $PatientSafety->nama }}</td>
            <td>{{ $PatientSafety->tanggal_kejadian }}</td>
            <td>{{ $PatientSafety->waktu_kejadian }}</td>
            <td>{{ $PatientSafety->lokasi_kejadian }}</td>
            <td>{{ $PatientSafety->namakorban }}</td>
            <td>{{ $PatientSafety->tindakan }}</td>
            <td><img src="{{asset('storage/image-patientsafety/'.$PatientSafety->image)}}" alt="" width="100"></td>
            <td>
                <button type="submit" class="btn btn-information">Edit</button>
                <button type="submit" class="btn btn-Danger">Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
