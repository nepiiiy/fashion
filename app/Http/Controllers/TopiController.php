<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Topi;
use App\Models\Kat_Topi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class TopiController extends Controller
{
    // ADMIN
    public function topi()
    {
        $topi = Topi::paginate(4);
        $kategori = Kat_Topi::all();
        return view('admin.topi', compact('topi', 'kategori'));
    }
    public function inserttopi(Request $request)
    {
        $request->validate(
            [
                'name_topi'     => 'required',
                'kategori_id'  => 'required',
                'deskripsi_topi' => 'required',
                'gambar_topi' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'judul.required' => 'Judul harus di isi',
                'kategori_id.required' => 'Kategori tidak boleh kosong',
                'deskripsi_topi.required' => 'Deskripsi topi tidak boleh kosong',
                'gambar.required' => 'Gambar harus di isi',
                'gambar.image' => 'File yang di inputkan harus berupa gambar',
                'gambar.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'gambar.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $kategori = Kat_Topi::all();
        $gambar = Storage::disk('public')->put('imgtopi', $request->file('gambar_topi'));
        $data = Topi::create([


            'name_topi' => $request->name_topi,
            'kat__topi_id' => $request->kategori_id,
            'deskripsi_topi' => $request->deskripsi_topi,
            'gambar_topi' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses','Topi berhasil di tambahakan');
        return redirect('topi');
    }
    public function lihattopi($id)
    {
        $lihattopi = Topi::find($id);
        return view('admin.topi', compact('lihattopi'));
    }
    public function deletetopi($id)
    {
        $data = Topi::find($id);
        $gambar = $data->gambar_topi;
        Storage::delete('storage/imgtopi/' . $gambar);
        $data->delete();
        return redirect('topi');
    }

    public function updateTopi(Request $request, $id)
{
    $data = Topi::find($id);
    $request->validate(
        [
            'name_topi'     => 'required',
            'kat__topi_id'  => 'required',
            'deskripsi_topi' => 'required',
            'gambar_topi' => 'image|mimes:png,jpg,jpeg|max:2048',
        ],[
            'name_topi.required'=>'Judul harus di isi',
            'kat__topi_id.required'=>'Kategori tidak boleh kosong',
            'deskripsi_topi.required' => 'Deskripsi Baju tidak boleh kosong',
            'gambar_topi.image'=>'File yang di inputkan harus berupa gambar',
            'gambar_topi.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
            'gambar_topi.max'=>'File yang di inputkan tidak lebih dari 2 MB',
        ]
    );
    $data->update([
        'name_topi' => $request->name_topi,
        'kat__topi_id' => $request->kat__topi_id,
        'deskripsi_topi' => $request->deskripsi_topi,
    ]);
    if ($request->hasFile('gambar_topi')) {

        Storage::disk('public')->delete($data->gambar_topi);

        $gambar = Storage::disk('public')->put('imgtopi', $request->file('gambar_topi'));

        $data->update([
            'gambar_topi' => $gambar,
        ]);
    }
    $data->save();
    alert()->success('Sukses','Topi berhasil di edit');
    return redirect()->back();
}

    // USER
    public function hat(Request $request)
    {
        $query = Topi::query();
        $kategori = Kat_Topi::all();
        $title = 'OUTFIT';

        if ($request->has('category')) {
            $categoryFilter = $request->input('category');
            $query->where('kat__topi_id', $categoryFilter);
        }
        $datas = $query->paginate(4);
        return view('user.topifashion', compact('datas', 'title', 'kategori'));
    }
    public function searchtopi(Request $request)
    {
        $keyword = $request->search;
        $kategori = Kat_Topi::all();
        $datas = Topi::where('name_topi', 'LIKE', '%' . $keyword .'%')
        ->paginate(10);
        $title = 'OUTFIT';
        return view('user.topifashion', compact('datas', 'title', 'kategori'));
    }

    public function lihattopii($id)
    {
        $topi = Topi::find($id);
        $title = 'OUTFIT';
        return view('user.lihattopi', compact('topi','title'));
    }
}
