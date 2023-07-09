@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Edit Data Pelanggan</h3>
        <form action="{{ url('/pdam/' . $row->id_pelanggan) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3 w-50">
                <label>TGL TAGIHAN</label>
                <input type="text" class="form-control" name="tgl_tagihan" value="{{ $row->tgl_tagihan }}">
            </div>
            <div class="mb-3 w-50">
                <label>NO PELANGGAN</label>
                <input type="text" class="form-control" name="no_pelanggan" value="{{ $row->no_pelanggan }}">
            </div>
            <div class="mb-3 w-50">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="nama_pelanggan" value="{{ $row->nama_pelanggan }}">
            </div>
            <div class="mb-3 w-50">
                <label>JUMLAH METER</label>
                <input type="text" class="form-control" name="jumlah_meter" value="{{ $row->jumlah_meter }}">
            </div>
            <div class="mb-3 w-50">
                <label>BIAYA</label>
                <input type="text" class="form-control" name="biaya" value="{{ $row->biaya }}">
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
