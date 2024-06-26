@extends('pegawai.main')

@section('title', 'Calendar')
@section('breadcrumb-item', 'Application')

@section('breadcrumb-item-active', 'Calendar')

@section('css')
    <!-- data tables css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/datepicker-bs5.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/dataTables.bootstrap5.min.css') }}">
@endsection

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
  <!-- [ sample-page ] start -->
  <div class="col-12">
    <div class="card">
      <div class="card-body position-relative">
        <div id="calendar" class="calendar"></div>
      </div>
    </div>
  </div>
  <!-- [ sample-page ] end -->
</div>
<!-- [ Main Content ] end -->

<div class="modal fade" id="calendar-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="calendar-modal-title f-w-600 text-truncate">Modal title</h3>
        <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
          <i class="ti ti-x f-20"></i>
        </a>
      </div>
      <div class="modal-body">
        <div class="d-flex">
          <div class="flex-shrink-0">
            <div class="avtar avtar-xs bg-light-secondary">
              <i class="ti ti-heading f-20"></i>
            </div>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="mb-1"><b>Title</b></h5>
            <p class="pc-event-title text-muted"></p>
          </div>
        </div>
        <div class="d-flex">
          <div class="flex-shrink-0">
            <div class="avtar avtar-xs bg-light-warning">
              <i class="ti ti-map-pin f-20"></i>
            </div>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="mb-1"><b>Venue</b></h5>
            <p class="pc-event-venue text-muted"></p>
          </div>
        </div>
        <div class="d-flex">
          <div class="flex-shrink-0">
            <div class="avtar avtar-xs bg-light-danger">
              <i class="ti ti-calendar-event f-20"></i>
            </div>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="mb-1"><b>Date</b></h5>
            <p class="pc-event-date text-muted"></p>
          </div>
        </div>
        <div class="d-flex">
          <div class="flex-shrink-0">
            <div class="avtar avtar-xs bg-light-primary">
              <i class="ti ti-file-text f-20"></i>
            </div>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="mb-1"><b>Description</b></h5>
            <p class="pc-event-description text-muted"></p>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <ul class="list-inline me-auto mb-0">
          <li class="list-inline-item align-bottom">
            <a href="#" id="pc_event_remove" class="avtar avtar-s btn-link-danger btn-pc-default w-sm-auto" data-bs-toggle="tooltip" title="Delete">
              <i class="ti ti-trash f-18"></i>
            </a>
          </li>
          <li class="list-inline-item align-bottom">
            <a href="#" id="pc_event_edit" class="avtar avtar-s btn-link-success btn-pc-default" data-bs-toggle="tooltip" title="Edit">
              <i class="ti ti-edit-circle f-18"></i>
            </a>
          </li>
        </ul>
        <div class="flex-grow-1 text-end">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end cal-event-offcanvas" tabindex="-1" id="calendar-add_edit_event">
  <div class="offcanvas-header">
    <h3 class="f-w-600 text-truncate">Input Agenda</h3>
    <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
      <i class="ti ti-x f-20"></i>
    </a>
  </div>
  <div class="offcanvas-body">
    <form id="pc-form-event" novalidate>
      <div class="form-group">
        <label class="form-label">Nama Kegiatan</label>
        <input type="text   " class="form-control" id="pc-e-title" placeholder="Masukkan Nama Kegiatan" autofocus>
      </div>
      <div class="form-group">
        <label class="form-label">Jenis Kegiatan</label>
        <select class="form-select" id="pc-e-type">
          <option value="empty" selected>dl</option>
          <option value="event-primary">Akbar</option>
          <option value="event-secondary">Tentatif</option>
        </select>
      </div>
      <div class="form-group m-0">
        <input type="hidden" class="form-control" id="pc-e-sdate">
        <input type="hidden" class="form-control" id="pc-e-edate">
      </div>
      <div class="form-group">
        <label class="form-label">Tanggal Pelaksanaan</label>
        <input type="text" class="form-control @error('tgl_survey') is-invalid @enderror" placeholder="isi tanggal" name="tgl_survey" id="pc-datepicker-1" value="{{ old('tgl_survey') }}">
      </div>
      <div class="form-group">
            <label class="form-label">Tempat Pelaksanaan</label>
            <input type="text" class="form-control" placeholder="Masukkan Tempat Pelaksanaan" id="pc-e-location">
        </div>
        <div class="form-group">
            <label class="form-label">Pelaksana Kegiatan</label>
            <input type="text" class="form-control" placeholder="Masukkan Pelaksana Kegiatan" id="pc-e-organizer">
        </div>
        <div class="form-group">
            <label class="form-label">Kelengkapan Pelaksanaan</label>
            <input type="text" class="form-control" placeholder="Masukkan Kelengkapan Pelaksanaan" id="pc-e-equipment">
        </div>
        <div class="form-group">
            <label class="form-label">Berkas Pelaksanaan</label>
            <input type="text" class="form-control" placeholder="Masukkan Berkas Pelaksanaan" id="pc-e-documents">
        </div>
        <div class="form-group">
            <label class="form-label">Catatan</label>
            <textarea class="form-control" placeholder="Masukkan Catatan" rows="6" id="pc-e-notes"></textarea>
        </div>
     
      <div class="row justify-content-between">
        <div class="col-auto"><button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas"><i class="align-text-bottom me-1 ti ti-circle-x"></i> Close</button></div>
        <div class="col-auto">
          <button id="pc_event_add" type="button" class="btn btn-secondary" data-pc-action="add">
            <span id="pc-e-btn-text"><i class="align-text-bottom me-1 ti ti-calendar-plus"></i> Add</span>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>


@endsection

@section('scripts')
<!-- [Page Specific JS] start -->
 <script>
        (function() {
        const d_week = new Datepicker(document.querySelector('#pc-datepicker-1'), {
          buttonClass: 'btn'
        });
      })();
    </script>
<!-- calender js -->
<script src="{{ URL::asset('build/js/plugins/index.global.min.js') }}"></script>
<!-- Sweet Alert -->
<script src="{{ URL::asset('build/js/plugins/sweetalert2.all.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/calendar.js') }}"></script>
<!-- [Page Specific JS] end -->
@endsection