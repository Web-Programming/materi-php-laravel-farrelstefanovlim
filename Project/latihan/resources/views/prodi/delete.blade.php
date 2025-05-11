@extends('layout.master')

@section('title', 'Hapus Prodi')

@section('content')
<div class="alert alert-danger">
  <h4>Yakin ingin menghapus prodi ini?</h4>
  <p>{{ $prodi->Nama_Prodi }}</p>
  <form action="{{ route('prodi.destroy', $prodi->Nama_Prodi) }}" method="POST">
    @csrf @method('DELETE')
    <button type="submit" class="btn btn-danger">Hapus</button>
    <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Batal</a>
  </form>
</div>
@endsection