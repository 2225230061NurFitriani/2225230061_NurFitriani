@extends('layout')
@section('content')

<link rel="stylesheet" href="/css/style.css">
<div class="tampil">
    <div class="judul"><h2>Bukti Reservasi Cafe By Piw ☕</h2></div>
    <div class="card-body">
     <div class="card-body">
        <h5 class="card-title">Nama : {{ $cafe->nama }}</h5>
        <h5 class="card-title">Alamat : {{ $cafe->alamat }}</h5>
        <h5 class="card-title">No Telepon : {{ $cafe->no_telepon }}</h5>
        <h5 class="card-title">Email : {{ $cafe->email }}</h5>
        <h5 class="card-title">Tanggal Reservasi : {{ $cafe->tanggal_reservasi }}</h5>
        <h5 class="card-title">Waktu Mulai : {{ $cafe->waktu_mulai }}</h5>
        <h5 class="card-title">Waktu Selesai : {{ $cafe->waktu_selesai }}</h5>
        <h5 class="card-title">Jumlah Tamu : {{ $cafe->jumlah_tamu }}</h5>
        <h5 class="card-title">No Meja : {{ $cafe->no_meja }}</h5>
        <h5></h5>
        <h5 class="card-title">Silahkan Simpan Bukti Reservasi Ini Untuk Diperiksa Oleh Pegawai Kami Pada Waktu Reservasi</h5>
    </div>
</div>
