<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_product extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'tb_products';
    protected $primaryKey = 'prod_id';
    protected $fillable = ['prod_id','prod_code', 'prod_name', 'prod_desc', 'prod_image', 'prod_ctg', 'prod_price', 'prod_desc', 'prod_stock', 'prod_status', 'prod_supplierID'];


    public function tb_purchaserequest(){
        return $this->belongsTo(tb_purchaserequest::class, 'prod_id', 'pr_prodID' );
    }

    public function tb_supplier(){
        return $this->belongsTo(tb_supplier::class, 'prod_supplierID', 'sup_id');
    }
}
