<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'tb_customer';
    protected $fillable = ['nik','nama','jenkel','no_telp','email','alamat'];
    protected $primaryKey = 'id_customer';

    public $timestamps = false;
}
