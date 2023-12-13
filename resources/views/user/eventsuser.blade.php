@extends('layouts.app')
@section('content')
    <div class="container">
                <form action="events/searchevents" method="GET" class="d-flex justify-content-end" role="search">
                    <div class="row mb-3">
                        <div class="col-10">
                            <input type="text" class="form-control form-control-sm" value=""
                                placeholder="Ketik Disini" name="searchevent" id="searchevent">
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
        <div class="row mt-4">
            @foreach ($datas as $data)
                <div class="col-3">
                    <div class="card" style="height: 32rem">
                            <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="..."
                                style="height: 250px; object-fit: cover;">
                        <div class="card-body">
                            <a href="/lihatevents/{{ $data->id }}" class="link-card">
                                <h5 class="card-title"><b>{{ Str::limit($data->judul_event, 50) }}</b></h5>
                            </a>
                            <p class="card-text" style="font-size: 12px">{!! Str::limit($data->isi, 130) !!}</p>
                            <a href="/lihatevents/{{ $data->id }}" class="btn btn-sm btn-outline-dark">BACA</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $datas->links() }}
    </div>
@endsection
