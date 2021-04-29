<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table = 'po';
    protected $fillable = [
        'no_po','product_id','customer_id','jumlah'
    ];
}
