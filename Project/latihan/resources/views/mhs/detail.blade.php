@extends('layout.master')

@section('title', 'Tampil Mahasiswa')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Mahasiswa</h3>
  </div>
  <div class="card-body">
    <p><strong>NPM:</strong> {{ $mahasiswa->NPM }}</p>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection