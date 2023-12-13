<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BajuFashionController extends Controller
{
    public function clothes(Request $request)
    {
        $query = Baju::query();
        $kategori = Kategori::all();
        $title = 'OUTFIT';

        if ($request->has('category')) {
            $categoryFilter = $request->input('category');
            $query->where('kategori_id', $categoryFilter);
        }

        $datas = $query->paginate(4);
        return view('user.bajufashion', compact('datas', 'title', 'kategori'));
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $datas = Baju::where('name_baju', 'LIKE', '%' . $keyword .'%')
        ->paginate(10);
        $kategori = Kategori::all();
        $title = 'OUTFIT';
        return view('user.bajufashion', compact('datas', 'title', 'kategori'));
    }

    public function lihatbaju($id)
    {
        $baju = Baju::find($id);
        $kategori = Kategori::all();
        $title = 'OUTFIT';
        return view('user.lihatbaju', compact('baju','title'));
    }
    
}
