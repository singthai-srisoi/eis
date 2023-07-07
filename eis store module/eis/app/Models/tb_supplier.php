<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_supplier extends Model
{
    use HasFactory;

    public function tb_purchaserequest(){
        return $this->belongsTo(tb_purchaserequest::class, 'pr_supplierID', 'sup_id');
    }

    public function tb_supplier(){
        return $this->belongsTo(tb_supplier::class, 'prod_supplierID', 'sup_id');
    }

    public function tb_product()
    {
        return $this->belongsTo(tb_product::class, 'pr_prodID', 'prod_id');
    }

    public function tb_purchaseorder()
    {
        return $this->belongsTo(tb_product::class, 'sup_id', 'po_supplierID');
    }

}
