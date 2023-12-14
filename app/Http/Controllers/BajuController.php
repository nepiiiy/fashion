<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use RealRashid\SweetAlert\Facades\Alert;


class BajuController extends Controller
{
    public function baju(){
        $baju = Baju::paginate(4);
        $kategori = Kategori::all();
        return view('admin.baju', compact('baju', 'kategori'));
    }
    public function insertbaju(Request $request)
    {
        $request->validate(
            [
                'name_baju'     => 'required',
                'kategori_id'  => 'required',
                'deskripsi_baju' => 'required',
                'gambar_baju' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],[
                'name_baju.required'=>'Judul harus di isi',
                'kategori_id.required'=>'Kategori tidak boleh kosong',
                'deskripsi_baju.required' => 'Deskripsi Baju tidak boleh kosong',
                'gambar.required'=>'Gambar harus di isi',
                'gambar.image'=>'File yang di inputkan harus berupa gambar',
                'gambar.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'gambar.max'=>'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $kategori = Kategori::all();
        $gambar = Storage::disk('public')->put('imgbaju', $request->file('gambar_baju'));
        $data = Baju::create([


            'name_baju' => $request->name_baju,
            'kategori_id' => $request->kategori_id,
            'deskripsi_baju' => $request->deskripsi_baju,
            'gambar_baju' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses','Baju berhasil di tambahakan');
        return redirect('baju');
    }
    public function lihat($id)
    {
        $lihatbaju = Baju::find($id);
        return view('admin.baju', compact('lihatbaju'));
    }
    public function deletebaju($id)
    {
        $data = Baju::find($id);
        $gambar = $data->gambar_baju;
        Storage::delete('storage/imgbaju/' . $gambar);
        $data->delete();
        return redirect('baju');
    }

public function updateBaju(Request $request, $id)
{
    $data = Baju::find($id);
    $request->validate(
        [
            'name_baju'     => 'required',
            'kategori_id'  => 'required',
            'deskripsi_baju' => 'required',
            'gambar_baju' => 'image|mimes:png,jpg,jpeg|max:2048',
        ],[
            'name_baju.required'=>'Judul harus di isi',
            'kategori_id.required'=>'Kategori tidak boleh kosong',
            'deskripsi_baju.required' => 'Deskripsi Baju tidak boleh kosong',
            'gambar_baju.image'=>'File yang di inputkan harus berupa gambar',
            'gambar_baju.mimes'=>'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
            'gambar_baju.max'=>'File yang di inputkan tidak lebih dari 2 MB',
        ]
    );
    $data->update([
        'name_baju' => $request->name_baju,
        'kategori_id' => $request->kategori_id,
        'deskripsi_baju' => $request->deskripsi_baju,
    ]);
    if ($request->hasFile('gambar_baju')) {

        Storage::disk('public')->delete($data->gambar_baju);

        $gambar = Storage::disk('public')->put('imgbaju', $request->file('gambar_baju'));

        $data->update([
            'gambar_baju' => $gambar,
        ]);
    }
    $data->save();
    alert()->success('Sukses','Baju berhasil di edit');
    return redirect()->back();
}


}
