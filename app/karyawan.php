<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table ='karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = ['id_karyawan','nama_karyawan',
    'tmpt_tgl_lahir','jenis_kelamin','alamat_karyawan','no_tlp_karyawan','foto_karyawan'];
}
