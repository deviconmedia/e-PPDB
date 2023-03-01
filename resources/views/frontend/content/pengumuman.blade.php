{{-- Change on frontend branch --}}
@extends('layouts.frontend.master')

<style>
    #pengumuman{
        margin-top: 8em;
    }
</style>

@section('title')
    Pengumuman
@endsection

@section('studi')
   <div class="container d-block justify-content-center" id="pengumuman">
        <div class="row">
            @if ($informasi->isEmpty())
                <div class="container d-flex justify-content-center">
                    <img src="{{ asset('frontend/img/empty.svg') }}" alt="404">
                </div>
            @else
                @foreach ($informasi as $info)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('uploads/'. $info->gambar) }}" class="card-img-top" alt="Informasi">
                        <div class="card-body">
                        <h5 class="card-title text-center">{{ $info->judul }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ $info->slug }}" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>        
   </div>
@endsection

