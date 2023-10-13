@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Article</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $articles->judul_artikel }}</h5>
                    <p class="card-text">{!! $articles->isi_artikel !!}</p>
                    <p class="card-text"><strong>Tag Artikel:</strong> {{ $articles->tag_artikel }}</p>
                    <p class="card-text"><strong>Kategori:</strong> {{ $articles->kategori_artikel }}</p>
                    <!-- Jika Anda ingin menampilkan gambar thumbnail -->
                    @if ($articles->thumbnail_artikel)
                        <img src="{{ asset('storage/' . $articles->thumbnail_artikel) }}" class="img-fluid w-50" alt="Thumbnail">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
