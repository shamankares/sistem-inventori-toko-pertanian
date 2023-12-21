<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public $timestamps = false;
    protected $fillable = ['supplier_id','nama','harga','image','qty'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
