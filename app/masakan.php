<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class masakan extends Model
{
    protected $table = 'masakans';
    protected $primaryKey = 'id_masakan';
    protected $fillable = ['nama_masakan', 'harga', 'jumlah'];


public function order()
    {
        return $this->hasOne(order::class, 'id', 'id_masakan');
    }

}