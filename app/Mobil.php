<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    public $table = "tb_mobil";
    protected $fillable = ['foto_mobil','plat_mobil','nama_mobil','id_merk','tahun','harga','warna'];
    protected $primaryKey = 'id_mobil';
    public $timestamps = false;
    
    public function Merk(){
        return $this->hasMany('App\Merk', 'id_merk','id_merk');
    }
    
}
