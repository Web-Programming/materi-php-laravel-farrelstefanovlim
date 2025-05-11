@extends('layout.master')

@section('title', 'Hapus Materi')

@section('content')
<div class="alert alert-danger">
  <h4>Yakin ingin menghapus materi ini?</h4>
  <p>{{ $materi->judul }}</p>
  <form action="{{ route('materi.destroy', $materi->id) }}" method="POST">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
    <a href="{{ route('materi.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection
