@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card border shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Artikel</h5>
                    <p class="card-text">{{ $articleCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border shadow h-100 py-2">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pengguna</h5>
                    <p class="card-text">1</p>
                </div>
            </div>
        </div>
    </div>

@endsection
