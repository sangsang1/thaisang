<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    //
    protected $table='TheLoai';

    function sanpham(){
    	return $this->hasMany('App\SanPham','idTL','id');
    }
}
