<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')  KEMENKUMHAM</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta
  name="description"
  content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
/>
<meta name="author" content="phoenixcoded" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ URL::asset('image/kemenkumham.png') }}" type="image/png">

    @yield('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @include('layouts.head-css')
</head>

<body class="layout-2" data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true"
    data-pc-direction="ltr" data-pc-theme="light">

    @include('layouts.loader')
    @include('layouts.sidebar')
    @include('layouts.topbar')

   
    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @if (View::hasSection('breadcrumb-item'))
                @include('layouts.breadcrumb')
            @endif
            <!-- [ Main Content ] start -->
            @yield('content')
            <h1>Kiriman Agenda</h1>

            <div class="row">
          <!-- DOM/Jquery table start -->
          <div class="col-sm-12">
            <div class="card">
              
              <div class="card-body">
                <div class="dt-responsive">
                  <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nama Kegiatan</th>
                        <th>Jenis Kegiatan</th>
                        <th>Tanggal Pelaksanaan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @php $nomor = 1; @endphp
                      @foreach ($agenda as $agenda)
                      <form action="{{ url('/update_status', $agenda->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Jika menggunakan metode PUT atau PATCH -->
                      <tr>
                         <td>{{ $nomor++ }}</td>
                        <td>{{ $agenda->user->name }}</td>
                        <td>{{ $agenda->nama_kegiatan }}</td>
                        <td>{{ $agenda->jenis_kegiatan }}</td>
                        <td>{{ \Carbon\Carbon::parse($agenda->start_date)->locale('id')->translatedFormat('d F Y') }} - {{ \Carbon\Carbon::parse($agenda->end_date)->locale('id')->translatedFormat('d F Y') }}</td>
                        <td>{{ $agenda->status }}</td>
                      
                        <td>
                        <button type="submit" name="status" value="Setuju"  class="btn btn-light-primary">Setuju</button>
                        <button type="submit" name="status" value="Tolak" class="btn btn-light-primary">Tolak</button>
                        <a href="{{ url('hapus_pengirim', $agenda->id) }}" class="btn btn-danger" onclick="confirmation(event)">Hapus</a>

                        </td>
                      </tr>
                    </form>
                      @endforeach

                     
                    </tbody>
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('layouts.footer')
    @include('layouts.customizer')

    @include('layouts.footerjs')
    <script>
        document.querySelector('.pc-sidebar .m-header .badge').classList.add('bg-dark');
        document.querySelector('.pc-sidebar .m-header .badge').classList.remove('bg-brand-color-2');
        layout_sidebar_change('dark');
        layout_caption_change('false');
        if (document.querySelector('.pc-sidebar .m-header .logo-lg')) {
            document.querySelector('.pc-sidebar .m-header .logo-lg').setAttribute('src', '/build/images/logo-white.svg');
            document.querySelector('.pc-sidebar .m-header').classList.add('bg-brand-color-2');
        }

        function changebrand(temp) {
            removeClassByPrefix(document.querySelector('.pc-sidebar .m-header'), "bg-");
            document.querySelector('.pc-sidebar .m-header').classList.add(temp);
        }
    </script>

<script>
      function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title:"Apakah Kamu Yakin Menghapus Data Ini ?",
            text: "Kamu tidak bisa mengembalikan data ini ",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willCancel) => {
            if (willCancel) {


                 
                window.location.href = urlToRedirect;
               
            }  


        });

        
    }
</script>

    @yield('scripts')

</body>
<!-- [Body] end -->

</html>
