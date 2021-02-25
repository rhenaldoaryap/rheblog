<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <link rel="shortcut icon" href="{{ asset('images/rhedev.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('admin') }}/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://www.instagram.com/rhenaldoarya/" target="_blank" class="nav-link">Contact</a>
      </li>
    </ul>

    <form class="form-inline ml-3" action="{{ route('dashboard') }}" method="GET">
      @csrf
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search By Title" aria-label="Search" name="search" value="{{ request()->query('search') }}">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
      <img src="{{ asset('images/rhedev.png') }}" alt="Rhedev Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rhedev</span>
    </a>

    <div class="sidebar">
      <div class="user-panel my-3 text-center text-white">
        <div class="info">
          <p>You login as</p>
          <p class="bg-light font-weight-bold">{{ Auth::user()->name }}</p>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                All menus
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-columns"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link {{ (request()->is('admin/category*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tags"></i>
                  <p>Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('tag.index') }}" class="nav-link {{ (request()->is('admin/tag*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tag"></i>
                  <p>Tags</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('posts.index') }}" class="nav-link {{ (request()->is('admin/post*')) ? 'active' : ''}}">
                  <i class="nav-icon fas fa-clipboard"></i>
                  <p>Post</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item bg-danger">
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline-flex">
              @csrf
                Logout
              </form>
            </a>
          </li>
          <li class="text-center mt-5">
            <a href="{{ route('home') }}" class="btn btn-primary text-white" target="_blank">
              <p class="mb-0">
                View Website
              </p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    @yield('content')
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      Ready to work
    </div>
    <strong>Copyright &copy; 2020-<?php echo date("Y"); ?> <a href="{{ route('home') }}">RheDev_</a>.</strong> All rights reserved.
  </footer>
</div>


<!-- jQuery -->
<script src="{{ asset('admin') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin') }}/js/adminlte.min.js"></script>
<script src="{{ asset('admin') }}/js/bs-custom-file-input.min.js"></script>
@yield('script')
@include('sweetalert::alert')
<script>
  $(document).ready(function () {
    bsCustomFileInput.init()
  })
</script>
</body>
</html>