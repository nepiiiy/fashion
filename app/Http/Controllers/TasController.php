<?php

namespace App\Http\Controllers;

use App\Models\Kat_Tas;
use Illuminate\Http\Request;
use App\Models\Baju;
use App\Models\Topi;
use App\Models\Kat_Topi;
use App\Models\Kategori;
use App\Models\Tas;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;

class TasController extends Controller
{

    // ADMIN
    public function tas()
    {
        $tas = Tas::paginate(4);
        $kategori = Kat_Tas::all();
        return view('admin.tas', compact('tas', 'kategori'));
    }
    public function inserttas(Request $request)
    {
        $request->validate(
            [
                'name_tas'     => 'required',
                'kategori_id'  => 'required',
                'deskripsi_tas' => 'required',
                'gambar_tas' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'judul.required' => 'Judul harus di isi',
                'kategori_id.required' => 'Kategori tidak boleh kosong',
                'deskripsi_tas.required' => 'Deskripsi tas tidak boleh kosong',
                'gambar_tas.required' => 'Gambar harus di isi',
                'gambar_tas.image' => 'File yang di inputkan harus berupa gambar',
                'gambar_tas.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'gambar_tas.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $kategori = Kat_Tas::all();
        $gambar = Storage::disk('public')->put('imgtas', $request->file('gambar_tas'));
        $data = Tas::create([


            'name_tas' => $request->name_tas,
            'kat__tas_id' => $request->kategori_id,
            'deskripsi_tas' => $request->deskripsi_tas,
            'gambar_tas' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses','Tas berhasil di tambahakan');
        return redirect('tas');
    }
    public function lihat($id)
    {
        $lihattas = Tas::find($id);
        return view('admin.tas', compact('lihattas'));
    }
    public function deletetas($id)
    {
        $data = Tas::find($id);
        $gambar = $data->gambar_tas;
        Storage::delete('storage/imgtas/' . $gambar);
        $data->delete();
        return redirect('tas');
    }
    public function updateTas(Request $request, $id)
    {
        $data = Tas::find($id);

        $data->update([
            'name_tas' => $request->name_tas,
            'kat__tas_id' => $request->kat__tas_id,
            'deskripsi_tas' => $request->deskripsi_tas,
        ]);
        
        if ($request->hasFile('gambar_tas')) {

            Storage::disk('public')->delete($data->gambar_tas);

            $gambar = Storage::disk('public')->put('imgtas', $request->file('gambar_tas'));

            $data->update([
                'gambar_tas' => $gambar,
            ]);
        }

        $data->save();
        alert()->success('Sukses','Tas berhasil di edit');
        return redirect()->back();
    }

    //USER
    public function bag(Request $request)
    {
        $query = Tas::query();
        $kategori = Kat_Tas::all();
        $title = 'OUTFIT';

        if ($request->has('category')) {
            $categoryFilter = $request->input('category');
            $query->where('kat__tas_id', $categoryFilter);
        }
        $datas = $query->paginate(4);
        return view('user.tasfashion', compact('datas', 'title', 'kategori'));
    }
    public function searchtas(Request $request)
    {
        $keyword = $request->searchtas;
        $datas = Tas::where('name_tas', 'LIKE', '%' . $keyword .'%')
        ->paginate(10);
        $title = 'OUTFIT';
        $kategori = Kat_Tas::all();
        return view('user.tasfashion', compact('datas', 'title', 'kategori'));
    }

    public function lihattas($id)
    {
        $tas = Tas::find($id);
        $title = 'OUTFIT';
        return view('user.lihattas', compact('tas','title'));
    }
}
