@extends('layouts/layoutMaster')

@section('title', 'Basic Inputs - accident')

<!-- Vendor Styles -->
@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.scss',
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/flatpickr/flatpickr.scss',
  'resources/assets/vendor/libs/typeahead-js/typeahead.scss',
  'resources/assets/vendor/libs/tagify/tagify.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss',
  'resources/assets/vendor/libs/animate-css/animate.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss'
])
@endsection

<!-- Vendor Scripts -->
@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/bs-stepper/bs-stepper.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/bootstrap-select/bootstrap-select.js',
  'resources/assets/vendor/libs/moment/moment.js',
  'resources/assets/vendor/libs/flatpickr/flatpickr.js',
  'resources/assets/vendor/libs/typeahead-js/typeahead.js',
  'resources/assets/vendor/libs/tagify/tagify.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js'
])
@endsection

<!-- Page Scripts -->
@section('page-script')
@vite([
  'resources/assets/js/form-accident.js',
  'resources/assets/js/forms-selects.js',
  'resources/assets/js/forms-tagify.js',
  'resources/assets/js/forms-typeahead.js',
  'resources/assets/js/form-input-group.js',
  'resources/assets/js/forms-pickers.js',
  'resources/assets/js/extended-ui-sweetalert2.js'
  ])
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Insiden Keselamatan/</span> Kecelakaan Kerja
</h4>
<!-- Default -->
{{-- <div class="row">
  <div class="col-12">
    <h5>Default</h5>
  </div> --}}

  <!-- Validation Wizard -->
  <div class="col-12 mb-4">
    <small class="text-light fw-medium">Sistem Laporan Keselamatan Kerja</small>
    <div id="wizard-validation" class="bs-stepper mt-2">
      <div class="bs-stepper-header">
        <div class="step" data-target="#account-details-validation">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">1</span>
            <span class="bs-stepper-label mt-1">
              <span class="bs-stepper-title">Informasi Umum</span>
              <span class="bs-stepper-subtitle">General Information</span>
            </span>
          </button>
        </div>
        <div class="line">
          <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step" data-target="#personal-info-validation">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">2</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Detail Kejadian</span>
              <span class="bs-stepper-subtitle">Incident Detail</span>
            </span>
          </button>
        </div>
        <div class="line">
          <i class="ti ti-chevron-right"></i>
        </div>
        <div class="step" data-target="#social-links-validation">
          <button type="button" class="step-trigger">
            <span class="bs-stepper-circle">3</span>
            <span class="bs-stepper-label">
              <span class="bs-stepper-title">Data Korban</span>
              <span class="bs-stepper-subtitle">Accident Victims</span>
            </span>
          </button>
        </div>
      </div>
      <div class="bs-stepper-content">
        <form id="wizard-validation-form" onSubmit="return false">
          <!-- Account Details -->
          <div id="account-details-validation" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Informasi Umum</h6>
              <small>Masukan informasi umum kejadian.</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="#">Nama</label>
                <input type="text" name="formValidationName" id="#" class="form-control" placeholder="Nama Pelapor" />
              </div>
              <div class="col-sm-6">
                <label for="accidentTime" class="form-label">Waktu Kejadian</label>
                <input type="text" class="form-control" placeholder="HH:MM" id="flatpickr-time" />
              </div>
              <div class="col-sm-6">
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
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev" disabled> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Detail Kejadian -->
          <div id="personal-info-validation" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Detail Kejadian</h6>
              <small>Jelaskan secara rinci insiden yang terjadi</small>
            </div>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label" for="formValidationFirstName">Kronologi Kejadian</label>
                <div class="input-group input-group-merge form-send-message">
                  <textarea class="form-control message-input" placeholder="Ketik atau Klik icon untuk bicara" rows="2"></textarea>
                  <span class="message-actions input-group-text">
                    <i class='ti ti-microphone cursor-pointer speech-to-text'></i>
                  </span>
                </div>
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
              <div class="col-12 d-flex justify-content-between">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span> <i class="ti ti-arrow-right"></i></button>
              </div>
            </div>
          </div>
          <!-- Data korban dan saksi -->
          <div id="social-links-validation" class="content">
            <div class="content-header mb-3">
              <h6 class="mb-0">Data korban</h6>
              <small>Isi apabila terdapat korban maupun kejadian yang nyaris memakan korban.</small>
            </div>
            <div class="row g-3">
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
              <hr>
              <div class="col">
                <input type="file" class="form-control" id="inputGroupFile02" capture="camera">
                <label class="input-group-text" for="inputGroupFile02">Upload gambar atau video</label>
              </div>
              <div class="col-12 d-flex justify-content-between ">
                <button class="btn btn-label-secondary btn-prev"> <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <div class="demo-inline-spacing">
                  <button type="button" class="btn btn-success" id="type-success">
                    Success
                  </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
