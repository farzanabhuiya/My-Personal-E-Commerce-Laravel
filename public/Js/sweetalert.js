

// sweet alert

// function showToast(message, icon = 'success') {
   
//         $(window).on('toast', function (event) {
//         const Toast = Swal.mixin({
//             toast: true,
//             position: 'top-end',
//             showConfirmButton: false,
//             timer: 3000,
//             timerProgressBar: true,
//             didOpen: (toast) => {
//                 toast.onmouseenter = Swal.stopTimer;
//                 toast.onmouseleave = Swal.resumeTimer;
//             }
//         });

//         Toast.fire({
//             icon: icon,
//             title: message,

//         });
//     });


// }


function showToast(message, icon = 'success') {
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
}


// ============== THIS FUNTION  IS RUN EVERY DELETE CONTANT=================//  

function deleteajax(Id, deleteUrl) {
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
                    $('#category-row-' + Id).remove();
                    // ================REMOVE tr WHENE DATA IS DELETED END===================//
                    Swal.fire(
                        'Deleted!',
                        response.success,
                        'success'
                    );
                    //    =====================RESET ID WENE DELETE ANY DATA=====================//
// ==================== ITS WORK FOR DASHBORD ITEM DELETE====================//
                    let tableId = find("#categoryTable");
                   
                    if (tableId == false) {
                        $('#categoryTable tbody tr').each(function (index) {
                            $(this).find('.row-number').text(index + 1);
                        });


                    } 
                    
   //=================ITS WORK FOR SHOPPING CART ITEM DELETE======================//                 
                    if(response.status=='delete') {


                        $('#item-total' + Id).text((parseFloat(response.itemTotal)).toFixed(2));

                        $('#cart-subtotal').text((response.newSubtotal));
                        $('#cart-total-price').text((response.newSubtotal));
                        $('#cartCount').text((parseFloat(response.cartCount)).toFixed(2));

                        $('#cart-row-' + Id).remove();

                        
                    }




                    //    =====================RESET ID WENE DELETE ANY DATA EMD=====================//

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

