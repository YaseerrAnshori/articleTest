<div class="btn-group">
    <a href="{{ route('article.show', $article->id) }}" class="btn btn-info btn-sm text-white mx-1">Detail</a>
    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning btn-sm text-white mx-1">Update</a>
    <form action="{{ route('article.destroy', $article->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm delete-button mx-1">Hapus</button>
    </form>
</div>

<script>
    $(document).ready(function () {
        $('#tabel-data').DataTable();

        // Tambahkan SweetAlert untuk tombol hapus
        $('.delete-button').on('click', function (e) {
            e.preventDefault();
            const form = $(this).closest('form');

            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Apakah Anda yakin ingin menghapus ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
