@extends('admin.dashbord_layout.dashbord_layout')
@section('content')
<div>

   

@livewire('product.create-product-component')



</div>
@endsection


@push('customJs')

{{-- <script>
    $('.categorySelect').change(getSubcategories)

    function getSubcategories() {
        $.ajax({
            url: `{{ route('Subcategorie.get') }}`
            , method: 'get'
            , data: {
                categoryId: $(this).val()
            }
            , success: function(res) {
                let options = []

                if (res.length > 0) {

                    res.forEach(subcategorie => {
                        let optionTag =
                            `<option value ='${subcategorie.id}'>${subcategorie.name}</option>`
                        options.push(optionTag)
                    })
                    $('.subcategorieSelect').html(options)

                } else {

                    let optionTag = `<option value="" disable selected>Subcategories has been no found </option>`
                    $('.subcategorieSelect').html(optionTag)
                }

            }
        });
    };

</script> --}}
















<script>
    $(document).ready(function() {


        $('.related_product').select2({

       
            ajax: {
                url: "{{ route('get.Product.related') }}"
                , dataType: 'json',

                tags: true
                , multiple: true
                , minimumInputLength: 3
                , processResults: function(data) {
                    return {
                        results: data.tags
                    };
                }
            }
        });
    })

</script>





{{-- Image upload --}}



{{-- <script>
    document.getElementById('imagePreview2').addEventListener('click', function() {
        document.getElementById('imageUpload').click();
    });






    document.getElementById('imageUpload').addEventListener('change', function(event) {
        let imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = ''; // পুরানো প্রিভিউ মুছে ফেলার জন্য
        let files = Array.from(event.target.files);
        let deletedIndexes = []; // ডিলিট করা ফাইলগুলোর ইনডেক্স রাখার জন্য

        files.forEach(function(file, index) {
            if (file.type === 'image/jpeg' || file.type === 'image/png') {
                let reader = new FileReader();

                reader.onload = function(e) {
                    // ইমেজ কন্টেইনার তৈরি করা
                    let imgContainer = document.createElement('div');
                    imgContainer.style.display = 'inline-block';
                    imgContainer.style.position = 'relative';
                    imgContainer.style.margin = '10px';

                    let imgElement = document.createElement('img');
                    imgElement.src = e.target.result;
                    imgElement.style.width = '100px';
                    imgElement.style.height = '100px';
                    imgElement.style.objectFit = 'cover';
                     imgElement.classList.add('rounded');


                    // ডিলিট বাটন তৈরি করা
                    let deleteButton = document.createElement('button');
                    deleteButton.innerText = '✖';
                    deleteButton.style.position = 'absolute';
                    deleteButton.style.top = '0';
                    deleteButton.style.right = '0';
                    deleteButton.style.background = 'red';
                    deleteButton.style.color = 'white';
                    deleteButton.style.border = 'none';
                    deleteButton.style.cursor = 'pointer';

                    // ডিলিট বাটনে ক্লিক করলে
                    deleteButton.addEventListener('click', function() {
                        // প্রিভিউ থেকে রিমুভ করা
                        imgContainer.remove();

                        // ডিলিট হওয়া ফাইলের ইনডেক্স যোগ করা
                        deletedIndexes.push(index);

                        // নতুন FileList তৈরি করে ইনপুট ফিল্ডে সেট করা
                        let newFileList = new DataTransfer();
                        files.forEach((f, i) => {
                            // যদি ফাইলটি ডিলিট না করা হয়ে থাকে, তাহলে সেটি নতুন FileList-এ যোগ করা হবে
                            if (!deletedIndexes.includes(i)) {
                                newFileList.items.add(f);
                            }
                        });
                        document.getElementById('imageUpload').files = newFileList.files;
                    });

                    // ইমেজ এবং ডিলিট বাটন কন্টেইনারে যোগ করা
                    imgContainer.appendChild(imgElement);
                    imgContainer.appendChild(deleteButton);
                    imagePreview.appendChild(imgContainer);
                };

                reader.readAsDataURL(file);
            } else {
                alert(file.name + ' is not a valid image format (only .jpg and .png are allowed).');
            }
        });
    });

</script> --}}



@if (session('messaeg'))
<script>
    showToast2('hello')

</script>
@endif
@endpush
