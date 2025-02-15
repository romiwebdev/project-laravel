@extends('layouts.master')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('breadcrumb', 'Dashboard')

@section('content')
<!-- Kotak Informasi Utama -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Selamat Datang di Dashboard</h3>

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
    Selamat datang! Anda dapat mulai membuat aplikasi yang luar biasa di sini. Jelajahi fitur-fitur yang tersedia dan manfaatkan semua alat yang ada untuk meningkatkan produktivitas Anda.
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    Terima kasih telah menggunakan aplikasi kami. Jika Anda memiliki pertanyaan, jangan ragu untuk menghubungi tim dukungan kami.
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->
@endsection