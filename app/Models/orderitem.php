<?php

namespace App\Models;

use App\Models\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class orderitem extends Model
{
    use HasFactory;

    protected $table = 'order_product';

    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class,'Product_id','id');
    }
}
