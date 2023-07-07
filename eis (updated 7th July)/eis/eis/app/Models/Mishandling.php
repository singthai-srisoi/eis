<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mishandling extends Model
{
    use HasFactory;

    protected $table = 'tb_mishandling';
    protected $primaryKey = 'miss_id';
    public $timestamps = false;

    protected $fillable = ['miss_status', 'ship_id', 'miss_desc', 'miss_date'];

    public function shipping()
    {
        return $this->belongsTo(Shipping::class, 'ship_id');
    }
}
