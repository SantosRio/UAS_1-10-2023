@extends('layouts.app')

 @section('content')

 <div class="container">

 <h3>Edit Data Mahasiswa</h3>
 <form action="{{ url('/mahasiswa/' . $row->mhsw_id) }}" method="POST">
 <input name="_method" type="hidden" value="PATCH">
 @csrf
 <table>
 <tr>
 <td>NIM</td>
 <td><input type="text" name="mhsw_nim" value="{{ $row->mhsw_nim }}"></td>
 </tr>
 <tr>
 <td>NAMA</td>
 <td><input type="text" name="mhsw_nama" value="{{ $row->mhsw_nama }}"></td>
 </tr>
 <tr>
 <td>JURUSAN</td>
 <td> <select name="mhsw_jurusan" class="form-control">
                <option value="">-- Pilih Departemen --</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                </select>
 </tr>
 <tr>
 <td>ALAMAT</td>
 <td><input type="text" name="mhsw_alamat" value="{{ $row->mhsw_alamat }}"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" value="UPDATE"></td>
 </tr>
 </table>
 </form>
 </div>

 @endsection
