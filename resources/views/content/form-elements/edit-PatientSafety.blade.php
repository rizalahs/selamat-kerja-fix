@extends('layouts/layoutMaster')

@section('title', 'Update - Patient Safety')

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
  <span class="text-muted fw-light">Insiden Keselamatan/</span> Patient Safety
</h4>

<div class="accordion mt-3" id="accordionExample">
  <div class="card accordion-item active">
  </div>
  <div class="accordion-item card">
    <h3 class="accordion-header text-body d-flex justify-content-between" id="accordionIconTwo">
      <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionIcon-2" aria-controls="accordionIcon-2">
        Apa saja jenis kejadian keselamatan pasien seperti kejadian tidak diinginkan, kejadian nyaris cedera dll?
      </button>
    </h3>
    <div id="accordionIcon-2" class="accordion-collapse collapse" data-bs-parent="#accordionIcon">
      <div class="accordion-body">
       <h5>
         <ul>
           <li><strong>Kejadian Tidak Diinginkan (KTD):</strong> Kejadian yang tidak diinginkan yang dapat menyebabkan cedera atau kerugian pada pasien, seperti kesalahan pemberian obat atau prosedur.</li>
           <li><strong>Kejadian Sentinel:</strong> Kejadian serius yang mengakibatkan kematian, cedera fisik atau psikologis yang signifikan, seperti pembedahan di tempat yang salah.</li>
           <li><strong>Kejadian Nyaris Cedera (KNC):</strong> Kejadian yang hampir menyebabkan cedera tetapi berhasil dicegah sebelum terjadi.</li>
           <li><strong>Kejadian Advers:</strong> Reaksi merugikan yang tidak diharapkan dari suatu tindakan medis, seperti reaksi alergi terhadap obat.</li>
           <li><strong>Kejadian Insiden:</strong> Kejadian yang tidak diinginkan yang terjadi dalam proses perawatan, seperti penundaan perawatan.</li>
           <li><strong>Kejadian Tak Terkendali:</strong> Kejadian mendadak yang mengancam nyawa, seperti henti jantung mendadak.</li>
           <li><strong>Kejadian Sampingan:</strong> Efek samping dari tindakan medis, seperti mual setelah kemoterapi.</li>
           <li><strong>Kejadian Insiden Medik:</strong> Kesalahan administrasi atau data medis yang dapat mempengaruhi keselamatan pasien, seperti kesalahan pengisian data medis.</li>
          </ul>
        </h5>
      </div>
    </div>
  </div>
<hr>
  <div class="row">
    <!-- Form Kejadian Kerja -->
    <div class="col-12">
      <div class="card">
        <h5 class="card-header">Form Laporan Kejadian Keselamatan Kerja</h5>
        <div class="card-body">

          <form action="/edit/{{$PatientSafety->id}}/patientsafety" class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Informasi -->

            <div class="col-12">
              <h6>1. Informasi Umum</h6>
              <hr class="mt-0" />
            </div>


            <div class="col-md-6">
              <label class="form-label" for="formValidationName">Nama Lengkap Pelapor</label>
              <input type="text" name="nama" class="form-control" value="{{$PatientSafety->nama}}"/>
            </div>
            <div class="col-md-6">
              <label for="accidentTime" class="form-label">Waktu Kejadian</label>
              <input type="text" name="waktu_kejadian" class="form-control" value="{{$PatientSafety->waktu_kejadian}}" id="flatpickr-time" />
            </div>

            <div class="col-md-6">
              <label for="accident-date" class="form-label">Tanggal Kejadian</label>
              <input type="text" name="tanggal_kejadian" class="form-control" value="{{$PatientSafety->tanggal_kejadian}}" id="flatpickr-date" />
            </div>
            <div class="col-md-6">
              <label for="JenisKejadian" class="form-label">Jenis Kejadian</label>
              <select class="select2-icons form-select" name="jenis_kejadian" id="jenis-kejadian">
                <option selected disabled>Pilih Jenis Kejadian</option>

                <optgroup label="Kejadian Tidak Diinginkan (KTD)">
                  <option value="kesalahan-medikasi" @if($PatientSafety->jenis_kejadian == 'kesalahan-medikasi') selected @endif>Kesalahan Medikasi (Salah dosis, salah obat, dll)</option>
                  <option value="jatuh" @if($PatientSafety->jenis_kejadian == 'jatuh') selected @endif>Pasien Jatuh</option>
                  <option value="infeksi-nosokomial" @if($PatientSafety->jenis_kejadian == 'infeksi-nosokomial') selected @endif>Infeksi Nosokomial (Infeksi akibat perawatan)</option>
                </optgroup>

                <optgroup label="Kejadian Nyaris Cedera (KNC)">
                  <option value="prosedur-salah" @if($PatientSafety->jenis_kejadian == 'prosedur-salah') selected @endif>Kesalahan Prosedur (Salah operasi, tindakan salah, dll)</option>
                  <option value="alat-rusak" @if($PatientSafety->jenis_kejadian == 'alat-rusak') selected @endif>Kesalahan Peralatan (Alat medis tidak berfungsi dengan baik)</option>
                  <option value="kesalahan-diagnosa" @if($PatientSafety->jenis_kejadian == 'kesalahan-diagnosa') selected @endif>Kesalahan Diagnosa (Keterlambatan, salah diagnosa)</option>
                </optgroup>

                <optgroup label="Kejadian Tidak Cedera (KTC)">
                  <option value="sistem-gagal" @if($PatientSafety->jenis_kejadian == 'sistem-gagal') selected @endif>Kegagalan Sistem (Sistem informasi tidak akurat)</option>
                  <option value="kesalahan-komunikasi" @if($PatientSafety->jenis_kejadian == 'kesalahan-komunikasi) selected @endif>Kesalahan Komunikasi (Instruksi tidak jelas)</option>
                  <option value="kesalahan-transfusi" @if($PatientSafety->jenis_kejadian == 'kesalahan-transfusi') selected @endif>Kesalahan Transfusi (Reaksi alergi atau infeksi)</option>
                </optgroup>

                <optgroup label="Kejadian Potensial Cedera (KPC)">
                  <option value="reaksi-alergi" @if($PatientSafety->jenis_kejadian == 'reaksi-alergi') selected @endif>Reaksi Alergi Berat</option>
                  <option value="kekerasan-pasien" @if($PatientSafety->jenis_kejadian == 'kekerasan-pasien') selected @endif>Kekerasan oleh Pasien</option>
                  <option value="kekerasan-keluarga" @if($PatientSafety->jenis_kejadian == 'kekerasan-keluarga') selected @endif>Kekerasan oleh Keluarga</option>
                </optgroup>

                <optgroup label="Sentinel">
                  <option value="kematian" @if($PatientSafety->jenis_kejadian == 'kematian') selected @endif>Kematian Tidak Terduga</option>
                  <option value="cedera-serius" @if($PatientSafety->jenis_kejadian == 'cedera-serius') selected @endif>Cedera Serius Tidak Terduga</option>
                  <option value="pemberian-darah-salah" @if($PatientSafety->jenis_kejadian == 'pemberian-darah-salah') selected @endif>Pemberian Darah Salah</option>
                </optgroup>

                <optgroup label="Lainnya">
                  <option value="lainnya" @if($PatientSafety->jenis_kejadian == 'lainnya') selected @endif>Lainnya (Sebagai tambahan atau kejadian yang tidak tercantum di atas)</option>
                </optgroup>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="lokasi-kejadian">Lokasi Kejadian</label>
            <select class="select3" name="lokasi_kejadian" id="lokasi-kejadian">
              <option selected disabled>Pilih Lokasi Kejadian</option>
              <option value="Poli Umum" @if($PatientSafety->lokasi_kejadian == 'Poli Umum') selected @endif>Poli Umum</option>
              <option value="Poli Anak" @if($PatientSafety->lokasi_kejadian == 'Poli Anak') selected @endif>Poli Anak</option>
              <option value="Poli KIA" @if($PatientSafety->lokasi_kejadian == 'Poli KIA') selected @endif>Poli KIA</option>
              <option value="Poli Gizi" @if($PatientSafety->lokasi_kejadian == 'Poli Gizi') selected @endif>Poli Gizi</option>
              <option value="Poli Gigi" @if($PatientSafety->lokasi_kejadian == 'Poli Gigi') selected @endif>Poli Gigi</option>
              <option value="Poli Imunisasi" @if($PatientSafety->lokasi_kejadian == 'Poli Imunisasi') selected @endif>Poli Imunisasi</option>
              <option value="Poli P2M" @if($PatientSafety->lokasi_kejadian == 'Poli P2M') selected @endif>Poli P2M</option>
              <option value="Ruang Pendaftaran" @if($PatientSafety->lokasi_kejadian == 'Ruang Pendaftaran') selected @endif>Ruang Pendaftaran</option>
              <option value="Ruang Farmasi" @if($PatientSafety->lokasi_kejadian == 'Ruang Farmasi') selected @endif>Ruang Farmasi</option>
              <option value="Ruang Laktasi" @if($PatientSafety->lokasi_kejadian == 'Ruang Laktasi') selected @endif>Ruang Laktasi</option>
              <option value="Ruang Tindakan" @if($PatientSafety->lokasi_kejadian == 'Ruang Tindakan') selected @endif>Ruang Tindakan</option>
              <option value="Ruang Sterilisasi" @if($PatientSafety->lokasi_kejadian == 'Ruang Sterilisasi') selected @endif>Ruang Sterilisasi</option>
              <option value="Ruang Tata Usaha" @if($PatientSafety->lokasi_kejadian == 'Ruang Tata Usaha') selected @endif>Ruang Tata Usaha</option>
              <option value="Laboratorium" @if($PatientSafety->lokasi_kejadian == 'Laboratorium') selected @endif>Laboratorium</option>
              </select>
            </div>

            <!-- Personal Info -->

            <div class="col-12">
              <h6 class="mt-2">2. Detail Kejadian</h6>
              <hr class="mt-0" />
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="formValidationFirstName">Kronologi Kejadian</label>
                <textarea class="form-control message-input" name="kronologi_kejadian"  rows="2">{{$PatientSafety->kronologi_kejadian}}</textarea>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Alat atau bahan yang terlibat</label>
              <input type="text" id="" name="Alat" class="form-control" value="{{$PatientSafety->Alat}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Penyebab kejadian</label>
              <input type="text" id="" name="penyebab" class="form-control" value="{{$PatientSafety->penyebab}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Kondisi lingkungan saat kejadian</label>
              <input type="text" id="" name="kondisi" class="form-control" value="{{$PatientSafety->kondisi}}" />
            </div>

            <!-- Choose Your Plan -->

            <div class="col-12">
              <h6 class="mt-2">3. Data Korban</h6>
              <hr class="mt-0" />
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="">Nama Korban</label>
              <input type="text" name="namakorban" id="" class="form-control" value="{{$PatientSafety->namakorban}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationTwitter">Cedera yang di alami</label>
              <input type="text" name="cedera" id="" class="form-control" value="{{$PatientSafety->cedera}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationTwitter">Bagian tubuh yang cidera</label>
              <input type="text" name="bagiantubuh" id="#" class="form-control" value="{{$PatientSafety->bagiantubuh}}" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationFacebook">Tindakan pertolongan pertama</label>
              <input type="text" name="tindakan" id="#" class="form-control" value="{{$PatientSafety->tindakan}}" />
            </div>
           <center><H5>Dokumentasi Laporan Patient Safety</H5></center> 
            <div class="col">
              @if ($PatientSafety->image)
               <center> <img src="{{asset('storage/image-patientsafety/'.$PatientSafety->image)}}" width="600" height="300px"alt=""></center>
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
