@extends('layouts.app')

 @section('content')

 <div class="container">

 <h3>Edit Data Petugas</h3>
 <form action="{{ url('/petugas/' . $row->petugas_id) }}" method="POST">
 <input name="_method" type="hidden" value="PATCH">
 @csrf
 <table>
 <tr>
 <td>NIM</td>
 <td><input type="text" name="petugas_nim" value="{{ $row->petugas_nim }}"></td>
 </tr>
 <tr>
 <td>NAMA</td>
 <td><input type="text" name="petugas_nama" value="{{ $row->petugas_nama }}"></td>
 </tr>
 <tr>
 <td>JURUSAN</td>
 <td> <select name="petugas_Jabatan" class="form-control">
                <option value="">-- Pilih Jabatan --</option>
                <option value="Pustakawan">Pustakawan</option>
                <option value="Asisten Pustakawan">Asisten Pustakawan</option>
                <option value="Spesialis Koleksi">Spesialis Koleksi</option>
                </select>
 </tr>
 <tr>
 <td>ALAMAT</td>
 <td><input type="text" name="petugas_alamat" value="{{ $row->petugas_alamat }}"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="UPDATE"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection
