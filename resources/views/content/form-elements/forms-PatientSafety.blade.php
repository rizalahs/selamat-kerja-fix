@extends('layouts/layoutMaster')

@section('title', 'Basic Inputs - accident')

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
  <span class="text-muted fw-light">Insiden Keselamatan/</span> Kecelakaan Kerja
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
          <form id="formValidationExamples" class="row g-3">

            <!-- Informasi Umum -->

            <div class="col-12">
              <h6>1. Informasi Umum</h6>
              <hr class="mt-0" />
            </div>


            <div class="col-md-6">
              <label class="form-label" for="formValidationName">Full Name</label>
              <input type="text" id="formValidationName" class="form-control" placeholder="John Doe" name="formValidationName" />
            </div>
            <div class="col-md-6">
              <label for="accidentTime" class="form-label">Waktu Kejadian</label>
              <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
            </div>

            <div class="col-md-6">
              <label for="accident-date" class="form-label">Tanggal Kejadian</label>
              <input type="text" class="form-control" placeholder="Masukan Tanggal Kejadian" id="flatpickr-date" />
            </div>
            <div class="col-md-6">
              <label for="JenisKejadian" class="form-label">Jenis Kejadian</label>
              <select class="select2-icons form-select" id="jenis-kejadian" name="jenis_kejadian">
                <option selected disabled>Pilih Jenis Kejadian</option>

                <optgroup label="Kejadian Tidak Diinginkan (KTD)">
                  <option value="kesalahan-medikasi" data-icon="fa-solid fa-pills">Kesalahan Medikasi (Salah dosis, salah obat, dll)</option>
                  <option value="jatuh" data-icon="fa-solid fa-user-injured">Pasien Jatuh</option>
                  <option value="infeksi-nosokomial" data-icon="fa-solid fa-virus">Infeksi Nosokomial (Infeksi akibat perawatan)</option>
                </optgroup>

                <optgroup label="Kejadian Nyaris Cedera (KNC)">
                  <option value="prosedur-salah" data-icon="fa-solid fa-procedures">Kesalahan Prosedur (Salah operasi, tindakan salah, dll)</option>
                  <option value="alat-rusak" data-icon="fa-solid fa-tools">Kesalahan Peralatan (Alat medis tidak berfungsi dengan baik)</option>
                  <option value="kesalahan-diagnosa" data-icon="fa-solid fa-stethoscope">Kesalahan Diagnosa (Keterlambatan, salah diagnosa)</option>
                </optgroup>

                <optgroup label="Kejadian Tidak Cedera (KTC)">
                  <option value="sistem-gagal" data-icon="fa-solid fa-server">Kegagalan Sistem (Sistem informasi tidak akurat)</option>
                  <option value="kesalahan-komunikasi" data-icon="fa-solid fa-comment-slash">Kesalahan Komunikasi (Instruksi tidak jelas)</option>
                  <option value="kesalahan-transfusi" data-icon="fa-solid fa-vial">Kesalahan Transfusi (Reaksi alergi atau infeksi)</option>
                </optgroup>

                <optgroup label="Kejadian Potensial Cedera (KPC)">
                  <option value="reaksi-alergi" data-icon="fa-solid fa-allergies">Reaksi Alergi Berat</option>
                  <option value="kekerasan-pasien" data-icon="fa-solid fa-fist-raised">Kekerasan oleh Pasien</option>
                  <option value="kekerasan-keluarga" data-icon="fa-solid fa-user-shield">Kekerasan oleh Keluarga</option>
                </optgroup>

                <optgroup label="Sentinel">
                  <option value="kematian" data-icon="fa-solid fa-skull-crossbones">Kematian Tidak Terduga</option>
                  <option value="cedera-serius" data-icon="fa-solid fa-exclamation-triangle">Cedera Serius Tidak Terduga</option>
                  <option value="pemberian-darah-salah" data-icon="fa-solid fa-vial">Pemberian Darah Salah</option>
                </optgroup>

                <optgroup label="Lainnya">
                  <option value="lainnya" data-icon="fa-solid fa-ellipsis-h">Lainnya (Sebagai tambahan atau kejadian yang tidak tercantum di atas)</option>
                </optgroup>

              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="lokasi-kejadian">Lokasi Kejadian</label>
              <select class="select3" id="lokasi-kejadian" name="lokasi_kejadian">
                <option selected disabled>Pilih Lokasi Kejadian</option>
                <option value="Poli Umum" data-icon="fa-solid fa-hospital-user">Poli Umum</option>
                <option value="Poli Anak" data-icon="fa-solid fa-baby">Poli Anak</option>
                <option value="Poli KIA" data-icon="fa-solid fa-stethoscope">Poli KIA</option>
                <option value="Poli Gizi" data-icon="fa-solid fa-apple-alt">Poli Gizi</option>
                <option value="Poli Gigi" data-icon="fa-solid fa-tooth">Poli Gigi</option>
                <option value="Poli Imunisasi" data-icon="fa-solid fa-syringe">Poli Imunisasi</option>
                <option value="Poli P2M" data-icon="fa-solid fa-users">Poli P2M</option>
                <option value="Ruang Pendaftaran" data-icon="fa-solid fa-user-edit">Ruang Pendaftaran</option>
                <option value="Ruang Farmasi" data-icon="fa-solid fa-pills">Ruang Farmasi</option>
                <option value="Ruang Laktasi" data-icon="fa-solid fa-baby-carriage">Ruang Laktasi</option>
                <option value="Ruang Tindakan" data-icon="fa-solid fa-procedures">Ruang Tindakan</option>
                <option value="Ruang Sterilisasi" data-icon="fa-solid fa-prescription-bottle-alt">Ruang Sterilisasi</option>
                <option value="Ruang Tata Usaha" data-icon="fa-solid fa-briefcase">Ruang Tata Usaha</option>
                <option value="Laboratorium" data-icon="fa-solid fa-vial">Laboratorium</option>
              </select>
            </div>

            <!-- Personal Info -->

            <div class="col-12">
              <h6 class="mt-2">2. Detail Kejadian</h6>
              <hr class="mt-0" />
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="formValidationFirstName">Kronologi Kejadian</label>
                <textarea class="form-control message-input" placeholder="Jelaskan Kronologi Kejadian" rows="2"></textarea>
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Alat atau bahan yang terlibat</label>
              <input type="text" id="" name="name" class="form-control" placeholder="Alat, mesin, atau bahan yang terlibat dalam kejadian" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Penyebab kejadian</label>
              <input type="text" id="" name="name" class="form-control" placeholder="Identifikasi faktor penyebab langsung atau tidak langsung" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="#">Kondisi lingkungan saat kejadian</label>
              <input type="text" id="" name="name" class="form-control" placeholder="Kondisi lingkungan misalnya : keramaian, pencahayaan, kebisingan, kondisi lantai, dll" />
            </div>

            <!-- Choose Your Plan -->

            <div class="col-12">
              <h6 class="mt-2">3. Data Korban</h6>
              <hr class="mt-0" />
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="">Nama Korban</label>
              <input type="text" name="" id="" class="form-control" placeholder="Masukan nama korban" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationTwitter">Cedera yang di alami</label>
              <input type="text" name="" id="" class="form-control" placeholder="misalnya, luka, patah tulang, memar" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationTwitter">Bagian tubuh yang cidera</label>
              <input type="text" name="" id="#" class="form-control" placeholder="misalnya, tangan, kepala, kaki" />
            </div>
            <div class="col-sm-6">
              <label class="form-label" for="formValidationFacebook">Tindakan pertolongan pertama</label>
              <input type="text" name="" id="#" class="form-control" placeholder="pertolongan pertama yang diberikan" />
            </div>
            <div class="col">
              <input type="file" class="form-control" id="inputGroupFile02" capture="camera">
              <label class="input-group-text" for="inputGroupFile02">Upload gambar atau video</label>
            </div>

            <!-- button-->

            <div class="col-12">
              <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /FormValidation -->
  </div>


@endsection
