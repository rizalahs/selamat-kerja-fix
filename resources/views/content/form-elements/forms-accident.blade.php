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
        <h5 class="card-header">Form Laporan Kejadian Keselamatan Kerja</h5>
        <div class="card-body">

          <form id="formValidationExamples" class="row g-3">

            <!-- Informasi -->

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
              <select class="select2-icons form-select" id="jenis-kejadian">
                <option selected disabled>Pilih Jenis Kejadian</option>
                <optgroup label="Kejadian Akibat Kerja">
                  <option value="terjatuh" data-icon="fa-solid fa-person-falling" >Terjatuh, tergelincir, tersandung</option>
                  <option value="tertimpa" data-icon="fa-solid fa-person-falling-burst"  >Tertimpa benda</option>
                  <option value="tertusuk" data-icon="fa-solid fa-syringe">Tertusuk, terpotong</option>
                  <option value="tersenga" data-icon="fa-solid fa-bolt-lightning">Tersengat listrik</option>
                <optgroup label="Paparan Zat Berbahaya">
                  <option value="Kimia" data-icon="fa-solid fa-flask">Paparan Bahan Kimia</option>
                  <option value="terpapargas" data-icon="fa-solid fa-lungs">Paparan Gas, asap, debu</option>
                <optgroup label="Kejadian Ergonomis">
                  <option value="cederaberulang" data-icon="fa-solid fa-user-injured">Cedera akibat gerakan berulang</option>
                  <option value="posisisalah" data-icon="fa-solid fa-person-digging">Cedera akibat posisi yang salah</option>
                </optgroup>
                <optgroup label="Kebakaran dan Ledakan">
                  <option value="kebakaran" data-icon="fa-solid fa-fire">Kebakaran, korsleting listrik, api terbuka, bahan mudah terbakar</option>
                  <option value="ledakan" data-icon="fa-solid fa-explosion">Ledakan, tekanan berlebihan pada tangki atau tabung gas</option>
                </optgroup>
                <optgroup label="Gangguan Keamanan">
                  <option value="kekerasan-fisik" data-icon="fa-solid fa-person-harassing">Kekerasan fisik atau kekerasan verbal</option>
                  <option value="pencurian" data-icon="fa-solid fa-user-ninja">Pencurian atau perusakan properti</option>
                </optgroup>
                <optgroup label="Kejadian Psikologi">
                  <option value="setres-kerja" data-icon="fa-solid fa-face-frown">Setres Kerja : Akibat beban kerja, tekanan waktu, atau kondisi kerja yang buruk</option>
                  <option value="burnout" data-icon="fa-solid fa-face-frown">Burnout : Kelelahan emosional, fisik, dan mental</option>
                </optgroup>
                <optgroup label="Kejadian Lingkungan">
                  <option value="tumpahan-bahan-berbahaya" data-icon="fa-solid fa-biohazard">Tumpahan bahan berbahaya </option>
                  <option value="pencemaran" data-icon="fa-solid fa-fish">Pencemaran lingkungan </option>
                </optgroup>
                <optgroup label="Kegagalan Peralatan">
                  <option value="rusak-mesin" data-icon="fa-solid fa-car-burst">Kerusakan mesin atau alat </option>
                  <option value="rusak-alat" data-icon="fa-solid fa-screwdriver-wrench">Kegagalan Sistem </option>
                </optgroup>
                <optgroup label="Kejadian Lalu Lintas di Area Kerja">
                  <option value="kecelakaan-kendaraan" data-icon="fa-solid fa-car-burst">Kecelakaan kendaraan </option>
                </optgroup>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label" for="lokasi-kejadian">Lokasi Kejadian</label>
            <select class="select3" id="lokasi-kejadian">
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
