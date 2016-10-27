<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function barang()
    {
    	return $this->belongsTo('App\Barang','id_barang');
    } 

    public function pembeli()
    {
    	return $this->belongsTo('App\Pembeli','id_pembeli');
    }
}
