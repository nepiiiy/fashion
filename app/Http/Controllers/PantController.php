<?php

namespace App\Http\Controllers;

use App\Models\CatePant;
use App\Models\Pant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PantController extends Controller
{
    public function celana()
    {
        $celana = Pant::paginate(4);
        $kategori = CatePant::all();
        return view('admin.celana', compact('celana', 'kategori'));
    }
    public function insertcelana(Request $request)
    {
        $request->validate(
            [
                'name_celana' => 'required',
                'kategori_id' => 'required',
                'deskripsi_celana' => 'required',
                'gambar_celana' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ], [
                'judul.required' => 'Judul harus di isi',
                'kategori_id.required' => 'Kategori tidak boleh kosong',
                'deskripsi_baju.required' => 'Deskripsi Baju tidak boleh kosong',
                'gambar.required' => 'Gambar harus di isi',
                'gambar.image' => 'File yang di inputkan harus berupa gambar',
                'gambar.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'gambar.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $kategori = CatePant::all();
        $gambar = Storage::disk('public')->put('imgcelana', $request->file('gambar_celana'));

        $data = Pant::create([
            'name_celana' => $request->name_celana,
            'cate_pant_id' => $request->kategori_id,
            'deskripsi_celana' => $request->deskripsi_celana,
            'gambar_celana' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses','Celana berhasil di tambahakan');
        return redirect('celana');
    }
    public function lihatcelana($id)
    {
        $lihatcelana = Pant::find($id);
        return view('admin.celana', compact('lihatcelana'));
    }
    public function deletecelana($id)
    {
        $data = Pant::find($id);
        $gambar = $data->gambar_celana;
        Storage::delete('storage/imgcelana/' . $gambar);
        $data->delete();
        return redirect('celana');
    }

    public function updateCelana(Request $request, $id)
    {
        $data = Pant::find($id);

        $data->update([
            'name_celana' => $request->name_celana,
            'cate_pant_id' => $request->cate_pant_id,
            'deskripsi_celana' => $request->deskripsi_celana,
        ]);
        
        if ($request->hasFile('gambar_celana')) {

            Storage::disk('public')->delete($data->gambar_celana);

            $gambar = Storage::disk('public')->put('imgcelana', $request->file('gambar_celana'));

            $data->update([
                'gambar_celana' => $gambar,
            ]);
        }

        $data->save();
        alert()->success('Sukses','Celana berhasil di edit');
        return redirect()->back();
    }

}
