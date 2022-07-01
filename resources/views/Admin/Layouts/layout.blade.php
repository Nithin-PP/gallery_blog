<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  @include('Admin.Layouts.header_css') 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('Admin.Layouts.header') 
@include('Admin.Layouts.sidebar')
@yield('content')
@include('Admin.Layouts.footer')
@include('Admin.Layouts.footer_js')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
