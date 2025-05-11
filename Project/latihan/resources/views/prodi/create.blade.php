@extends('layout.master')

@section('title', 'Tambah Prodi')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Prodi</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('prodi.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label>Nama Prodi</label>
        <input type="text" name="judul" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection