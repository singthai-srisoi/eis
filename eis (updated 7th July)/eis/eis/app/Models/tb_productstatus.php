<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_productstatus extends Model
{
    use HasFactory;

    protected $table = 'tb_productstatuses';
    protected $primaryKey = 'ps_id';
    public $timestamps = false;
    protected $fillable = [
        'ps_desc'
    ];

    public function tb_product()
    {
        return $this->belongsTo(tb_product::class, 'ps_id','prod_status');
    }
}
