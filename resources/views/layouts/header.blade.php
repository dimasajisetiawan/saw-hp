<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        @if (Request::is('dashboard'))
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></li>
          </ol>
        </div><!-- /.col -->
        @endif
        @if (Request::is('tambah_pengguna'))
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard">Pengguna</a></li>
            <li class="breadcrumb-item active"><a href="/tambah_pengguna">Tambah Pengguna</a></li>
          </ol>
        </div><!-- /.col -->
        @endif
        @if (Request::is('buat_level_satu'))
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard">Setup Rekening</a></li>
            <li class="breadcrumb-item active"><a href="/tambah_pengguna">Buat Level Satu</a></li>
          </ol>
        </div><!-- /.col -->
        @endif
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
