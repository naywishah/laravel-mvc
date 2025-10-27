<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function transactionDetail(){
        return $this->hasMany(TransactionDetail::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
