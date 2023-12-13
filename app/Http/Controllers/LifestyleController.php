<?php

namespace App\Http\Controllers;

use App\Models\Lifestyle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LifestyleController extends Controller
{
    public function style(){
        $style = Lifestyle::paginate(4);
        return view('admin.lifestyle', compact('style'));
    }

    public function insertStyle(Request $request){
        $request->validate(
            [
                'judul_style'     => 'required',
                'isi' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'judul_style.required' => 'Judul harus di isi',
                'isi.required' => 'Deskripsi sepatu tidak boleh kosong',
                'image.required' => 'Gambar harus di isi',
                'image.image' => 'File yang di inputkan harus berupa gambar',
                'image.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'image.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $gambar = Storage::disk('public')->put('imgstyle', $request->file('image'));
        $data = Lifestyle::create([


            'judul_style' => $request->judul_style,
            'isi' => $request->isi,
            'image' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses','Lifestyle berhasil di tambahakan');
        return redirect('lifestyle');
    }
    public function lihatStyle($id)
    {
        $lihatStyle = Lifestyle::find($id);
        return view('admin.lifestyle', compact('lihatStyle'));
    }
    public function deleteStyle($id)
    {
        $data = Lifestyle::find($id);
        $gambar = $data->image;
        Storage::delete('storage/imgstyle/' . $gambar);
        $data->delete();
        return redirect('lifestyle');
    }
public function updateStyle(Request $request, $id)
{
    // Find the berita by ID
    $style = Lifestyle::find($id);

    // Validate the request data
    $request->validate([
        'judul_style' => 'required',
        'isi' => 'required',
        'image' => 'image|mimes:png,jpg,jpeg|max:2048',
    ], [
        'judul_style.required' => 'Judul harus di isi',
        'isi.required' => 'Deskripsi style tidak boleh kosong',
        'image.image' => 'File yang diinputkan harus berupa gambar',
        'image.mimes' => 'File yang diinputkan harus berekstensi JPG, JPEG, PNG',
        'image.max' => 'File yang diinputkan tidak lebih dari 2 MB',
    ]);

    $style->update([
        'judul_style' => $request->judul_style,
        'isi' => $request->isi,
        'image' => $request->image,
    ]);
    if ($request->hasFile('image')) {

        Storage::disk('public')->delete($style->image);

        $gambar = Storage::disk('public')->put('imgstyle', $request->file('image'));

        $style->update([
            'image' => $gambar,
        ]);
    }
    $style->save();
    alert()->success('Sukses','Lifestyle berhasil di edit');
    return redirect()->back();
}

public function lifestylee()
{
    $datas = Lifestyle::paginate(4);
    $title = 'LIFESTYLE';
    return view('user.lifestyleuser', compact('datas', 'title'));
}
public function searchstyle(Request $request)
{
    $keyword = $request->searchstyle;
    $datas = Lifestyle::where('judul_style', 'LIKE', '%' . $keyword .'%')
    ->paginate(10);
    $title = 'LIFESTYLE';
    return view('user.lifestyleuser', compact('datas', 'title'));
}

public function lihatstylee($id)
{
    $style = Lifestyle::find($id);
    $title = 'LIFESTYLE';
    return view('user.lihatstyle', compact('style','title'));
}
}
