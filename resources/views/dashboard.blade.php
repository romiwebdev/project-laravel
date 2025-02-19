@extends('layouts.master')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('breadcrumb', 'Dashboard')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Selamat Datang di Halaman Cast</h3> 

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Sembunyikan">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Hapus">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <a href="{{ route('cast.create') }}" class="btn btn-primary mb-3">Tambah Cast</a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Umur</th>
          <th>Bio</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($casts as $cast)
        <tr>
          <td>{{ $cast->id }}</td>
          <td>{{ $cast->name }}</td>
          <td>{{ $cast->age }}</td>
          <td>{{ $cast->bio }}</td>
          <td>
            <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info btn-sm">Detail</a>
            <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
