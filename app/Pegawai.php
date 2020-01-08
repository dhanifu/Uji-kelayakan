<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
    	'nama_pegawai', 'nip', 'alamat'
    ];
}
