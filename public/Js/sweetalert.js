

// sweet alert

function showToast(message, icon = 'success') {
    $(window).on('toast', function (event) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });

        Toast.fire({
            icon: icon,
            title: message,

        });
    });


}




// ============== THIS FUNTION  IS RUN EVERY DELETE CONTANT=================//  

function deleteajax(brandId, deleteUrl) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: deleteUrl,
                type: 'DELETE',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                },
                success: function (response) {

                    // ================REMOVE tr WHENE DATA IS DELETED===================//
                    $('#category-row-' + brandId).remove();
                    // ================REMOVE tr WHENE DATA IS DELETED END===================//
                    Swal.fire(
                        'Deleted!',
                        response.success,
                        'success'
                    );
                    //    =====================RESET ID WENE DELETE ANY DATA=====================//
                    $('#categoryTable tbody tr').each(function (index) {
                        $(this).find('.row-number').text(index + 1);
                    });

                    //    =====================RESET ID WENE DELETE ANY DATA EMD=====================//
                    // location.reload();
                },
                error: function (xhr) {
                    Swal.fire(
                        'Error!',
                        'There was a problem deleting the brand.',
                        'error'
                    );
                }
            });
        }
    });
}