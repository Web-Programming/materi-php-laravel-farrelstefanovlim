@extends('layout.master')

@section('title', 'Hapus Dosen')

@section('content')
<div class="alert alert-danger">
  <h4>Yakin ingin menghapus dosen ini?</h4>
  <p>{{ $dosen->NIP }}</p>
  <form action="{{ route('dosen.destroy', $dosen->NIP) }}" method="POST">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection