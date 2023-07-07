<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_orderItem extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'oItem_id';
    protected $fillable = [
        'oItem_orderId',
        'oItem_product',
        'oItem_qty',
        'oItem_totalprice',
    ];

    function tb_order(){

        return $this->belongsTo(tb_order::class,'oItem_orderId');
    }
    function tb_product(){

        return $this->belongsTo(tb_product::class,'oItem_product');
    }
}
