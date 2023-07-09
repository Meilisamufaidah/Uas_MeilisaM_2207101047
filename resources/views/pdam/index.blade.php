@extends('layouts.app')

@section('content')

<div class="container">
    <h3>
        Daftar Tamu
    </h3>

<a class="btn btn-primary btn-sm float-end" href="{{ url('pdam/create') }}">Tambah Data</a>
        <br>
        <br>
        <form class="form" method="get" action="{{ route('search') }}">
                 <div class="form-group w-50 mb-3">
                    <label for="search" class="d-block mr-2">Pencarian</label>
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari berdasarkan nama">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
            </form>

 <table class="table table-borderless table-dark">
            <tr>
                <td>TGL TAGIHAN</td>
                <td>NO PELANGGAN</td>
                <td>NAMA PELANGGAN</td>
                <td>JUMLAH METER</td>
                <td>BIAYA</td>
                <td colspan="2" align="center">AKSI</td>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->tgl_tagihan }}</td>
                    <td>{{ $row->no_pelanggan }}</td>
                    <td>{{ $row->nama_pelanggan }}</td>
                    <td>{{ $row->jumlah_meter }}</td>
                    <td>{{ $row->biaya }}</td>
                    <td>

                        <a href="{{ url('pdam/' . $row->id_pelanggan . '/edit') }}" class="btn btn-warning btn-sm" role="button">
                            Edit
                        </a>
                    
                    </td>
                   <td>
                        <form action="{{ url('pdam/' . $row->id_pelanggan) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm">
                                

                            Hapus</button>
                        </form>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>
@endsection