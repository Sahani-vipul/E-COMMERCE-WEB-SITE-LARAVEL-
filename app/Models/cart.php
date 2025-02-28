<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';

    public function product(){

        return $this->belongsTo(product::class,'Product_id','id');
    }
}
