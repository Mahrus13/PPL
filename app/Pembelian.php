<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table='pembelian';
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
