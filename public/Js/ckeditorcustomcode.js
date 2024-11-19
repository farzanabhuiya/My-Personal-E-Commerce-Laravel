
let editor;
document.addEventListener('DOMContentLoaded', function() {
    ClassicEditor
        .create(document.querySelector('#description'))

        .then(function(leditor) { 

            editor = leditor;

            leditor.model.document.on('change:data', () => { 
                this.set('description', leditor.getData())
            });

        })

        .catch(error => {
            console.error(error);
        });
});





document.addEventListener('DOMContentLoaded', function() {
    ClassicEditor
        .create(document.querySelector('#shortdiscreiption'))


        .then(function(leditor) { 
            editor = leditor;

            leditor.model.document.on('change:data', () => {
                this.set('short_description', leditor.getData())
            });

        })

        .catch(error => {
            console.error(error);
        });
});



document.addEventListener('DOMContentLoaded', function() {
    ClassicEditor
        .create(document.querySelector('#shipping_returns'))

        .then(function(leditor) { 

            editor = leditor;

            leditor.model.document.on('change:data', () => {
                this.set('shipping_returns', leditor.getData())
            });

        })



        .catch(error => {
            console.error(error);
        });
});




showToast('Data stored successfully!')
