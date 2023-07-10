@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Petugas</h3>
        <form action="{{ url('/petugas') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" class="form-control" name="petugas_nim">
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control" name="petugas_nama">
            </div>
            <div class="mb-3">
                <label>JABATAN</label>
                <select name="petugas_jurusan" class="form-control">
                <option value="">-- Pilih Jabatan --</option>
                <option value="Pustakawan">Pustakawan</option>
                <option value="Asisten Pustakawan">Asisten Pustakawan</option>
                <option value="Spesialis Koleksi">Spesialis Koleksi</option>
                </select>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <textarea class="form-control" name="petugas_alamat"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection