@extends('layouts.main')

@section('title', 'Calendar')
@section('breadcrumb-item', 'Application')

@section('breadcrumb-item-active', 'Calendar')

@section('css')
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

      

    </div>
  </div>
</div>

<div class="offcanvas offcanvas-end cal-event-offcanvas" tabindex="-1" id="calendar-add_edit_event">
  
</div>


@endsection

@section('scripts')
<!-- [Page Specific JS] start -->
<!-- calender js -->
<script src="{{ URL::asset('build/js/plugins/index.global.min.js') }}"></script>
<!-- Sweet Alert -->
<script src="{{ URL::asset('build/js/plugins/sweetalert2.all.min.js') }}"></script>
<script src="{{ URL::asset('build/js/pages/calendar.js') }}"></script>
<!-- [Page Specific JS] end -->
@endsection 