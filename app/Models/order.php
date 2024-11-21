<?php

namespace App\Models;

use App\Models\orderitem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;

    protected $table = 'order';

    public function orderitem(){
        
        return $this->hasMany(orderitem::class);
        // return $this->belongsTo(product::class,'Product_id','id');

    }

    public function user(){
        return $this->belongsTo(User::class,'User_id','id');
    }

    
}
