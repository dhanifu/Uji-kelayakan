<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $primaryKey = [
    	'nama', 'kondisi', 'keterangan',
    	'jumlah', 'id_jenis', 'tanggal_register',
    	'id_ruang', 'kode_inventaris', 'id_petugas'
    ];
}
