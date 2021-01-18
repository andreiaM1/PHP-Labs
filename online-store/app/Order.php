<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Order extends Model
{
    public $fillable = ['user_id','price', 'quantity', 'order_date', 'status'];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
