

// sweet alert

function showToast(message, icon = 'success') {
    $(window).on('toast', function(event) {
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
             title: message ,
             
        });
    });


}


function showdelete(message, icon = 'success') {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then((result) => {
        if (result.isConfirmed) {

            $(this).next('form').submit()
          Swal.fire({
            title: "Deleted!",
            text: message,
            icon: icon
          });
        }
      });

}
