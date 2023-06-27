<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tb_purchaseorder extends Model
{
    use HasFactory;

    protected $table = 'tb_purchaseorders';
    protected $primaryKey = 'po_id';
    public const CREATED_AT = 'po_cdate';
    public const UPDATED_AT = null;
    public function tb_purchaserequest(): BelongsTo
    {
        return $this->belongsTo(tb_purchaserequest::class,  'po_prID');
    }

    public function tb_supplier()
    {
        return $this->belongsTo(tb_supplier::class, 'po_supplierID', 'sup_id');
    }

    public function grn()
    {
        return $this->hasOne(tb_grn::class, 'grn_poid', 'po_id');
    }
    protected $fillable = [
        'po_prID',
        'po_paymentTerm',
        'po_buyer',
        'po_deliveryTo'
    ];
}
