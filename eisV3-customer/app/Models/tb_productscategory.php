<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_productscategory extends Model
{
    use HasFactory;
    
    public function tb_product()
    {
        return $this->belongsTo(tb_product::class, 'ctg_id','p_ctg');
    }
}
