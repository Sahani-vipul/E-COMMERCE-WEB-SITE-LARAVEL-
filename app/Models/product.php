<?php

namespace App\Models;
use App\Models\category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public function cate(){

        return $this->belongsTo(category::class,'cate_id','id');
    }
}
