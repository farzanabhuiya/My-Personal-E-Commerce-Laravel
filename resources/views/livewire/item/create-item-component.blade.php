
<div>
   
    <div>
        <section class="content-header">					
            <div class="container-fluid ">
                <div class="row ">
                   <div class="d-flex justify-content-between">
                    <div class="">
                        <h1>Create Items</h1>
                    </div>
                    <div class="">
                        <a href="{{route('Item.index')}}" class="btn btn-primary">Back</a>
                    </div>
                   </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <form wire:submit="addItem" method="post" enctype="multipart/form-data" >
                <div class="card">
                    <div class="card-body">
                     									
                        <div class="row">



                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" wire:model='name' id="name" class="form-control" placeholder="Name">	
                                    @error('name')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug">Slug</label>
                                    <input wire:model='slug' type="text" id="slug"  class="form-control" placeholder="Slug">	
                                    @error('slug')
                                    <span class="text-danger">{{$message }}</span>
                                   @enderror	
                                </div>
                            </div>	

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Category</label>
                                    <select  wire:model='categorie_id'  id="categorie_id" class="form-control categorySelect">
                                        @forelse ($categories as $categorie )
                                        <option  value="{{$categorie->id }}">{{ $categorie->name }}</option>
                                     
                                        @empty
                                        <option disabled selected>No catrgory found</option>
                                      @endforelse
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">SubCategory</label>
                                    <select  wire:model='subcategorie_id'  id="subcategorie_id" class="form-control subcategorieSelect">
                                       
                                      
                                        <option disabled selected>No catrgory found</option>
                                     
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Brand</label>
                                    <select  wire:model='brand_id'  id="brand_id" class="form-control categorySelect">
                                        @forelse ($brands as $brand )
                                        <option  value="{{$brand->id }}">{{ $brand->name }}</option>
                                     
                                        @empty
                                        <option disabled selected>No catrgory found</option>
                                      @endforelse
                                    </select>
                                </div>
                            </div>


                            
                        <div>    

   <label for="formFile" class="form-label">Default file input example</label>
                    <input wire:model='images' class="form-control" type="file" id="formFile" multiple> 


                            @if ($images)
                            @foreach ($images as $image)
                            <img  class='my-2' src="{{ $image->temporaryUrl() }}" width="100px">

                            @endforeach 
                            @endif

                        
                        @error('image.*') <span class="error">{{ $message }}</span> @enderror
                        </div>
                           
    
                            
                        </div>
                    </div>							
                </div>
                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a href="" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
                </form>
            </div>
            <!-- /.card -->
        </section>

    
    
    
    </div>









 @push('customJs')

<script>
$('.categorySelect').change(getSubcategories)
function getSubcategories(){
    $.ajax({
        url:`{{route('Subcategorie.get')}}`,
        method:'get',
        data:{
            categoryId:$(this).val()
        },
        success:function(res){
            let options=[]

            if(res.length >0){

                res.forEach(subcategorie=>{
                let optionTag=`<option value ='${subcategorie.id}'>${subcategorie.name}</option>`
                options.push(optionTag)
            })
              $('.subcategorieSelect').html(options)

            }else{
                
                let optionTag= `<option disable selected>Subcategories has been no found </option>`
                $('.subcategorieSelect').html(optionTag)
            }
            
        }
    });
};


showToast('Data stored successfully!')


</script>
@endpush
    
</div>


