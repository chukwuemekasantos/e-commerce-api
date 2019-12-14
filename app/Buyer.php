<?php

namespace App;

use App\Transaction;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    public function transactions()
    {
    	return $this->hasMany(Transaction::class);
    }
}
