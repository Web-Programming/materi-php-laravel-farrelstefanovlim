@extends('layout.master')

@section('title', 'Hapus Fakultas')

@section('content')
<div class="alert alert-danger">
  <h4>Yakin ingin menghapus fakultas ini?</h4>
  <p>{{ $fakultas->nama_fk }}</p>
  <form action="{{ route('fakultas.destroy', $fakultas->nama_fk) }}" method="POST">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
    <a href="{{ route('fakultas.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection