@extends('layout')

@section('content')
    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
          @endforeach
        </ul>
      </div>
    @endif

    <link rel="stylesheet" href="/css/style.css">
    <h1>Ubah</h1>

    <form action="{{ route('cafe.update', $cafe->id) }}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <label for="inputNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="inputNama" name="nama" value="{{ $cafe->nama }}">
  </div>
  <div class="mb-3">
    <label for="inputAlamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="inputAlamat" name="alamat" value="{{ $cafe->alamat }}">
  </div>
  <div class="mb-3">
    <label for="inputNo_Telepon" class="form-label">No Telepon</label>
    <input type="number" class="form-control" id="inputNo_Telepon" name="no_telepon" value="{{ $cafe->no_telepon }}">
  </div>
  <div class="mb-3">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="text" class="form-control" id="inputEmail" name="email" value="{{ $cafe->email }}">
  </div>
  <div class="mb-3">
    <label for="inputTanggal_Reservasi" class="form-label">Tanggal Reservasi</label>
    <input type="date" class="form-control" id="inputTanggal_Reservasi" name="tanggal_reservasi" value="{{ $cafe->tanggal_reservasi }}">
  </div>
  <div class="mb-3">
    <label for="inputWaktu_Mulai" class="form-label">Waktu Mulai</label>
    <input type="text" class="form-control" id="inputWaktu_Mulai" name="waktu_mulai" value="{{ $cafe->waktu_mulai }}">
  </div>
  <div class="mb-3">
    <label for="inputWaktu_Selesai" class="form-label">Waktu Selesai</label>
    <input type="text" class="form-control" id="inputWaktu_Selesai" name="waktu_selesai" value="{{ $cafe->waktu_selesai }}">
  </div>
  <div class="mb-3">
    <label for="inputJumlah_Tamu" class="form-label">Jumlah Tamu</label>
    <input type="number" class="form-control" id="inputJumlah_Tamu" name="jumlah_tamu" value="{{ $cafe->jumlah_tamu }}">
  </div>
  <div class="mb-3">
    <label for="inputNo_Meja" class="form-label">No Meja</label>
    <input type="number" class="form-control" id="inputNo_Meja" name="no_meja" value="{{ $cafe->no_meja }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection