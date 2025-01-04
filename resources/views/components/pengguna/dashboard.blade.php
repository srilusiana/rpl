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
          <div class="card-header">
            <h1 class="card-title">Data Pengguna</h1>

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
        <a href="{{ route('pengguna.create') }}" class="btn btn-primary btn-sm"> Tambah data </a>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Gender</th>
              <th>Profile Picture</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->nama }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->noTelp }}</td>
              <td>{{ $user->jenisKelamin }}</td>
              <td>
                @if($user->fotoProfil)
                <img src="{{ asset('storage/' . $user->fotoProfil) }}" alt="Profile Photo" width="50">
                @else
                  <span>No photo</span>
                @endif
              </td>
              <td>
              <!-- Actions: View, Edit, Delete -->
                <a href="{{ route('pengguna.show', $user->id) }}" class="btn btn-info btn-sm"><i class="far fa-eye"></i> View</a>
                <a href="{{ route('pengguna.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                  <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{ $user->nama }}?')"><i class="far fa-trash-alt"></i> Delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </section>
      <!-- /.content -->
    </div>
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
