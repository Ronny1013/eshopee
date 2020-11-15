<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiDetail extends Model
{
    use HasFactory;

    protected $table='transaksi_detail';

    public function barangs(){
        return $this->belongsTo('App\Models\Barang');
	}   

    public function transaksi(){
        return $this->belongsTo('App\Models\Transaksi');
    }
}
