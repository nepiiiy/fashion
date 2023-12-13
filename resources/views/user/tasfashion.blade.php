@extends('layouts.app')
@section('content')
<style>
    figure.tv-thumb-card-tm {
        height: 250px;
        overflow: hidden;
        background-color: #000;
        text-align: center;
        position: relative;
    }

    figure.tv-thumb-card-tm img {
        display: block;
        opacity: .8;
        position: relative;
        width: auto;
        width: 100%;
        height: 100%;
    }

    .tv-card-icon-tm {
        position: absolute;
        top: 25%;
        right: 15px;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        color: #fff;
        text-align: center;
        line-height: 13px;
        font-weight: bold;
        padding-top: 10px;
        z-index: 5;

    }



    .tv-case-study-hide {
        -webkit-animation-name: pulse-hide;
        animation-name: pulse-hide;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
    }

    .tv-case-study-show {
        display: block !important;
        -webkit-animation-name: pulse;
        animation-name: pulse;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .tv-card-icon-tm a {
        color: #ffffff !important;
    }

    .tv-card-category-tm {
        position: absolute;
        bottom: 0;
        height: 25px;
        padding: 0 15px;
        color: #fff;
        font-size: 11px;
        line-height: 25px;
    }

    .tv-card-category-tm p {
        color: #000 !important;
        text-decoration: none;
        text-transform: uppercase;
    }

    .tv-card-title-tm {
        padding: 10px 20px;
        font-size: 23px;
        text-align: left;
        font-weight: 400;
        height: 90px;
    }

    .tv-card-title-tm a {
        text-decoration: none;
        color: #219ae2;
    }

    .tv-card-title-tm a:hover {
        color: #018fc5 !important
    }

    .tv-card-sub-title-tm,
    .tv-card-sub-title-tm p {
        padding: 0px 10px;
        margin: 0;
        font-size: 19px;
        font-style: italic;
        color: #999999;
        font-weight: 400;
        height: 45px;
    }

    .tv-card-description-tm {
        height: 150px
    }

    .tv-card-description-tm,
    .tv-card-description-tm p {
        padding: 5px 10px;
        color: #555555;
        font-size: 16px !important;
    }

    .tv-card-footer-tm {
        background: #fbfbfb;
        border-top: 1px solid #dedede;
        padding: 10px 20px;
    }

    .tv-card-time-tm {
        font-size: 14px;
        color: #aaaaaa;
        padding-left: 20px;
    }

    .tv-card-time-tm i {
        font-size: 18px;
        position: absolute;
        top: 2px;
        left: 10px;
    }

    .tv-card-link {
        text-align: right;
    }

    .tv-card-link a {
        color: #219ae2;
        text-decoration: none;
    }

    @-webkit-keyframes pulse {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes pulse {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @-webkit-keyframes pulse-hide {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            display: none;
        }
    }

    @keyframes pulse-hide {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            opacity: 1
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05);
            visibility: none;
            display: none;
            opacity: 0;
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            visibility: none;
            display: none;
            opacity: 0;
            width: 0;
            height: 0;
            overflow: hidden;
            padding: 0;
            margin-left: 0;
            margin-right: 0;
        }
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <form action="{{ route('bag') }}" method="get" id="filterForm">
                    <select class="form-select form-select-sm" name="category" id="category"
                        aria-label="Default select example">
                        <option value="">All Categories</option>
                        @foreach ($kategori as $data)
                            <option value="{{ $data->id }}" {{ request('category') == $data->id ? 'selected' : '' }}>
                                {{ $data->name_kategori }}
                            </option>
                        @endforeach
                    </select>
                </form>
            </div>
            <div class="col-10">

                <form action="bag/searchtas" method="GET" class="d-flex justify-content-end" role="search">
                    <div class="row mb-3">
                        <div class="col-10">
                            <input type="text" class="form-control form-control-sm" value=""
                                placeholder="Ketik Disini" name="searchtas" id="searchtas" autofocus>
                        </div>
                        <div class="col-1">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            @if ($datas->isEmpty())
                <p>Tidak ada data yang sesuai dengan kategori tersebut</p>
            @else
            @foreach ($datas as $data)
                <div class="col-3">
                    <div class="card" style="height: 32rem">
                        <figure class="tv-thumb-card-tm">
                            <img src="{{ asset('storage/' . $data->gambar_tas) }}" class="card-img-top" alt="..."
                            style="height: 250px; object-fit: cover;">
                        <div class="tv-card-category-tm" style="background-color:#b4b7ba;">
                            <p data-value="{{ $data->kat__tas_id }}">
                                {{ $kategori->where('id', $data->kat__tas_id)->first()->name_kategori }}
                            </p>
                        </div>
                    </figure>
                        <div class="card-body">
                            <a href="/lihattas/{{ $data->id }}" class="link-card">
                                <h5 class="card-title"><b>{{ Str::limit($data->name_tas, 50) }}</b></h5>
                            </a>
                            <p class="card-text" style="font-size: 12px">{!! Str::limit($data->deskripsi_tas, 150) !!}</p>
                            <a href="/lihattas/{{ $data->id }}" class="btn btn-sm btn-outline-dark">BACA</a>
                        </div>
                    </div>
                </div>
            @endforeach

            {{ $datas->links() }}
            @endif
        </div>
    </div>
@endsection
@section('filter')
<script>
    $(document).ready(function() {
        $('#category').change(function() {
            // Menggunakan jQuery untuk mengirimkan formulir saat perubahan pada dropdown
            if ($(this).val() === '') {
                // Jika "All Categories" dipilih, hapus parameter kategori dari URL
                var url = new URL(window.location.href);
                url.searchParams.delete('category');
                window.location.href = url.toString();
            } else {
                // Jika kategori lain dipilih, kirim formulir
                $('#filterForm').submit();
            }
        });
    });
</script>
@endsection
