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
<script src="{{ mix('js/admin-index.js') }}"></script>
<script type="text/javascript">
    var url= '{{  url('') }}';
    var csrf_token= '{{ csrf_token() }}';
</script>
</body>
</html>
