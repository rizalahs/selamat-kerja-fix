@extends('layouts/layoutMaster')

@section('title', 'Basic Inputs - accident')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([

])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/form-accident.js'])
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Insiden /</span> Form Kecelakaan Kerja
</h4>
<hr>
    <!-- HTML5 Inputs -->
    <form class="needs-validation" action="{{ route('patientsafety.store') }}" method="POST">
      @csrf
      <div class="card-body">
          <div class="mb-3 row">
              <label for="nama" class="col-md-2 col-form-label">Nama</label>
              <div class="col-md-10">
                  <input class="form-control" type="text" name="nama" id="nama" required/>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Silahkan masukkan nama anda.</div>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="tanggal_kejadian" class="col-md-2 col-form-label">Tanggal Kejadian</label>
              <div class="col-md-10">
                  <input class="form-control" type="date" name="tanggal_kejadian" id="tanggal_kejadian" required/>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Masukan tanggal kejadian.</div>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="waktu_kejadian" class="col-md-2 col-form-label">Waktu Kejadian</label>
              <div class="col-md-10">
                  <input class="form-control" type="time" name="waktu_kejadian" id="waktu_kejadian" required/>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Masukan waktu kejadian.</div>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="lokasi_kejadian" class="col-md-2 col-form-label">Lokasi Kejadian</label>
              <div class="col-md-10">
                  <select class="form-control" name="lokasi_kejadian" id="lokasi_kejadian" required>
                      <option value="" selected disabled>Pilih Lokasi Kejadian</option>
                      <option value="Poli Umum">Poli Umum</option>
                      <!-- Tambahkan pilihan lainnya sesuai kebutuhan -->
                  </select>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Pilih lokasi kejadian.</div>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="jenis_kejadian" class="col-md-2 col-form-label">Jenis Kejadian</label>
              <div class="col-md-10">
                  <select class="form-control" name="jenis_kejadian" id="jenis_kejadian" required>
                      <option value="" selected disabled>Pilih jenis kejadian</option>
                      <option value="KTD">Kejadian Tidak Diharapkan (Insiden yang mengakibatkan cedera pasien)</option>
                      <!-- Tambahkan pilihan lainnya sesuai kebutuhan -->
                  </select>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Pilih jenis kejadian.</div>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="kronologi" class="col-md-2 col-form-label">Kronologi Kejadian</label>
              <div class="col-md-10">
                  <textarea class="form-control" name="kronologi_kejadian" id="kronologi_kejadian" rows="3" ></textarea>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="tindakan" class="col-md-2 col-form-label">Tindakan yang sudah diambil</label>
              <div class="col-md-10">
                  <select class="form-control" name="tindakan" id="tindakan">
                      <option value="" selected disabled>Pilih Tindakan</option>
                      <option value="Menonaktifkan atau mengamankan area yang berpotensi membahayakan">Menonaktifkan atau mengamankan area yang berpotensi membahayakan</option>
                      <!-- Tambahkan pilihan lainnya sesuai kebutuhan -->
                  </select>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">Pilih tindakan yang sudah diambil.</div>
              </div>
          </div>
          <div class="mb-3 row">
              <label for="rekomendasi" class="col-md-2 col-form-label">Rekomendasi Tindak Lanjut</label>
              <div class="col-md-10">
                  <textarea class="form-control" name="rekomendasi" id="rekomendasi" rows="3"></textarea>
              </div>
          </div>
          <div class="footer-right d-flex justify-content-end">
              <button type="submit" class="btn btn-success">Submit</button>
          </div>
      </div>
  </form>


@endsection
