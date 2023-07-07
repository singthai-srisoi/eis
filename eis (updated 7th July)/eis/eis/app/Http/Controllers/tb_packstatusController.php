<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tb_packstatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tb_packstatusController extends Controller
{

    use HasFactory;
    public $timestamps = false;

    public function store(Request $request)
    {
        $status = new tb_packstatus;
        $status->pac_stat_desc = $request->input('pac_stat_desc');
        $status->save();

        
        return redirect()->route('order-dashboard');
    }
}
