<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table='produk';
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
