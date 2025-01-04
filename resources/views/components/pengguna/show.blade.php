<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengguna</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css')}} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }} ">
  </head>
  <body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    @include('components.pengguna.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('components.pengguna.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h3 class="card-title">Detail Pengguna</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <h4 class="text-center mb-4">Informasi Pengguna</h4>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Name:</strong></div>
                        <div class="col-md-9">{{ $user->nama }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Username:</strong></div>
                        <div class="col-md-9">{{ $user->username }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Email:</strong></div>
                        <div class="col-md-9">{{ $user->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Phone:</strong></div>
                        <div class="col-md-9">{{ $user->noTelp }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Gender:</strong></div>
                        <div class="col-md-9">{{ $user->jenisKelamin }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Profile Picture:</strong></div>
                        <div class="col-md-9">
                            <img src="{{ asset('storage/' . $user->fotoProfil) }}" alt="Profile Picture" class="img-thumbnail" style="width: 150px; height: 150px;">
                        </div>
                        </div>
                        <div class="card-footer text-center bg-light">
                        <button class="btn btn-danger btn-sm" onclick="window.history.back()">Kembali</button>
                    </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
  </div>
  <!-- ./wrapper -->

  </body>
</html>
