@extends('layout.master')

@section('title', 'Tampil Fakultas')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail Fakultas</h3>
  </div>
  <div class="card-body">
    <p><strong>Judul:</strong> {{ $fakultas->nama_fk }}</p>
    <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection