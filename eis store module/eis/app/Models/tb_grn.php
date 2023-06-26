<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_grn extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_grns';
    protected $primaryKey = 'grn_id';
    public function tb_purchaseorder()
    {
        return $this->belongsTo(tb_purchaseorder::class, 'grn_poid', 'po_id');
    }

    public function tb_purchaserequest()
    {
        return $this->belongsTo(tb_purchaserequest::class, 'po_id', 'pr_prodID');
    }

    public function tb_product()
    {
        return $this->belongsTo(tb_product::class, 'pr_prodID', 'prod_id');
    }

    public function tb_supplier()
    {
        return $this->belongsTo(tb_supplier::class, 'po_supplierID', 'sup_id');
    }

    public function tb_uom()
    {
        return $this->belongsTo(tb_uom::class, 'pr_uom', 'uom_id');
    }
}
