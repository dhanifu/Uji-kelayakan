<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $primaryKey = 'id_jenis';
    protected $fillable = ['nama_jenis', 'kode_jenis', 'keterangan'];
}
