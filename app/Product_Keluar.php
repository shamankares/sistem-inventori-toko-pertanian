<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Keluar extends Model
{
    protected $table = 'product_keluar';
    public $timestamps = false;
    protected $fillable = ['tanggal', 'product_id','qty'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
