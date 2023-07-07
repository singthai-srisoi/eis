<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'tb_status';
    protected $primaryKey = 's_id';
    public $timestamps = false;

    // Relationship with Order model
    public function order()
    {
        return $this->hasMany(Order::class, 'o_status', 's_id');
    }
}
