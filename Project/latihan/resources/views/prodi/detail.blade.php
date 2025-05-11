@extends('layout.master')

@section('title', 'Tampil Prodi')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Prodi</h3>
  </div>
  <div class="card-body">
    <p><strong>nama_prodi:</strong> {{ $prodi->nama_prodi }}</p>
    <p><strong>jumlah_sks:</strong> {{ $prodi->jumlah_sks }}</p>
    <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection