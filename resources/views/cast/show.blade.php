@extends('layouts.master')

@section('title', 'Detail Cast')

@section('header', 'Detail Cast')

@section('breadcrumb', 'Cast / Detail')

@section('content')
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Detail Pemain Film</h3>
  </div>
  <div class="card-body">
    <p><strong>Nama:</strong> {{ $cast->name }}</p>
    <p><strong>Usia:</strong> {{ $cast->age }}</p>
    <p><strong>Bio:</strong> {{ $cast->bio }}</p>
    <a href="{{ route('cast.index') }}" class="btn btn-secondary">Kembali</a>
  </div>
</div>
@endsection
