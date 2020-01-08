<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $primaryKey = 'id_petugas';
    protected $fillable = [
    	'username', 'password', 'nama_petugas', 'id_level'
    ];
}
