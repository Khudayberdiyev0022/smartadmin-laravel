<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title>
    Admin Dashboard
  </title>
  <meta name="description" content="SmartAdmin WebApp">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
  <!-- Call App Mode on ios devices -->
  <meta name="apple-mobile-web-app-capable" content="yes"/>
  <!-- Remove Tap Highlight on Windows Phone IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <!-- base css -->
  <link rel="stylesheet" media="screen, print" href="{{ asset('assets/css/vendors.bundle.css') }}">
  <link rel="stylesheet" media="screen, print" href="{{ asset('assets/css/app.bundle.css') }}">
  <link rel="stylesheet" media="screen, print" href="{{ asset('assets/css/datagrid/datatables/datatables.bundle.css') }}">
  <!-- Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
  <link rel="mask-icon" href="{{ asset('assets/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
</head>
<body class="mod-bg-1 ">
<!-- DOC: script to save and load page settings -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
  <div class="page-inner">
    @include('admin.includes.sidebar')
    <div class="page-content-wrapper">
      @include('admin.includes.header')
      @yield('content')
      @include('admin.includes.footer')
    </div>
    @include('admin.includes.quick-menu')
  </div>
</div>
<!-- END Page Wrapper -->

<script src="{{ asset('assets/js/vendors.bundle.js') }}"></script>
<script src="{{ asset('assets/js/app.bundle.js') }}"></script>
<script src="{{ asset('assets/js/statistics/peity/peity.bundle.js') }}"></script>
<script src="{{ asset('assets/js/statistics/flot/flot.bundle.js') }}"></script>
<script src="{{ asset('assets/js/statistics/easypiechart/easypiechart.bundle.js') }}"></script>
<script src="{{ asset('assets/js/datagrid/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
