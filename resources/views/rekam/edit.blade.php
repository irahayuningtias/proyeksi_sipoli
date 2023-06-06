<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIPOLI - Rekam Medis</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <span class="brand-text font-weight-bold">SIPOLI</span>
    </a>

    <!--Sidebar -->
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pasien" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pasien
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="obat" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Obat
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="alat" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Alat Medis
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="rekam" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Rekam Medis
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="pemasukan" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Pemasukan
                <i class="fas fa-angle-left right"></i>
                </p>
              </a>
          </li>
          <li class="nav-item">
              <a href="pengeluaran" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Pengeluaran
                <i class="fas fa-angle-left right"></i>
                </p>
              </a>
          </li>
          <li>
          <a class="dropdown-item"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Rekam Medis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
              <li class="breadcrumb-item active">Rekam Medis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Rekam Medis</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('rekam/'.$rekam->id) }}">
                @csrf
                @method('PUT')

                  <div class="form-group">
                    <label for="inputIdStaf">ID Staf Kesehatan</label>
                    <input type="id_staf" class="form-control" id="inputIdStaf" placeholder="" name="id_adminrm">
                    @foreach($errors->get('id_adminrm') as $msg)
                      <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <label for="inputIdPasien">ID Pasien</label>
                    <input type="id_pasien" class="form-control" id="inputIdPasien" placeholder="" name="id_ps">
                    @foreach($errors->get('id_ps') as $msg)
                      <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <label for="inputTglPeriksa">Tanggal Periksa</label>
                    <input type="date" class="form-control" id="inputTglPeriksa" placeholder="" name="tgl_periksa">
                    @foreach($errors->get('tgl_periksa') as $msg)
                      <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <label for="inputJenisPenyakit">Jenis Penyakit</label>
                    <input type="jenis_penyakit" class="form-control" id="inputJenisPenyakit" placeholder="" name="jenis_penyakit">
                    @foreach($errors->get('jenis_penyakit') as $msg)
                      <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                  </div>
                  <div class="form-group">
                    <label for="inputKeluhan">Keluhan</label>
                    <input type="keluhan" class="form-control" id="inputKeluhan" placeholder="" name="keluhan">
                    @foreach($errors->get('keluhan') as $msg)
                      <p class="text-danger">{{ $msg }}</p>
                    @endforeach
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2023 <a href="">SIPOLI - Kelompok 1 SIB 3D</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
