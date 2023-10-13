@extends('layouts.app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Article</h1>

    </div>
    <div class="row mb-3">
        <a href="{{ route('article.create') }}" class="btn btn-success mb-2 w-25">Buat Artikel</a>
    </div>
    <div class="row">
        <table id="tabel-data" class="table table-striped table-bordered " width="100%" cellspacing="0">
            {{-- <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Artikel</th>
                    <th>Tag Artikel</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Judul Artikel</th>
                    <th>Tag Artikel</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            @foreach ($articles as $article)
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->judul_artikel }}</td>
                        <td>{{ $article->tag_artikel }}</td>
                        <td>{{ $article->kategori_artikel }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('article.show', $article->id) }}"
                                    class="btn bg-warning text-white mx-1">Detail</a>
                                <a href="{{ route('article.edit', $article->id) }}"
                                    class="btn bg-secondary text-white mx-1">Update</a>
                                <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-danger text-white hapus-button mx-1"
                                        data-article-id="{{ $article->id }}">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach --}}

            {!! $dataTable->table(['class'=>'table table-striped table-bordered']),true !!}

            <div>
                {!! $dataTable->scripts()!!}
            </div>


        </table>

        @section('scripts')
            <script>
                $(document).ready(function () {
                    $('#tabel-data').DataTable();
                });
            </script>
        @endsection

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const hapusButtons = document.querySelectorAll(".hapus-button");

            hapusButtons.forEach(function (button) {
                button.addEventListener("click", function (event) {
                    event.preventDefault();

                    const articleId = button.getAttribute("data-article-id");

                    Swal.fire({
                        title: "Konfirmasi Hapus",
                        text: "Apakah Anda yakin ingin menghapus ini?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Ya, Hapus",
                        cancelButtonText: "Batal",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Perform the delete action here
                            const deleteForm = document.createElement("form");
                            deleteForm.action = "{{ route('article.destroy', 'article_id') }}".replace('article_id', articleId);
                            deleteForm.method = "POST";
                            deleteForm.style.display = "none";

                            const csrfField = document.createElement("input");
                            csrfField.type = "hidden";
                            csrfField.name = "_token";
                            csrfField.value = "{{ csrf_token() }}";

                            const methodField = document.createElement("input");
                            methodField.type = "hidden";
                            methodField.name = "_method";
                            methodField.value = "DELETE";

                            deleteForm.appendChild(csrfField);
                            deleteForm.appendChild(methodField);

                            document.body.appendChild(deleteForm);

                            deleteForm.submit();
                        }
                    });
                });
            });
        });
    </script>


@endsection
