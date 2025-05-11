@extends('layout.master')

@section('title', 'Tampil Materi')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail Materi</h3>
  </div>
  <div class="card-body">
    <p><strong>Judul:</strong> {{ $materi->judul }}</p>
    <a href="{{ route('materi.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection