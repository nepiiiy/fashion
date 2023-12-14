<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Scheduling\Event;

class EventsController extends Controller
{
    public function event(){
        $event = Events::paginate(4);
        return view('admin.event', compact('event'));
    }

    public function insertevent(Request $request){
        $request->validate(
            [
                'judul_event'     => 'required',
                'isi' => 'required',
                'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            ],
            [
                'judul_event.required' => 'Judul harus di isi',
                'isi.required' => 'Deskripsi sepatu tidak boleh kosong',
                'image.required' => 'Gambar harus di isi',
                'image.image' => 'File yang di inputkan harus berupa gambar',
                'image.mimes' => 'File yang di inputkan harus berekstensi JPG, JPEG, PNG',
                'image.max' => 'File yang di inputkan tidak lebih dari 2 MB',
            ]
        );
        $gambar = Storage::disk('public')->put('imgevent', $request->file('image'));
        $data = Events::create([


            'judul_event' => $request->judul_event,
            'isi' => $request->isi,
            'image' => $gambar,
        ]);
        $data->save();
        alert()->success('Sukses','Event berhasil di tambahakan');
        return redirect('event');
    }
    public function lihatevent($id)
    {
        $lihatevent = Events::find($id);
        return view('admin.event', compact('lihatevent'));
    }
    public function deleteEvent($id)
    {
        $data = Events::find($id);
        $gambar = $data->image;
        Storage::delete('storage/imgevent/' . $gambar);
        $data->delete();
        return redirect('event');
    }
    public function showEvents($id)
    {
        $data = Events::find($id);
        return response()->json($data);
    }
public function updateEvent(Request $request, $id)
{
    $data = Events::find($id);

    // Validate the request data
    $request->validate([
        'judul_event' => 'required',
        'isi' => 'required',
        'image' => 'image|mimes:png,jpg,jpeg|max:2048',
    ], [
        'judul_event.required' => 'Judul harus di isi',
        'isi.required' => 'Deskripsi event tidak boleh kosong',
        'image.image' => 'File yang diinputkan harus berupa gambar',
        'image.mimes' => 'File yang diinputkan harus berekstensi JPG, JPEG, PNG',
        'image.max' => 'File yang diinputkan tidak lebih dari 2 MB',
    ]);

    $data->update([
        'judul_event' => $request->judul_event,
        'isi' => $request->isi,
        'image' => $request->image,
    ]);
    if ($request->hasFile('image')) {

        Storage::disk('public')->delete($data->image);

        $gambar = Storage::disk('public')->put('imgevent', $request->file('image'));

        $data->update([
            'image' => $gambar,
        ]);
    }
    $data->save();
    alert()->success('Sukses','Event berhasil di edit');
    return redirect()->back();
}
public function events()
{
    $datas = Events::paginate(4);
    $title = 'EVENT';
    return view('user.eventsuser', compact('datas', 'title'));
}
public function searchevents(Request $request)
{
    $keyword = $request->searchevent;
    $datas = Events::where('judul_event', 'LIKE', '%' . $keyword .'%')
    ->paginate(10);
    $title = 'EVENT';
    return view('user.eventsuser', compact('datas', 'title'));
}

public function lihatevents($id)
{
    $events = Events::find($id);
    $title = 'EVENT';
    return view('user.lihatevents', compact('events','title'));
}
}
