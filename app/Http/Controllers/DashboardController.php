<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Pant;
use App\Models\Sepatu;
use App\Models\Tas;
use App\Models\Topi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_admin(){
        $baju = Baju::all()->count();
        $celana = Pant::all()->count();
        $tas = Tas::all()->count();
        $sepatu = Sepatu::all()->count();
        $topi = Topi::all()->count();
        return view('admin.dashboard_admin', compact('baju', 'celana', 'tas', 'sepatu', 'topi'));
    }
}
