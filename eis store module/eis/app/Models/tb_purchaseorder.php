<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_grn;

class tb_purchaseorder extends Model
{
    use HasFactory;
    protected $primaryKey = 'po_id';

    public function tb_purchaserequest()
    {
        return $this->belongsTo(tb_purchaserequest::class, 'po_prID', 'pr_id');
    }

    public function tb_supplier()
    {
        return $this->belongsTo(tb_supplier::class, 'po_supplierID', 'sup_id');
    }

    public function grn()
    {
        return $this->hasOne(tb_grn::class, 'grn_poid', 'po_id');
    }

   
    // Rest of your code...

    
    
}
