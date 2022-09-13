$(function () {
    $('.delete').click(function () {
        Swal.fire({
            title: confirmDelete,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tak',
            cancelButtonText: 'Nie'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: deleteUrl + $(this).data("id"),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'DELETE',
                    // data: { id: $(this).data("id")}
                })
                    .done(function (response) {
                        window.location.reload();
                    })
                    .fail(function (response) {
                        alert('ERROR');
                    });
            }
        })
    });
});
