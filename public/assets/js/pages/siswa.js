 $(document).ready(function () {
        $('#table-1').dataTable({
            "dom": "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>t<'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>>"
        });

        $("#table-1_filter").prepend(
            '<a href="/petugas/siswa/create" class="btn btn-primary rounded-pill mr-3">Tambah Siswa <i class="far fa-plus-square"></i></a>'
        )

        $('.hapus').on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apa anda yakin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log('berhasil');
                    $(this).closest('form').submit();
                }
            })
        })
    });