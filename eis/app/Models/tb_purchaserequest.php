<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tb_purchaserequest extends Model
{
    use HasFactory;

    protected $table = 'tb_purchaserequests';
    protected $primaryKey = 'pr_id';
    public const CREATED_AT = 'pr_cdate';
    public const UPDATED_AT = null;
    public function tb_purchaseorder(): HasOne
    {
        return $this->hasOne(tb_purchaseorder::class);
    }
    public function tb_approval(): BelongsTo
    {
        return $this->belongsTo(tb_approval::class,  'pr_status');
    }
    public function tb_supplier(): BelongsTo
    {
        return $this->belongsTo(tb_supplier::class,  'pr_supplierID');
    }
    public function tb_product(): BelongsTo
    {
        return $this->belongsTo(tb_product::class,  'pr_prodID');
    }
    public function tb_uom(): BelongsTo
    {
        return $this->belongsTo(tb_uom::class,  'pr_uom');
    }
    protected $fillable = [
        'pr_ddate',
        'pr_qty',
        'pr_uom',
        'pr_supplierID',
        'pr_subtot',
        'pr_tax',
        'pr_total',
        'pr_prodID',
        'pr_status',
        'pr_requestedBy',
        'pr_approvedBy'
    ];
}
