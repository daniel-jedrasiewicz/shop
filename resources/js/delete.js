$(function () {
    $('.delete').click(function () {
        Swal.fire({
            title: 'Czy napewno chcesz usunąć rekord?',
            // text: "You won't be able to revert this!",
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
