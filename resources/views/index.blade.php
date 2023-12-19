@extends('layout')

@section('content')
<h1>Reservasi Cafe By Piw ☕</h1>
<link rel="stylesheet" href="/css/style.css">
<a type="button" class="btn btn-primary" href="{{ route('cafe.create') }}">Tambah</a>

<table class="table">
  <div class="input box">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No Telepon</th>
        <th scope="col">Email</th>
        <th scope="col">Tanggal Reservasi</th>
        <th scope="col">Waktu Mulai</th>
        <th scope="col">Waktu Selesai</th>
        <th scope="col">Jumlah Tamu</th>
        <th scope="col">No Meja</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cafe as $item)
      <tr>
        <th scope="row">{{ $item->id }}</th>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->alamat }}</td>
        <td>{{ $item->no_telepon }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->tanggal_reservasi }}</td>
        <td>{{ $item->waktu_mulai }}</td>
        <td>{{ $item->waktu_selesai }}</td>
        <td>{{ $item->jumlah_tamu }}</td>
        <td>{{ $item->no_meja }}</td>
        <td>
          <a href="{{ url('/cafe/'. $item->id) }}" title="View Cafe"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
          <form action="{{ route('cafe.destroy', $item->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('cafe.edit', $item->id) }}">Ubah</a>

            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </div>
</table>
@endsection