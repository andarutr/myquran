@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-6 col-lg-12 mt-4 text-center">
        <h1>{{ $quran->nama }}</h1>
        <h2>{{ $quran->nama_latin }}</h2>
        <p>({{ $quran->arti }})</p>
    </div>
    <div class="row">
        @foreach($quran->ayat as $ayat)
        <div class="col-sm-6 col-lg-12 mt-4">
            <div class="card shadow" style="border-radius: 20px">
                <span class="badge bg-primary" style="border-radius: 20px">{{ $ayat->nomor }}</span>
                <div class="card-body text-center p-5">
                    <h5>{{ $ayat->ar }}</h5>
                    <p class="mt-3">{!! $ayat->tr !!}</p>
                    <p>({{ $ayat->idn }})</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection