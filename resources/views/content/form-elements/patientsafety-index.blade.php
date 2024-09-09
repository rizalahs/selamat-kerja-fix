@extends('layouts/layoutMaster')

@section('title', 'Daftar Insiden Keselamatan Pasien')

<!-- Page Scripts -->
@section('page-script')
@vite(['resources/assets/js/data-tables-basic.js'])
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">DataTables /</span> Extensions
</h4>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
  <div class="card-datatable table-responsive pt-0">
    <table class="datatables-basic table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Waktu Kejadian</th>
            <th>Tanggal Kejadian</th>
            <th>Jenis Kejadian</th>
            <th>Lokasi Kejadian</th>
            <th>Kronologi Kejadian</th>
            <th>Alat dan Bahan</th>
            <th>Penyebab Kejadian</th>
            <th>Kondisi Lingkungan</th>
            <th>Nama Korban</th>
            <th>Cedera yang di alami</th>
            <th>Bagian tubuh yang mengalami cedera</th>
            <th>Tindakan Pertama</th>
            <th>timestamps</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $PatientSafety)
        <tr>
            <td>{{ $PatientSafety->nama }}</td>
            <td>{{ $PatientSafety->waktu_kejadian }}</td>
            <td>{{ $PatientSafety->tanggal_kejadian }}</td>
            <td>{{ $PatientSafety->jenis_kejadian }}</td>
            <td>{{ $PatientSafety->lokasi_kejadian }}</td>
            <td>{{ $PatientSafety->kronologi_kejadian }}</td>
            <td>{{ $PatientSafety->alat_bahan }}</td>
            <td>{{ $PatientSafety->penyebab_kejadian }}</td>
            <td>{{ $PatientSafety->kondisi_lingkungan }}</td>
            <td>{{ $PatientSafety->nama_korban }}</td>
            <td>{{ $PatientSafety->cedera }}</td>
            <td>{{ $PatientSafety->bagian_tubuh }}</td>
            <td>{{ $PatientSafety->tindakan_pertama }}</td>
            <td>{{ $PatientSafety->timestamps }}</td>
        </tr>
        @endforeach
    </tbody>
   </table>
</div>
</div>

<!-- Modal to add new record -->
<div class="offcanvas offcanvas-end" id="add-new-record">
  <div class="offcanvas-header border-bottom">
    <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body flex-grow-1">
    <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
      <div class="col-sm-12">
        <label class="form-label" for="basicFullname">Full Name</label>
        <div class="input-group input-group-merge">
          <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
          <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicPost">Post</label>
        <div class="input-group input-group-merge">
          <span id="basicPost2" class="input-group-text"><i class='ti ti-briefcase'></i></span>
          <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicEmail">Email</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="ti ti-mail"></i></span>
          <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
        </div>
        <div class="form-text">
          You can use letters, numbers & periods
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicDate">Joining Date</label>
        <div class="input-group input-group-merge">
          <span id="basicDate2" class="input-group-text"><i class='ti ti-calendar'></i></span>
          <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
        </div>
      </div>
      <div class="col-sm-12">
        <label class="form-label" for="basicSalary">Salary</label>
        <div class="input-group input-group-merge">
          <span id="basicSalary2" class="input-group-text"><i class='ti ti-currency-dollar'></i></span>
          <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
        </div>
      </div>
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
      </div>
    </form>

  </div>
</div>
<!--/ DataTable with Buttons -->

@endsection
