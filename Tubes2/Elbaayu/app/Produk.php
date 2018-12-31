<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
     use SoftDeletes;
 
    protected $fillable = [
        'nama_produk', 'kategori'
    ];
    protected $dates = ['deleted_at'];
}
