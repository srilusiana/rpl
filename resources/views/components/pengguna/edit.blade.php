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
        <section class="content">
            <!-- Default Box -->
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h3 class="card-title">Edit Pengguna</h3>
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
                    <form action="{{ route('pengguna.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Menggunakan Grid System -->
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama:</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    name="nama" 
                                    id="nama" 
                                    class="form-control" 
                                    value="{{ $user->nama }}" 
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">Username:</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    name="username" 
                                    id="username" 
                                    class="form-control" 
                                    value="{{ $user->username }}" 
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    class="form-control" 
                                    value="{{ $user->email }}" 
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">Password (kosongkan jika tidak ingin mengubah):</label>
                            <div class="col-sm-9">
                                <input 
                                    type="password" 
                                    name="password" 
                                    id="password" 
                                    class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noTelp" class="col-sm-3 col-form-label">No Telepon:</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    name="noTelp" 
                                    id="noTelp" 
                                    class="form-control" 
                                    value="{{ $user->noTelp }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenisKelamin" class="col-sm-3 col-form-label">Jenis Kelamin:</label>
                            <div class="col-sm-9">
                                <select 
                                    name="jenisKelamin" 
                                    id="jenisKelamin" 
                                    class="form-control">
                                    <option value="Laki-laki" {{ $user->jenisKelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ $user->jenisKelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fotoProfil" class="col-sm-3 col-form-label">Foto Profil:</label>
                            <div class="col-sm-9">
                                <input 
                                    type="file" 
                                    name="fotoProfil" 
                                    id="fotoProfil" 
                                    class="form-control-file">
                            </div>
                        </div>

                    <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-info btn-sm">Update</button>
                    <button type="button" class="btn btn-danger btn-sm" onclick="window.history.back()">Batal</button>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </section>


    </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset('admin/plugins/jquery/jquery.min.js')}} "></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('admin/dist/js/adminlte.min.js')}} "></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset('admin/dist/js/demo.js')}} "></script>
  </body>
</html>
