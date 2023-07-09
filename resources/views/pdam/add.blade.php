@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Pelanggan</h3>
        <form action="{{ url('/pdam') }}" method="POST">
            @csrf
            <div class="mb-3 w-50">
                <label>TGL TAGIHAN</label>
                <input type="text" class="form-control" name="tgl_tagihan">
            </div>
            <div class="mb-3 w-50">
                <label>NO PELANGGAN</label>
                <input type="text" class="form-control" name="no_pelanggan">
            </div>
            <div class="mb-3 w-50">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="nama_pelanggan">
            </div>
            <div class="mb-3 w-50">
                <label>JUMLAH METER</label>
                <input type="text" class="form-control" name="jumlah_meter">
            </div>
            <div class="mb-3 w-50">
                <label>BIAYA</label>
                <input type="text" class="form-control" name="biaya">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
