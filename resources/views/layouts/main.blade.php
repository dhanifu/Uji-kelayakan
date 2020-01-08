<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/base/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('vendors/flag-icon-css/css/flag-icon.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/jquery-bar-rating/fontawesome-stars-o.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/jquery-bar-rating/fontawesome-stars.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/linearicons/style.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <!-- HEADER -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo text-white" href="/">Inventaris</a>
        <a class="navbar-brand brand-logo-mini" href="/">inventaris</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        @yield('search')
        <ul class="navbar-nav navbar-nav-right">
          @yield('tambah')
          <li class="nav-item dropdown d-flex mr-4 ">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
             <span>{{ Auth::user()->name }}</span> &nbsp;&nbsp;&nbsp; <i class="icon-submenu lnr lnr-chevron-down"></i>
           </a>
           <ul class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Settings</p>
            <li>
              <a class="dropdown-item preview-item" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="lnr lnr-exit"></i> {{ __('Logout') }}
              <form id="logout-form" action="/logout" method="POST">
                @csrf
              </form>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
<!-- partial -->
<!-- SIDEBAR -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/home">
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/jenis">
          <span class="menu-title">Jenis</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ruangs">
          <span class="menu-title">Ruang</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#userpages" aria-expanded="false" aria-controls="userpages">
          <!--i class="icon-head menu-icon"></i-->
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="userpages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/petugas"> Petugas </a></li>
            <li class="nav-item"> <a class="nav-link" href="/levels"> Level </a></li>
            <li class="nav-item"> <a class="nav-link" href="/pegawais"> Pegawai </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/inventaris">
          <span class="menu-title">Inventaris</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- CONTENT -->
  <!-- partial -->
  <div class="main-panel">
    @yield('content')
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="https://linkedin.com/mramdhani-102072003" target="_blank" class="text-muted"><u>mramdhani</u></a>. All rights reserved.</span>
      </div>
    </footer>
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- base:js -->
<script src="{{ asset('vendors/base/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{ asset('js/dashboard.js') }}"></script>
<!-- End custom js for this page-->
<script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{ asset('js/file-upload.js') }}"></script>
<script src="{{ asset('js/typeahead.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>
<script src="{{ asset('vendors/jquery/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</body>

</html>
