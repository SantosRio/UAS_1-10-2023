@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Tambah Data Mahasiswa</h3>
        <form action="{{ url('/mahasiswa') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIM</label>
                <input type="text" class="form-control" name="mhsw_nim">
            </div>
            <div class="mb-3">
                <label>NAMA</label>
                <input type="text" class="form-control" name="mhsw_nama">
            </div>
            <div class="mb-3">
                <label>JURUSAN</label>
                <select name="mhsw_jurusan" class="form-control">
                <option value="">-- Pilih Departemen --</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                </select>
            </div>
            <div class="mb-3">
                <label>ALAMAT</label>
                <textarea class="form-control" name="mhsw_alamat"></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection