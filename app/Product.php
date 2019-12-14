<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	const Unavailable_Product = 'unvailable';

	const Available_Product = 'available'; 

    protected $fillable = ['name','description','quantity','status','image','seller_id'];


    public function isAvailable()
    {
    	return $this->status == Product::Available_Product;
    }

    public function seller()
    {
    	return $this->belongsTo(Seller::class);
    }

    public function transactions()
    {
    	return $this->hasMany(Transaction::class);
    }

    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }
}
