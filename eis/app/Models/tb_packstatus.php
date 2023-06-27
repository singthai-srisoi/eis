<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_packstatus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'pac_stat_id';
    protected $fillable = [
        'pac_stat_desc',
    ];
    
}
