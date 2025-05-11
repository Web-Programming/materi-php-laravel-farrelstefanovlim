@extends('layout.master')

@section('title', 'Tambah Dosen')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Dosen</h3>
    </div>
    <div class="card-body">
    <form action="{{ route('dosen.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label>Nomor Dosen</label>
        <input type="text" name="NIP" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection