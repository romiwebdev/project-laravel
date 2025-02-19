@extends('layouts.master')

@section('title', 'Daftar Cast')

@section('header', 'Daftar Cast')

@section('breadcrumb', 'Cast')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Daftar Pemain Film</h3>
        <a href="{{ route('cast.create') }}" class="btn btn-primary float-right">Tambah Cast</a>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($casts as $cast)
                    <tr>
                        <td>{{ $cast->name }}</td>
                        <td>{{ $cast->age }}</td>
                        <td>{{ $cast->bio }}</td>
                        <td>
                            <a href="{{ route('cast.show', $cast->id) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('cast.edit', $cast->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('cast.destroy', $cast->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
