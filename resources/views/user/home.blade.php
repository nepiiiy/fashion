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
        <img src="{{ asset('img/img2.jpeg') }}" alt="Logo Fashion" class="image-fluid rounded" width="1280">
        <div class="row mt-5">
            @foreach ($baju as $data)
                <div class="col-3 mb-5">
                    <div class="card" style="height: 28rem">
                        <figure class="tv-thumb-card-tm">
                            <img src="{{ asset('storage/' . $data->gambar_baju) }}" class="card-img-top" alt="..."
                                style="height: 250px; object-fit: cover;">
                            <div class="tv-card-category-tm" style="background-color:#b4b7ba;">
                                <p data-value="{{ $data->kategori_id }}">
                                    {{ $kategori->where('id', $data->kategori_id)->first()->name_kategori }}
                                </p>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="/lihatbaju/{{ $data->id }}" class="link-card">
                                <h5 class="card-title"><b>{{ Str::limit($data->name_baju, 50) }}</b></h5>
                            </a>
                            <p class="card-text" style="font-size: 12px">{!! Str::limit($data->deskripsi_baju, 150) !!}</p>
                            <a href="/lihatbaju/{{ $data->id }}" class="btn btn-sm btn-outline-dark">BACA</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($celana as $item)
                <div class="col-3 mb-5">
                    <div class="card" style="height: 28rem">
                        <figure class="tv-thumb-card-tm">
                            <img src="{{ asset('storage/' . $item->gambar_celana) }}" class="card-img-top" alt="..."
                                style="height: 250px; object-fit: cover;">
                            <div class="tv-card-category-tm" style="background-color:#b4b7ba;">
                                <p data-value="{{ $item->cate_pant_id }}">
                                    {{ $kat_pant->where('id', $item->cate_pant_id)->first()->name_kategori }}
                                </p>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="/lihatcelana/{{ $item->id }}" class="link-card">
                                <h5 class="card-title"><b>{{ Str::limit($item->name_celana, 50) }}</b></h5>
                            </a>
                            <p class="card-text" style="font-size: 12px">{!! Str::limit($item->deskripsi_celana, 150) !!}</p>
                            <a href="/lihatcelana/{{ $item->id }}" class="btn btn-sm btn-outline-dark">BACA</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($topi as $top)
                <div class="col-3 mb-5">
                    <div class="card" style="height: 28rem">
                        <figure class="tv-thumb-card-tm">
                            <img src="{{ asset('storage/' . $top->gambar_topi) }}" class="card-img-top" alt="..."
                                style="height: 250px; object-fit: cover;">
                            <div class="tv-card-category-tm" style="background-color:#b4b7ba;">
                                <p data-value="{{ $top->kat__topi_id }}">
                                    {{ $kat_topi->where('id', $top->kat__topi_id)->first()->name_kategori }}
                                </p>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="/lihattopi/{{ $top->id }}" class="link-card">
                                <h5 class="card-title"><b>{{ Str::limit($top->name_topi, 50) }}</b></h5>
                            </a>
                            <p class="card-text" style="font-size: 12px">{!! Str::limit($top->deskripsi_topi, 150) !!}</p>
                            <a href="/lihattopii/{{ $top->id }}" class="btn btn-sm btn-outline-dark">BACA</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($tas as $tass)
                <div class="col-3 mb-5">
                    <div class="card" style="height: 28rem">
                        <figure class="tv-thumb-card-tm">
                            <img src="{{ asset('storage/' . $tass->gambar_tas) }}" class="card-img-top" alt="..."
                                style="height: 250px; object-fit: cover;">
                            <div class="tv-card-category-tm" style="background-color:#b4b7ba;">
                                <p data-value="{{ $tass->kat__tas_id }}">
                                    {{ $kat_tas->where('id', $tass->kat__tas_id)->first()->name_kategori }}
                                </p>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="/lihattas/{{ $tass->id }}" class="link-card">
                                <h5 class="card-title"><b>{{ Str::limit($tass->name_tas, 50) }}</b></h5>
                            </a>
                            <p class="card-text" style="font-size: 12px">{!! Str::limit($tass->deskripsi_tas, 150) !!}</p>
                            <a href="/lihattas/{{ $tass->id }}" class="btn btn-sm btn-outline-dark">BACA</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($sepatu as $sepatuu)
                <div class="col-3 mb-5">
                    <div class="card" style="height: 28rem">
                        <figure class="tv-thumb-card-tm">
                            <img src="{{ asset('storage/' . $sepatuu->gambar_sepatu) }}" class="card-img-top" alt="..."
                                style="height: 250px; object-fit: cover;">
                            <div class="tv-card-category-tm" style="background-color:#b4b7ba;">
                                <p data-value="{{ $sepatuu->kat__sepatu_id }}">
                                    {{ $kat_sepatu->where('id', $sepatuu->kat__sepatu_id)->first()->name_kategori }}
                                </p>
                            </div>
                        </figure>
                        <div class="card-body">
                            <a href="/lihatsepatu/{{ $sepatuu->id }}" class="link-card">
                                <h5 class="card-title"><b>{{ Str::limit($sepatuu->name_sepatu, 50) }}</b></h5>
                            </a>
                            <p class="card-text" style="font-size: 12px">{!! Str::limit($sepatuu->deskripsi_sepatu, 150) !!}</p>
                            <a href="/lihatsepatu/{{ $sepatuu->id }}" class="btn btn-sm btn-outline-dark">BACA</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
