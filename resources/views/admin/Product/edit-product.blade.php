@extends('admin.dashbord_layout.dashbord_layout')
@section('content')
<div>

   

@livewire('product.edit-product-component',['productId'=>$productId])



</div>
@endsection



@push('customJs')






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







@if (session('messaeg'))
<script>
    showToast2('hello')

</script>
@endif
@endpush
