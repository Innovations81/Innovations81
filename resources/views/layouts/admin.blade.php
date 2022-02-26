<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>GOA 247</title>
  <link rel="stylesheet" href="{{ mix('css/admin.css') }}">
</head>
<body>

   <!-- Main Wrapper -->
  <section class="main-wrapper">

  <!-- Main Sidebar Container -->
  @include('partials.sidebar')

  <!-- Navbar -->
  <div class="main-content-block">
  @include('partials.header')
  <!-- /.navbar -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  @include('partials.footer')
  </div>
</section>
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/jquery.validate.js') }}"></script>
<script src="{{ url('js/popper.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>

<script src="{{ url('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('js/jszip.min.js') }}"></script>
<script src="{{ url('js/pdfmake.min.js') }}"></script>
<script src="{{ url('js/vfs_fonts.js') }}"></script>
<script src="{{ url('js/buttons.html5.min.js') }}"></script>
<script src="{{ url('js/buttons.print.min.js') }}"></script>
<script src="{{ url('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ url('js/custom/custom.js') }}"></script>
<script src="{{ url('js/custom/admin-custom.js') }}"></script>
<script src="{{ url('js/custom/admin-addplayers.js') }}"></script>
<script type="text/javascript">
    var url= '{{  url('') }}';
    var csrf_token= '{{ csrf_token() }}';
</script>
@yield('js_after')
</body>
</html>
