<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'o_id';

    public function tb_orderItem()
    {
        return $this->hasMany(tb_orderItem::class, 'oItem_orderId');
    }

    public function o_pack_stat()
    {
        return $this->belongsTo(tb_packstatus::class, 'o_pack_stat', 'pac_stat_id');
    }

    public function product()
    {
        return $this->hasOne(tb_product::class, 'prod_id', 'oItem_product');
    }

}
