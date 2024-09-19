@extends('layouts/layoutMaster')

@section('title', 'Update - accident')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/typeahead-js/typeahead.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.scss',
  'resources/assets/vendor/libs/pickr/pickr-themes.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/typeahead-js/typeahead.js',
  'resources/assets/vendor/libs/tagify/tagify.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js',
  'resources/assets/vendor/libs/pickr/pickr.js'

])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
  'resources/assets/js/form-accident.js',
  'resources/assets/js/form-validation.js',
  'resources/assets/js/forms-pickers.js',
  'resources/assets/js/forms-selects.js',
  'resources/assets/js/forms-typeahead.js'
  ])
@endsection

@section('content')

<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Form Update/</span> Kecelakaan Kerja
</h4>
<hr>
<div class="accordion mt-3" id="accordionExampleWorkSafety">
  <div class="accordion-item card">
    <h3 class="accordion-header text-body d-flex justify-content-between" id="accordionIconWorkSafety">
      <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionWorkSafety-1" aria-controls="accordionWorkSafety-1">
        Apa saja jenis kejadian keselamatan kerja seperti kecelakaan kerja, paparan zat berbahaya, dll?
      </button>
    </h3>
    <div id="accordionWorkSafety-1" class="accordion-collapse collapse" data-bs-parent="#accordionExampleWorkSafety">
      <div class="accordion-body">
        <h5>
          <ul>
            <li><strong>Kecelakaan Kerja:</strong> Kejadian yang mengakibatkan cedera fisik atau kerusakan, seperti terjatuh dari ketinggian atau tertimpa benda berat.</li>
            <li><strong>Paparan Zat Berbahaya:</strong> Kontak dengan bahan kimia berbahaya, gas beracun, atau debu yang dapat menyebabkan penyakit atau kerusakan organ.</li>
            <li><strong>Kejadian Ergonomis:</strong> Cedera akibat posisi kerja yang salah atau gerakan berulang yang menyebabkan ketegangan otot atau sendi.</li>
            <li><strong>Kebakaran dan Ledakan:</strong> Insiden yang melibatkan api atau bahan mudah meledak yang dapat menyebabkan kerusakan serius.</li>
            <li><strong>Gangguan Keamanan:</strong> Kejadian kekerasan fisik atau verbal yang mengancam keselamatan karyawan.</li>
            <li><strong>Kegagalan Peralatan:</strong> Kerusakan atau kegagalan alat yang mengakibatkan bahaya bagi karyawan atau gangguan operasi.</li>
            <li><strong>Kecelakaan Lalu Lintas di Area Kerja:</strong> Insiden yang melibatkan kendaraan di area kerja, seperti tabrakan atau tertabrak.</li>
          </ul>
        </h5>
      </div>
    </div>
  </div>
</div>
<hr>
  <div class="row">
    <!-- Form Kejadian Kerja -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Form Laporan Kejadian Kecelakaan Kerja</h5>
        <div class="card-body">

          <form action="/edit/{{$KeselamatanKerja->id}}/accident" class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Informasi -->

            <div class="col-12">
              <h6>1. Informasi Umum</h6>
              <hr class="mt-0" />
            </div>


            <div class="col-md-6">
              <label class="form-label" for="formValidationName">Nama Lengkap Pelapor</label>
              <input type="text" name="nama" class="form-control" value="{{$KeselamatanKerja->nama}}"/>
            </div>
            <div class="col-md-6">
              <label for="accidentTime" class="form-label">Waktu Kejadian</label>
              <input type="text" name="waktu_kejadian" class="form-control" value="{{$KeselamatanKerja->waktu_kejadian}}" id="flatpickr-time" />
            </div>

            <div class="col-md-6">
              <label for="accident-date" class="form-label">Tanggal Kejadian</label>
              <input type="text" name="tanggal_kejadian" class="form-control" value="{{$KeselamatanKerja->tanggal_kejadian}}" id="flatpickr-date" />
            </div>
            <div class="col-md-6">
              <label for="JenisKejadian" class="form-label">Jenis Kejadian</label>
              <select class="select2-icons form-select" name="jenis_kejadian" id="jenis-kejadian">
                <option selected disabled>Pilih Jenis Kejadian</option>
                <optgroup label="Kejadian Akibat Kerja">
                  <option value="terjatuh"  @if($KeselamatanKerja->jenis_kejadian == 'terjatuh') selected @endif>Terjatuh, tergelincir, tersandung</option>
                  <option value="tertimpa" @if($KeselamatanKerja->jenis_kejadian == 'tertimpa') selected @endif>Tertimpa benda</option>
                  <option value="tertusuk" @if($KeselamatanKerja->jenis_kejadian == 'tertusuk') selected @endif>Tertusuk, terpotong</option>
                  <option value="tersengat" @if($KeselamatanKerja->jenis_kejadian == 'tersengat') selected @endif>Tersengat listrik</option>
                <optgroup label="Paparan Zat Berbahaya">
                  <option value="Kimia" @if($KeselamatanKerja->jenis_kejadian == 'Kimia') selected @endif>Paparan Bahan Kimia</option>
                  <option value="terpapargas" @if($KeselamatanKerja->jenis_kejadian == 'terpapargas') selected @endif>Paparan Gas, asap, debu</option>
                <optgroup label="Kejadian Ergonomis">
                  <option value="cederaberulang" @if($KeselamatanKerja->jenis_kejadian == 'cederaberulang') selected @endif>Cedera akibat gerakan berulang</option>
                  <option value="posisisalah" @if($KeselamatanKerja->jenis_kejadian == 'posisisalah') selected @endif>Cedera akibat posisi yang salah</option>
                </optgroup>
                <optgroup label="Kebakaran dan Ledakan">
                  <option value="kebakaran" @if($KeselamatanKerja->jenis_kejadian == 'kebakaran') selected @endif>Kebakaran, korsleting listrik, api terbuka, bahan mudah terbakar</option>
                  <option value="ledakan" @if($KeselamatanKerja->jenis_kejadian == 'ledakan') selected @endif>Ledakan, tekanan berlebihan pada tangki atau tabung gas</option>
                </optgroup>
                <optgroup label="Gangguan Keamanan">
                  <option value="kekerasan-fisik" @if($KeselamatanKerja->jenis_kejadian == 'kekerasan-fisik') selected @endif>Kekerasan fisik atau kekerasan verbal</option>
                  <option value="pencurian" @if($KeselamatanKerja->jenis_kejadian == 'pencurian') selected @endif>Pencurian atau perusakan properti</option>
                </optgroup>
                <optgroup label="Kejadian Psikologi">
                  <option value="setres-kerja" @if($KeselamatanKerja->jenis_kejadian == 'setres-kerja') selected @endif>Setres Kerja : Akibat beban kerja, tekanan waktu, atau kondisi kerja yang buruk</option>
                  <option value="burnout" @if($KeselamatanKerja->jenis_kejadian == 'burnout') selected @endif>Burnout : Kelelahan emosional, fisik, dan mental</option>
                </optgroup>
                <optgroup label="Kejadian Lingkungan">
                  <option value="tumpahan-bahan-berbahaya" @if($KeselamatanKerja->jenis_kejadian == 'tumpahan-bahan-berbahaya') selected @endif>Tumpahan bahan berbahaya </option>
                  <option value="pencemaran" @if($KeselamatanKerja->jenis_kejadian == 'pencemaran') selected @endif>Pencemaran lingkungan </option>
                </optgroup>
                <optgroup label="Kegagalan Peralatan">
                  <option value="rusak-mesin" @if($KeselamatanKerja->jenis_kejadian == 'rusak-mesin') selected @endif>Kerusakan mesin atau alat </option>
                  <option value="rusak-alat" @if($KeselamatanKerja->jenis_kejadian == 'rusak-alat') selected @endif>Kegagalan Sistem </option>
                </optgroup>
                <optgroup label="Kejadian Lalu Lintas di Area Kerja">
                  <option value="kecelakaan-kendaraan" @if($KeselamatanKerja->jenis_kejadian == 'Kecelakaan-kendaraan') selected @endif>Kecelakaan kendaraan </option>
                </optgroup>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="lokasi-kejadian">Lokasi Kejadian</label>
            <select class="select3" name="lokasi_kejadian" id="lokasi-kejadian">
              <option selected disabled>Pilih Lokasi Kejadian</option>
              <option value="Poli Umum" @if($KeselamatanKerja->lokasi_kejadian == 'Poli Umum') selected @endif>Poli Umum</option>
              <option value="Poli Anak" @if($KeselamatanKerja->lokasi_kejadian == 'Poli Anak') selected @endif>Poli Anak</option>
              <option value="Poli KIA" @if($KeselamatanKerja->lokasi_kejadian == 'Poli KIA') selected @endif>Poli KIA</option>
              <option value="Poli Gizi" @if($KeselamatanKerja->lokasi_kejadian == 'Poli Gizi') selected @endif>Poli Gizi</option>
              <option value="Poli Gigi" @if($KeselamatanKerja->lokasi_kejadian == 'Poli Gigi') selected @endif>Poli Gigi</option>
              <option value="Poli Imunisasi" @if($KeselamatanKerja->lokasi_kejadian == 'Poli Imunisasi') selected @endif>Poli Imunisasi</option>
              <option value="Poli P2M" @if($KeselamatanKerja->lokasi_kejadian == 'Poli P2M') selected @endif>Poli P2M</option>
              <option value="Ruang Pendaftaran" @if($KeselamatanKerja->lokasi_kejadian == 'Ruang Pendaftaran') selected @endif>Ruang Pendaftaran</option>
              <option value="Ruang Farmasi" @if($KeselamatanKerja->lokasi_kejadian == 'Ruang Farmasi') selected @endif>Ruang Farmasi</option>
              <option value="Ruang Laktasi" @if($KeselamatanKerja->lokasi_kejadian == 'Ruang Laktasi') selected @endif>Ruang Laktasi</option>
              <option value="Ruang Tindakan" @if($KeselamatanKerja->lokasi_kejadian == 'Ruang Tindakan') selected @endif>Ruang Tindakan</option>
              <option value="Ruang Sterilisasi" @if($KeselamatanKerja->lokasi_kejadian == 'Ruang Sterilisasi') selected @endif>Ruang Sterilisasi</option>
              <option value="Ruang Tata Usaha" @if($KeselamatanKerja->lokasi_kejadian == 'Ruang Tata Usaha') selected @endif>Ruang Tata Usaha</option>
              <option value="Laboratorium" @if($KeselamatanKerja->lokasi_kejadian == 'Laboratorium') selected @endif>Laboratorium</option>
              </select>
            </div>

            <!-- Personal Info -->

            <div class="col-12">
              <h6 class="mt-2">2. Detail Kejadian</h6>
              <hr class="mt-0" />
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="formValidationFirstName">Kronologi Kejadian</label>
                <textarea class="form-control message-input" name="kronologi_kejadian"  rows="2">{{$KeselamatanKerja->kronologi_kejadian}}</textarea>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Alat atau bahan yang terlibat</label>
              <input type="text" id="" name="Alat" class="form-control" value="{{$KeselamatanKerja->Alat}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Penyebab kejadian</label>
              <input type="text" id="" name="penyebab" class="form-control" value="{{$KeselamatanKerja->penyebab}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Kondisi lingkungan saat kejadian</label>
              <input type="text" id="" name="kondisi" class="form-control" value="{{$KeselamatanKerja->kondisi}}" />
            </div>

            <!-- Choose Your Plan -->

            <div class="col-12">
              <h6 class="mt-2">3. Data Korban</h6>
              <hr class="mt-0" />
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="">Nama Korban</label>
              <input type="text" name="namakorban" id="" class="form-control" value="{{$KeselamatanKerja->namakorban}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationTwitter">Cedera yang di alami</label>
              <input type="text" name="cedera" id="" class="form-control" value="{{$KeselamatanKerja->cedera}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationTwitter">Bagian tubuh yang cidera</label>
              <input type="text" name="bagiantubuh" id="#" class="form-control" value="{{$KeselamatanKerja->bagiantubuh}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationFacebook">Tindakan pertolongan pertama</label>
              <input type="text" name="tindakan" id="#" class="form-control" value="{{$KeselamatanKerja->tindakan}}" />
            </div>
           <center><H5>Dokumentasi Laporan Kecelakaan</H5></center> 
            <div class="col">
              @if ($KeselamatanKerja->image)
               <center> <img src="{{asset('storage/image-accident/'.$KeselamatanKerja->image)}}" width="600" height="300px"alt=""></center>
                @endif
              <hr>
            </div>

            <!-- button-->

            <div class="col-12">
              <button type="submit" name="submitButton" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /FormValidation -->
  </div>


@endsection
