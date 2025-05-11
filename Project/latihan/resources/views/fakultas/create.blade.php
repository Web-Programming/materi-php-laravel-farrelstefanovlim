@extends('layout.master')

@section('title', 'Tambah Fakultas')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Fakultas</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('fakultas.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label>Nama Fakultas</label>
        <input type="text" name="judul" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection