@extends('layouts/layoutMaster')

@section('title', 'Basic Inputs - patient safety')

@section('page-script')
@vite('resources/assets/js/form-patient-safety.js')
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Insiden /</span> Form Patient Safety
</h4>
<hr>
    <!-- HTML5 Inputs -->
    <div class="row">
      <form action="">
        <div class="card-body">
          <div class="mb-3 row">
            <label for="html5-text-input" class="col-md-2 col-form-label">Nama</label>
            <div class="col-md-10">
              <input class="form-control" type="text" value="" id="html5-text-input"/>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Tanggal Kejadian</label>
            <div class="col-md-10">
              <input class="form-control" type="date" value="" id="html5-datetime-local-input" />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-url-input" class="col-md-2 col-form-label">Waktu Kejadian</label>
            <div class="col-md-10">
              <input class="form-control" type="time" value="" id="html5-url-input" />
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Lokasi Kejadian</label>
              <div class="col-md-10">
                 <select class ="form-control" id="">
                <option value="" selected disabled>Pilih Lokasi Kejadian</option>
                <option value="Poli Umum">Poli Umum</option>
                <option value="Poli Anak">Poli Anak</option>
                <option value="Poli KIA">Poli KIA</option>
                <option value="Poli Gizi">Poli Gizi</option>
                <option value="Poli Gigi">Poli Gigi</option>
                <option value="Poli Imunisasi">Poli Imunisasi</option>
                <option value="Poli P2M">Poli P2M</option>
                <option value="Ruang Pendaftaran">Ruang Pendaftaran</option>
                <option value="Ruang Farmasi">Ruang Faramasi</option>
                <option value="Ruang Laktasi">Ruang Laktasi</option>
                <option value="Ruang Tindakan">Ruang Tindakan</option>
                <option value="Ruang Sterilisasi">Ruang Sterilisasi</option>
                <option value="Ruang Tata Usaha">Ruang Tata Usaha</option>
                <option value="Laboratorium">Laboratorium</option>
              </select>
             </div>
            </label>
          </div>
          <div class="mb-3 row">
            <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Jenis Kejadian</label>
              <div class="col-md-10">
              <select class="form-control" id="">
                <option value="" selected disabled>Pilih jenis kejadian</option>
                <option value="KTD">Kejadian Tidak Diharapkan (Insiden yang mengakibatkan cedera pasien)</option>
                <option value="KNC">Kejadian Nyaris Cedera (Terjadinya insiden yang belum sampai terpapar ke pasien)</option>
                <option value="KTC">Kejadian Tidak Cedera (Insiden yang sudah terpapar ke pasien, tetapi tidak timbul cedera)</option>
                <option value="KPC">Kondisi Potensial Cedera (Kondisi yang sangat berpotensi untuk menimbulkan cedera, tetapi belum terjadi insiden)</option>
                <option value="KSL">Kejadian sentinel ( Kejadian yang mengakibatkan kematian atau cedera yang serius.)</option>
              </select>
             </div>
            </label>
          </div>
          <div class="mb-3 row">
            <label for="html5-tel-input" class="col-md-2 col-form-label">Kronologi Kejadian</label>
            <div class="col-md-10">
            <textarea class="form-control" placeholder="Jelaskan kronologi kejadian dengan lengkap" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-password-input" class="col-md-2 col-form-label">Tindakan yang sudah di ambil</label>
            <div class="col-md-10">
              <select class="form-control" id="">
                <option value="" selected disabled>Pilih Tindakan</option>
                <option value="Menonaktifkan atau mengamankan area yang berpotensi membahayakan (elimanasi)">Menonaktifkan atau mengamankan area yang berpotensi membahayakan (elimanasi)</option>
                <option value="Melakukan investigasi internal untuk mengetahui penyebab kejadian(Pengendalian Administrasi)">Melakukan investigasi internal untuk mengetahui penyebab kejadian(Pengendalian Administrasi)</option>
                <option value="Melakukan perbaikan atau perubahan pada prosedur kerja yang terkait (rekayasa teknik)">Melakukan perbaikan atau perubahan pada prosedur kerja yang terkait (rekayasa teknik)</option>
                <option value="Mengganti atau memperbaiki peralatan yang rusak atau berpotensi membahayakan.(subtitusi)">Mengganti atau memperbaiki peralatan yang rusak atau berpotensi membahayakan.(subtitusi)</option>
                <option value="Melengkapi diri / petugas / tenaga kerja dengan alat pelindugan diri agar meniadakan risiko(APD)">Melengkapi diri / petugas / tenaga kerja dengan alat pelindugan diri agar meniadakan risiko(APD)</option>
                <option value="Menghubungi petugas keamanan atau penanggung jawab area terkait">Menghubungi petugas keamanan atau penanggung jawab area terkait</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-tel-input" class="col-md-2 col-form-label">Rekomendasi Tindak Lanjut</label>
            <div class="col-md-10">
            <textarea class="form-control" placeholder="Berikan rekomendasi saran" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </div>
          <div class="footer-right d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>

@endsection
