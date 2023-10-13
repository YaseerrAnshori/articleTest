@extends('layouts.app')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('article.update', $articles->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-2">
                    <label for="judul_artikel">Judul Artikel</label>
                    <input type="text" class="form-control" id="judul_artikel" name="judul_artikel" value="{{ $articles->judul_artikel }}">
                </div>

                <div class="form-group mb-2">
                    <label for="isi_artikel">Isi Artikel</label>
                    <textarea class="form-control" id="isi_artikel" name="isi_artikel">{{ $articles->isi_artikel }}</textarea>
                </div>

                <div class="form-group mb-2">
                    <label for="thumbnail_artikel">Thumbnail Artikel (opsional)</label>
                    <input type="file" class="form-control-file" id="thumbnail_artikel" name="thumbnail_artikel">
                    @if ($articles->thumbnail_artikel)
                        <img src="{{ asset('storage/' . $articles->thumbnail_artikel) }}" alt="Thumbnail" class="w-25">
                    @endif
                </div>

                <div class="form-group mb-2">
                    <label for="tag_artikel">Tag Artikel</label>
                    <input type="text" class="form-control" id="tag_artikel" name="tag_artikel" value="{{ $articles->tag_artikel }}">
                </div>

                <div class="form-group mb-2">
                    <label for="kategori_artikel">Kategori Artikel</label>
                    <input type="text" class="form-control" id="kategori_artikel" name="kategori_artikel" value="{{ $articles->kategori_artikel }}">
                </div>

                <button type="button" class="btn btn-primary" id="submit-button">Simpan Perubahan</button>
            </form>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const submitButton = document.getElementById('submit-button');

                    submitButton.addEventListener('click', function() {
                        Swal.fire({
                            title: 'Simpan Perubahan?',
                            text: 'Anda yakin ingin menyimpan perubahan pada artikel ini?',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, Simpan',
                            cancelButtonText: 'Batal'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Submit the form when user confirms
                                const form = submitButton.closest('form');
                                form.submit();
                            }
                        });
                    });
                });
            </script>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'isi_artikel' );
    </script>

@endsection
