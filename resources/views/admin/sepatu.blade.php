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
            @foreach ($sepatu as $data)
                <div class="col-3">
                    <div class="card" style="width: 15rem; height:25rem;">
                        <img src="{{ asset('storage/' . $data->gambar_sepatu) }}" class="card-img-top rounded-top" alt="..."
                        height="200" style="object-fit:cover">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title">{{ Str::limit($data->name_sepatu, 30) }}</h5>
                            </a>
                            <p class="card-text">{!! Str::limit($data->deskripsi_sepatu, 70) !!}</p>
                            <div class="align-items-start">
                                <button type="button" class="btn btn-primary btn-sm btn-show"
                                    data-name="{{ $data->name_sepatu }}"
                                    data-img="{{ asset('storage/' . $data->gambar_sepatu) }}"
                                    data-deskripsi="{!! $data->deskripsi_sepatu !!}" data-id="{{ $data->id }}">Lihat</button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{ $data->id }}">
                                        Edit
                                    </button>
                                <a href="#" data-id="{{ $data->id }}" data-nama="{{ $data->name_sepatu }}"
                                    type="button" class="btn btn-primary btn-sm delete">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $sepatu->links() }}

        <!-- Modal tambah-->
        <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
                <form action="/insertsepatu" method="POST" enctype="multipart/form-data" class="row g-3">
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
                                    <input type="file" class="form-control @error('gambar_sepatu') is-invalid @enderror"
                                        name="gambar_sepatu" id="gambar_sepatu">
                                    @error('gambar_sepatu')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <label for="judul" class="form-label fw-bold">Nama Produk</label>
                                <input type="text" class="form-control @error('name_sepatu') is-invalid @enderror"
                                    name="name_sepatu" id="name_sepatu">
                                @error('name_sepatu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label for="subjudul" class="form-label fw-bold">Kategori</label>
                                <select type="text" class="form-control @error('kategori_id') is-invalid @enderror"
                                    aria-label="Default select example" name="kategori_id" id="kategori_id">
                                    <option selected>Pilih Kategori</option>
                                    @foreach ($kategori as $data)
                                        <option value="{{ $data->id }}">{{ $data->name_kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label for="isi" class="form-label fw-bold">Deskripsi Produk</label>
                                <textarea class="form-control @error('deskripsi_sepatu') is-invalid @enderror" id="editor" name="deskripsi_sepatu"
                                    cols="30" rows="10" placeholder="Tuliskan deskripsi sepatu disini"></textarea>
                                @error('deskripsi_sepatu')
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
    @foreach ($sepatu as $data)
        
    <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="/update-sepatu/{{$data->id}}" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- Form untuk mengedit data -->
                        @method('PUT')
                        @csrf
                        <div class="col-12 mb-2">
                            <label class="fw-bold">Masukkan Gambar</label>
                            <div class="input-group mb-3">
                                <img src="{{ asset('storage/' . $data->gambar_sepatu) }}" width="100%" alt="">
                                <input type="file" class="form-control @error('gambar_sepatu') is-invalid @enderror"
                                    name="gambar_sepatu" id="gambar_sepatu">
                                @error('gambar_sepatu')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <label for="judul" class="form-label fw-bold">Nama Produk</label>
                            <input type="text" class="form-control @error('name_sepatu') is-invalid @enderror"
                                name="name_sepatu" id="name_sepatu" value="{{ $data->name_sepatu }}">
                            @error('name_sepatu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label for="subjudul" class="form-label fw-bold">Kategori</label>
                            <select type="text" class="form-control @error('kat__sepatu_id') is-invalid @enderror"
                                aria-label="Default select example" name="kat__sepatu_id" id="kat__sepatu_id">
                                <option selected>Pilih Kategori</option>
                                @foreach ($kategori as $option)
                                        <option value="{{ $option->id }}" {{ $option->id == $data->kat__sepatu_id ? 'selected' : '' }}>{{ $option->name_kategori }}</option>
                                    @endforeach
                            </select>
                            @error('kat__sepatu_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12 mb-2">
                            <label for="isi" class="form-label fw-bold">Deskripsi Produk</label>
                            <textarea class="form-control @error('deskripsi_sepatu') is-invalid @enderror" id="deskripsi_sepatu"
                                name="deskripsi_sepatu" cols="30" rows="10" placeholder="Tuliskan deskripsi sepatu disini">{!! $data->deskripsi_sepatu!!}</textarea>
                            @error('deskripsi_sepatu')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
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
            var sepatuid = $(this).attr('data-id');
            var namasepatu = $(this).attr('data-nama');
            swal({
                    title: "Yakin?",
                    text: "Kamu akan menghapus data sepatu dengan nama " + namasepatu + "",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletesepatu/" + sepatuid + ""
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
