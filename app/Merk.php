<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    public $table = 'tb_merk';
    public $fillable = ['merk'];
    public $primaryKey = 'id_merk';

    public function Mobil() {
        return $this->belongsTo('App\Mobil', 'id_mobil', 'id_mobil');
    }
}
