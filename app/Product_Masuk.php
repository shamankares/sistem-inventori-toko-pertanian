<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Masuk extends Model
{
    protected $table = 'product_masuk';
    public $timestamps = false;
    protected $fillable = ['tanggal', 'product_id','supplier_id','qty'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
