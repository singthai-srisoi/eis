<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_product;
use App\Models\tb_order_item;

class tb_order extends Model
{

    use HasFactory;
    protected $primaryKey = 'o_id';

    public $timestamps = false;

    public function o_pack_stat()
    {
        return $this->belongsTo(tb_packstatus::class, 'o_pack_stat', 'pac_stat_id');
    }

    public function tb_order_item()
    {
        return $this->hasMany(tb_order_item::class, 'oItem_orderId');
    }

    public function product()
    {
        return $this->hasOne(tb_product::class, 'prod_id', 'oItem_product');
    }
}
