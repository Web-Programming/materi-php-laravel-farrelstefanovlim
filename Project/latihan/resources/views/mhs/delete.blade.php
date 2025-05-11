@extends('layout.master')

@section('title', 'Hapus Mahasiswa')

@section('content')
<div class="alert alert-danger">
  <h4>Yakin ingin menghapus mahasiswa ini?</h4>
  <p>{{ $mahasiswa->NPM }}</p>
  <form action="{{ route('mahasiswa.destroy', $mahasiswa->NPM) }}" method="POST">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection
