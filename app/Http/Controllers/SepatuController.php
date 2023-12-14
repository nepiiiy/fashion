<?php

namespace App\Http\Controllers;

use App\Models\Sepatu;
use App\Models\Kat_Sepatu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SepatuController extends Controller
{

    //ADMIN
    public function sepatu()
    {
        $sepatu = Sepatu::paginate(4);
        $kategori = Kat_Sepatu::all();
        return view('admin.sepatu', compact('sepatu', 'kategori'));
    }
    public function insertsepatu(Request $request)
    {
        $request->validate(
            [
                'name_sepatu'     => 'required',
                'kategori_id'  => 'required',
                'deskripsi_sepatu' => 'required',
                'gambar_sepatu' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'judul.required' => 'Judul harus di isi',
                'kategori_id.required' => 'Kategori tidak boleh kosong',
                'deskripsi_sepatu.required' => 'Deskripsi sepatu tidak boleh kosong',
                'gambar.required' => 'Gambar harus di isi',
                'gambar.image' => 'File yang di inputkan harus berupa gambar',
                'gambar.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'gambar.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $kategori = Kat_Sepatu::all();
        $gambar = Storage::disk('public')->put('imgsepatu', $request->file('gambar_sepatu'));
        $data = Sepatu::create([


            'name_sepatu' => $request->name_sepatu,
            'kat__sepatu_id' => $request->kategori_id,
            'deskripsi_sepatu' => $request->deskripsi_sepatu,
            'gambar_sepatu' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses','Sepatu berhasil di tambahakan');
        return redirect('sepatu');
    }
    public function lihat($id)
    {
        $lihattas = Sepatu::find($id);
        return view('admin.sepatu', compact('lihattas'));
    }
    public function deletesepatu($id)
    {
        $data = Sepatu::find($id);
        $gambar = $data->gambar_sepatu;
        Storage::delete('storage/imgsepatu/' . $gambar);
        $data->delete();
        return redirect('sepatu');
    }

    public function updateSepatu(Request $request, $id)
{
    $data = Sepatu::find($id);
    $request->validate(
        [
            'name_sepatu'     => 'required',
            'kat__sepatu_id'  => 'required',
            'deskripsi_sepatu' => 'required',
            'gambar_sepatu' => 'image|mimes:png,jpg,jpeg|max:2048',
        ],[
            'name_sepatu.required'=>'Judul harus di isi',
            'kat__sepatu_id.required'=>'Kategori tidak boleh kosong',
            'deskripsi_sepatu.required' => 'Deskripsi sepatu tidak boleh kosong',
            'gambar_sepatu.image'=>'File yang di inputkan harus berupa gambar',
            'gambar_sepatu.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
            'gambar_sepatu.max'=>'File yang di inputkan tidak lebih dari 2 MB',
        ]
    );
    $data->update([
        'name_sepatu' => $request->name_sepatu,
        'kat__sepatu_id' => $request->kat__sepatu_id,
        'deskripsi_sepatu' => $request->deskripsi_sepatu,
    ]);
    if ($request->hasFile('gambar_sepatu')) {

        Storage::disk('public')->delete($data->gambar_sepatu);

        $gambar = Storage::disk('public')->put('imgsepatu', $request->file('gambar_sepatu'));

        $data->update([
            'gambar_sepatu' => $gambar,
        ]);
    }
    $data->save();
    alert()->success('Sukses','Sepatu berhasil di tambahakan');
    return redirect()->back();
}


//USER
public function shoe(Request $request)
    {
        $query = Sepatu::query();
        $kategori = Kat_Sepatu::all();
        $title = 'OUTFIT';

        if ($request->has('category')) {
            $categoryFilter = $request->input('category');
            $query->where('kat__sepatu_id', $categoryFilter);
        }
        $datas = $query->paginate(4);
        return view('user.sepatufashion', compact('datas', 'title', 'kategori'));
    }
    public function searchsepatu(Request $request)
    {
        $keyword = $request->searchsepatu;
        $datas = Sepatu::where('name_sepatu', 'LIKE', '%' . $keyword .'%')
        ->paginate(10);
        $title = 'OUTFIT';
        $kategori = Kat_Sepatu::all();

        return view('user.sepatufashion', compact('datas', 'title', 'kategori'));
    }

    public function lihatsepatu($id)
    {
        $sepatu = Sepatu::find($id);
        $title = 'OUTFIT';
        return view('user.lihatsepatu', compact('sepatu','title'));
    }
}
