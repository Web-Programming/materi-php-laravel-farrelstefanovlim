@extends('layout.master')

@section('title', 'Data Dosen')

@section('content')
    <div class="card-header">
        <h3 class="card-title">Daftar Dosen</h3>
        <a href="{{ route('dosen.create') }}" class = "btn btn-primary float-right">Tambah</a>
    </div>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Index</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Index</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Fixed Header Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>no</th>
                      <th>NIP</th>
                      <th>nama_dosen</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($dosen as $d)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $d['NIP'] }}</td>
                      <td>{{ $d['nama_dosen'] }}</td>
                      <td>
                        <a href="{{ route('dosen.show', $d['NIP']) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('dosen.edit', $d['NIP']) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dosen.destroy', $d['NIP']) }}" method="POST" style="display:inline;">
                          @csrf @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

