<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id_order';
    protected $fillable = ['id_masakan', 'jumlah'];


    public function masakan()
    {
        return $this->hasOne(masakan::class, 'id', 'id_masakan');
    }

}
