<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class tb_supplier extends Model
{
    use HasFactory;

    protected $table = 'tb_suppliers';
    protected $primaryKey = 'sup_id';
    public $timestamps = false;
    //public function Product(): HasMany
    //{
    //    return $this->hasMany(Product::class);
    //}
    public function PurchaseOrder(): HasOneThrough
    {
        return $this->hasOneThrough(PurchaseOrder::class, PurchaseRequest::class, 'pr_prodID', 'po_prID');
    }
    protected $fillable = [
        'sup_name',
        'sup_shop',
        'sup_address',
        'sup_phone',
        'sup_fax',
        'sup_email',
        'sup_shippingFee'
    ];
}
