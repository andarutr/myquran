@extends('layouts.app')

@section('content')
<center class="mt-5 mb-5">
    <img src="/logo.png" class="img-fluid" width="90">
    <h1>Al-Qur'an</h1>
</center>
<div class="row">
    @foreach($quran as $qr)
    <div class="col-lg-3 mt-4">
        <div class="card shadow" style="border-radius: 20px">
            <div class="card-body text-center">
                <h3>{{ $qr->nomor }}</h3>
                <h5>{{ $qr->nama }}</h5>
                <p>{{ $qr->nama_latin }}</p>
                <p>({{ $qr->arti }})</p>
                <a href="/quran/surah/{{ $qr->nomor }}" class="btn btn-success" style="border-radius: 10px"><i class="bi bi-book"> baca</i></a>&nbsp;
                <a href="{{ $qr->audio }}" class="btn btn-primary" style="border-radius: 10px" target="_blank"><i class="bi bi-file-earmark-music"></i> audio</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection