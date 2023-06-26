<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_uom extends Model
{
    use HasFactory;

    public function tb_purchaserequest(){
        return $this->belongsTo(tb_purchaserequest::class, 'pr_uom', 'uom_id');
    }
}
