<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_purchaserequest extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'pr_id';

    public function tb_supplier(){
        return $this->belongsTo(tb_supplier::class, 'pr_supplierID', 'sup_id');
    }

    public function tb_product(){
        return $this->belongsTo(tb_product::class, 'pr_prodID', 'prod_id');
    }

    public function tb_uom(){
        return $this->belongsTo(tb_uom::class, 'pr_uom', 'uom_id');
    }

    public function tb_approval(){
        return $this->belongsTo(tb_approval::class, 'pr_status', 'a_id');
    }

}
