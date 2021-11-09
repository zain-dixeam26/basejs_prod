<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
	protected $primaryKey = 'pro_id';
	public $timestamps = true;
	protected $fillable = ['label','description','image','cat_id','created_at','updated_at'];
	public static function boot()
    {
        parent::boot();
    }
}
