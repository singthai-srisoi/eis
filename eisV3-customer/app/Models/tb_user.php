<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_user extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'u_id';

    public function tb_address()
    {
        return $this->belongsTo(tb_address::class, 'u_id', 'u_id');
    }
}
