<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $table='transaksi';
    public $timestamps = false;

    public function transaksidetail(){
        return $this->hasMany('App\Models\TransaksiDetail');      
    }
}
