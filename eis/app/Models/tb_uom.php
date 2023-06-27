<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_uom extends Model
{
    use HasFactory;

    protected $table = 'tb_uoms';
    protected $primaryKey = 'uom_id';
    protected $fillable = ['uom_desc'];
}
