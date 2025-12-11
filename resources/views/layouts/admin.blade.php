<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard') | Admin</title>
    <!-- plugins:css -->
    <!-- Feather Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('feather/feather.css') }}">
<!-- Themify Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css" />

<!-- Vendor Base CSS (Bootstrap etc.) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

<!-- Material Design Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.2.96/css/materialdesignicons.min.css" >

<!-- DataTables Bootstrap 5 -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

<!-- DataTables Select CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- endinject -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
 
  </head>
  <body>
    <div class="container-scroller">
      
      @include('includes.header')
    <div class="container-fluid page-body-wrapper">
      
       @include('includes.sidebar')
       <div class="main-panel">
      
          @yield('content') 
        </div>
    </div>
    </div>
   <!-- jQuery (required for DataTables) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-..." crossorigin="anonymous"></script>

<!-- Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>

<!-- jQuery Cookie -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Optional: Feather Icons (if you use) -->
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

<script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @yield('scripts')
    <script> 
    </script>
  </body>
</html>