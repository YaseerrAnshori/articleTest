@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Article</h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-2">
                    <label for="judul_artikel" class="mt-2">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" required>
                </div>

                <div class="form-group mb-2">
                    <label for="isi_artikel" class="mt-2">Isi Artikel</label>
                    <textarea class="form-control"  id="editor" name="isi_artikel" required></textarea>
                </div>



                <div class="form-group mb-2">
                    <label for="thumbnail_artikel" class="mt-2">Fhoto</label>
                    <input type="file" class="form-control" id="thumbnail_artikel" name="thumbnail_artikel" required>
                </div>

                <div class="form-group mb-2">
                    <label for="tag_artikel" class="mt-2">Tag Artikel</label>
                    <input type="text" class="form-control" id="tag_artikel" name="tag_artikel" required>
                </div>

                <div class="form-group mb-2">
                    <label for="kategori_artikel" class="mt-2">Kategori</label>
                    <input type="text" class="form-control" id="kategori_artikel" name="kategori_artikel" required>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Tambah Artikel</button>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>

@endsection
