<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'tb_order';
    protected $primaryKey = 'o_id';
    public $timestamps = false;

    // Relationship with Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'o_cust', 'c_id');
    }

    // Relationship with Shipping model
    public function shipping()
    {
        return $this->hasOne(Shipping::class, 'shp_oid', 'o_id');
    }

    // Relationship with Status model
    public function status()
    {
        return $this->belongsTo(Status::class, 'o_status', 's_id');
    }
}
