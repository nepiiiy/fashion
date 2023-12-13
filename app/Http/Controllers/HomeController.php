<?php

namespace App\Http\Controllers;

use App\Models\Tas;
use App\Models\Baju;
use App\Models\Pant;
use App\Models\Topi;
use App\Models\Sepatu;
use App\Models\Kat_Tas;
use App\Models\CatePant;
use App\Models\Kat_Topi;
use App\Models\Kategori;
use App\Models\Kat_Sepatu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        //baju
        $baju = Baju::take(3)->latest()->get();
        $kategori = Kategori::all();
        //celana
        $celana = Pant::take(3)->latest()->get();
        $kat_pant = CatePant::all();
        //topi
        $topi = Topi::take(3)->latest()->get();
        $kat_topi = Kat_Topi::all();
        //sepatu
        $sepatu = Sepatu::take(3)->latest()->get();
        $kat_sepatu = Kat_Sepatu::all();
        //tas
        $tas = Tas::take(3)->latest()->get();
        $kat_tas = Kat_Tas::all();
        $title = 'BERANDA';
        return view('user.home', compact('baju', 'title', 'kategori', 'celana', 'kat_pant', 'topi', 'kat_topi', 'sepatu', 'kat_sepatu', 'tas', 'kat_tas'));
    }
}
