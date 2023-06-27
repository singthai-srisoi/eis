<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_approval extends Model
{
    use HasFactory;

    protected $table = 'tb_approvals';
    protected $primaryKey = 'a_id';
    public $timestamps = false;
    protected $fillable = ['a_desc'];
}
