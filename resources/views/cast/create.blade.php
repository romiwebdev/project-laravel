@extends('layouts.master')

@section('title', 'Tambah Cast')

@section('header', 'Tambah Cast')

@section('breadcrumb', 'Cast / Tambah')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Cast Baru</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cast.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Bio</label>
                <textarea name="bio" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
