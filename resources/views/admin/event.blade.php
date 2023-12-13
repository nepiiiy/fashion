@extends('layouts.admin')
@section('content')
@include('sweetalert::alert')
    <div class="container">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success mb-4 tombolTambahData" data-toggle="modal" data-target="#modal-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-lg"
                viewBox="0 0 16 16">
                <path
                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
            </svg>Tambah
        </button>
        <div class="row">
            @foreach ($event as $data)
                <div class="col-3">
                    <div class="card" style="width: 15rem; height:25rem;">
                        <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top rounded-top" alt="..."
                            height="200" style="object-fit:cover">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">{{ Str::limit($data->judul_event, 30) }}</h5>
                            </a>
                            <p class="card-text">{!! Str::limit($data->isi, 70) !!}</p>
                            <div class="align-items-start">
                                <button type="button" class="btn btn-primary btn-sm btn-show"
                                    data-name="{{ $data->judul_event }}"
                                    data-img="{{ asset('storage/' . $data->image) }}"
                                    data-deskripsi="{!! $data->isi !!}" data-id="{{ $data->id }}">Lihat</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">
                                        Edit
                                    </button>
                                <a href="#" data-id="{{ $data->id }}" data-nama="{{ $data->judul_event }}"
                                    type="button" class="btn btn-primary btn-sm delete">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $event->links() }}

        <!-- Modal tambah-->
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
                <form action="/insertevent" method="POST" enctype="multipart/form-data" class="row g-3">
                    @method('POST')
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalTitle">Tambah Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12 mb-2">
                                <label class="fw-bold">Masukkan Gambar</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" id="image">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="judul" class="form-label fw-bold">Judul event</label>
                                <input type="text" class="form-control @error('judul_event') is-invalid @enderror"
                                    name="judul_event" id="judul_event">
                                @error('judul_event')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label for="isi" class="form-label fw-bold">Content</label>
                                <textarea class="form-control @error('isi') is-invalid @enderror" id="editor" name="isi"
                                    cols="30" rows="10" placeholder="Tuliskan deskripsi baju disini"></textarea>
                                @error('isi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Tambahkan</button>
                        </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- modal lihat --}}
    <div class="modal fade" id="lihat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title fs-5 name" id="exampleModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" class="card-img-top img" alt="...">
                    <p class="deskripsi"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal edit --}}
    @foreach ($event as $data)
        
    <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/update-event/{{$data->id}}" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- Form untuk mengedit data -->
                        @method('PUT')
                        @csrf
                        <div class="col-12 mb-2">
                            <label class="fw-bold">Masukkan Gambar</label>
                            <div class="input-group mb-3">
                                <img src="{{ asset('storage/' . $data->image) }}" width="100%" alt="">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" id="image">
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="judul" class="form-label fw-bold">Nama Produk</label>
                            <input type="text" class="form-control @error('judul_event') is-invalid @enderror judul_event"
                                name="judul_event" id="judul_event" value="{{$data->judul_event}}">
                            @error('judul_event')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label for="isi" class="form-label fw-bold">Deskripsi Produk</label>
                            <textarea class="form-control @error('isi') is-invalid @enderror" id="isi"
                                name="isi" cols="30" rows="10" placeholder="Tuliskan deskripsi baju disini">{!!$data->isi!!}</textarea>
                            @error('isi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id="updateDataButton" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@section('editor')
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
@section('script')
    <script>
        $('.btn-show').click(function() {
            var name = $(this).data('name');
            var img = $(this).data('img');
            var deskripsi = $(this).data('deskripsi');
            $('#lihat').modal('show');
            $('.name').text(name);
            $('.img').attr('src', img);
            $('.deskripsi').html(deskripsi);
        });
    </script>
@endsection
@section('hapus')
    <script>
        $('.delete').click(function() {
            var bajuid = $(this).attr('data-id');
            var namabaju = $(this).attr('data-nama');
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus data baju dengan nama " + namabaju + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deleteEvent/" + bajuid + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>
@endsection
