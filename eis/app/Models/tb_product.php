<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasmanyThrough;

class tb_product extends Model
{
    use HasFactory;

    protected $table = 'tb_products';
    protected $primaryKey = 'prod_id';
    public $timestamps = false;
    public function tb_productscategory(): BelongsTo
    {
        return $this->belongsTo(tb_productscategory::class,  'prod_ctg');
    }
    public function tb_supplier(): BelongsTo
    {
        return $this->belongsTo(tb_supplier::class,  'prod_supplierID');
    }
    public function tb_productstatus(): BelongsTo
    {
        return $this->belongsTo(tb_productstatus::class,  'prod_status');
    }
    public function PurchaseRequest(): HasMany
{
    return $this->hasMany(PurchaseRequest::class);
}
    public function PurchaseOrder(): HasmanyThrough
    {
        return $this->hasManyThrough(PurchaseOrder::class, PurchaseRequest::class, 'pr_supplierID', 'po_prID');
    }
    protected $fillable = [
        'prod_code',
        'prod_name',
        'prod_image',
        'prod_ctg',
        'prod_desc',
        'prod_price',
        'prod_sellprice',
        'prod_stock',
        'prod_supplierID',
        'prod_status'
    ];
}
