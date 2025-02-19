@extends('layouts.master')

@section('title', 'Edit Cast')

@section('header', 'Edit Cast')

@section('breadcrumb', 'Cast / Edit')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Cast</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('cast.update', $cast->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $cast->name }}" required>
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="number" name="age" class="form-control" value="{{ $cast->age }}" required>
            </div>
            <div class="form-group">
                <label>Bio</label>
                <textarea name="bio" class="form-control">{{ $cast->bio }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
