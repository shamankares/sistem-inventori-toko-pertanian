<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
	protected $fillable = ['nama', 'alamat'];
	public $timestamps = false;

	public function products() {
		return $this->hasMany(Product::class);
	}
}
