<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{ asset('backend/img/icons/icon-48x48.png') }}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>@yield('title')</title>

	<link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body>
	<div class="wrapper">
    @include('admin.layouts.sidebar')
    @include('admin.layouts.navbar')
    @yield('content')
    
    <footer class="footer">
      <div class="container-fluid">
        <div class="row text-muted">
          <div class="col-6 text-start">
            <p class="mb-0">
              @php
                $mytime = date('Y');
              @endphp
              <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Vareli Techsoft Pvt Ltd.</strong></a> - {{$mytime}}&copy;
            </p>
          </div>
          <div class="col-6 text-end">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
              </li>
              <li class="list-inline-item">
                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
              </li>
              <li class="list-inline-item">
                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
              </li>
              <li class="list-inline-item">
                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="{{ asset('backend/js/app.js') }}"></script>
  <script src="{{ asset('backend/js/custom.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
	<script>
		@if(Session::has('success'))
			toastr.options =
			{
				"closeButton" : true,
				"progressBar" : true
			}
			toastr.success("{{ session('success') }}");
		@endif

    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
</body>
</html>