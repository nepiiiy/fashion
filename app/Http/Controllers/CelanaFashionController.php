<?php

namespace App\Http\Controllers;

use App\Models\CatePant;
use App\Models\Pant;
use Illuminate\Http\Request;

class CelanaFashionController extends Controller
{
    public function pants(Request $request)
    {
        $query = Pant::query();
        $kategori = CatePant::all();
        $title = 'OUTFIT';

        if ($request->has('category')) {
            $categoryFilter = $request->input('category');
            $query->where('cate_pant_id', $categoryFilter);
        }
        $datas = $query->paginate(4);
        return view('user.celanafashion', compact('datas', 'title', 'kategori'));
    }

    public function lihatcelana($id)
    {
        $celana = Pant::find($id);
        $title = 'OUTFIT';
        return view('user.lihatcelana', compact('celana', 'title'));
    }
    public function searchpants(Request $request)
    {
        $keyword = $request->search;
        $kategori = CatePant::all();
        $datas = Pant::where('name_celana', 'LIKE', '%' . $keyword .'%')
        ->paginate(10);
        $title = 'OUTFIT';
        return view('user.celanafashion', compact('datas', 'title', 'kategori'));
    }
}
