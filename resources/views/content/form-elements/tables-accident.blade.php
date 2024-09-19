@extends('layouts/layoutMaster')

@section('title', 'Daftar Kecelakaan Kerja')

@section('content')
<h4 class="py-3 mb-4">Daftar Laporan Kecelakaan Kerja</h4>

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
            <th>Alat</th>
            <th>dokumentasi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $accidents)
        <tr>
            <td>{{ $accidents->nama }}</td>
            <td>{{ $accidents->tanggal_kejadian }}</td>
            <td>{{ $accidents->waktu_kejadian }}</td>
            <td>{{ $accidents->lokasi_kejadian }}</td>
            <td>{{ $accidents->namakorban }}</td>
            <td>{{ $accidents->tindakan }}</td>
            <td>{{ $accidents->Alat }}</td>
            <td><img src="{{asset('storage/image-accident/'.$accidents->image)}}" alt="" width="100"></td>
            <td>
                <a href="/edit/{{$accidents->id}}/accident" class="btn btn-warning btn-sm">Edit </a>
                <a href="/tables/accident/{{$accidents->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data {{$accidents->nama}}?')" > Hapus </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
