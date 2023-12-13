@extends('layouts.app')
@section('content')
<div class="container col-8">
    <center>
        <span class="d-flex justify-content-between"><a href="/lifestyle"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
          </svg></a></span>
          <h2><b>{{ $style ->judul_style }}</b></h2>
    </center>
    <div class="row mt-4">
        <div class="col-4 d-flex justify-content-end">
            <img src="{{ asset('storage/' . $style ->image) }}" alt="" width="400">
        </div>
        <div class="col-8">
            <p style="text-align:justify">{!! $style ->isi !!}</p>
        </div>
    </div>
</div>
@endsection
