<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_product extends Model
{
    use HasFactory;
    protected $primaryKey = 'prod_id';
    public $timestamps = false;

    public function tb_productscategory()
    {
        return $this->belongsTo(tb_productscategory::class, 'prod_ctg','ctg_id');
    }

    public function tb_orderItem()
    {
        return $this->hasMany(tb_orderItem::class, 'oItem_orderId');
    }

}
