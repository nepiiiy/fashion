<?php

namespace App\Http\Controllers;

use alert;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{

    //ADMIN
    public function berita()
    {
        $berita = Berita::paginate(4);
        return view('admin.berita', compact('berita'));
    }

    public function insertberita(Request $request)
    {
        $request->validate(
            [
                'judul_berita'     => 'required',
                'isi' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'judul_berita.required' => 'Judul harus di isi',
                'isi.required' => 'Deskripsi sepatu tidak boleh kosong',
                'image.required' => 'Gambar harus di isi',
                'image.image' => 'File yang di inputkan harus berupa gambar',
                'image.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'image.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $gambar = Storage::disk('public')->put('imgberita', $request->file('image'));
        $data = Berita::create([


            'judul_berita' => $request->judul_berita,
            'isi' => $request->isi,
            'image' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses', 'Berita berhasil di tambahakan');
        return redirect('berita');
    }
    public function lihatberita($id)
    {
        $lihatberita = Berita::find($id);
        return view('admin.berita', compact('lihatberita'));
    }
    public function deleteberita($id)
    {
        $data = Berita::find($id);
        $gambar = $data->image;
        Storage::delete('storage/imgberita/' . $gambar);
        $data->delete();
        return redirect('berita');
    }

    public function updateBerita(Request $request, $id)
    {
        $data = Berita::find($id);
        $request->validate(
            [
                'judul_berita' => 'required',
                'isi' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'judul_berita.required' => 'Judul harus di isi',
                'isi.required' => 'Deskripsi sepatu tidak boleh kosong',
                'image.image' => 'File yang di inputkan harus berupa gambar',
                'image.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'image.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );

        $data->update([
            'judul_berita' => $request->judul_berita,
            'isi' => $request->isi,
            'image' => $request->image,
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $data->image);
            $gambar = Storage::disk('public')->put('imgberita', $request->file('image'));
            $data->update([
                'image' => $gambar,
            ]);
        }
        $data->save();
        alert()->success('Sukses', 'Lifestyle berhasil di edit');
        return redirect()->back();
    }

    //USER
    public function news()
    {
        $datas = Berita::paginate(4);
        $title = 'BERITA';
        return view('user.beritauser', compact('datas', 'title'));
    }
    public function searchnews(Request $request)
    {
        $keyword = $request->searchnews;
        $datas = Berita::where('judul_berita', 'LIKE', '%' . $keyword . '%')
            ->paginate(10);
        $title = 'BERITA';
        return view('user.beritauser', compact('datas', 'title'));
    }

    public function lihatberitaa($id)
    {
        $berita = Berita::find($id);
        $title = 'BERITA';
        return view('user.lihatberita', compact('berita', 'title'));
    }
}
