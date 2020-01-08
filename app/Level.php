<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $primaryKey = 'id_level';
    protected $fillable = ['nama_level'];
}
