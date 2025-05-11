@extends('layout.master')

@section('title', 'Tampil Dosen')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Data Dosen</h3>
  </div>
  <div class="card-body">
    <p><strong>NIP Dosen:</strong> {{ $dosen->NIP }}</p>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection