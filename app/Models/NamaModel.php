<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
protected $table = "tb_petugas";
protected $primaryKey = 'petugas_id';
protected $fillable = ['petugas_nim', 'petugas_nama',
'petugas_jabatan', 'petugas_alamat'];

}
