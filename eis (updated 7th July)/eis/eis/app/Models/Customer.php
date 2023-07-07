<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'tb_customer';
    protected $primaryKey = 'c_id';
    public $timestamps = false;

    // Relationship with Order model
    public function order()
    {
        return $this->hasOne(Order::class, 'o_cust', 'c_id');
    }
}
