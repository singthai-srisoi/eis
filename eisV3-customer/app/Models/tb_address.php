<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_address extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function tb_user()
    {
        return $this->belongsTo(tb_user::class, 'u_id', 'u_id');
    }
}
