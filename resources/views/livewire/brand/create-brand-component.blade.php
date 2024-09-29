<div>

    <div>
        <section class="content-header">					
            <div class="container-fluid ">
                <div class="row ">
                   <div class="d-flex justify-content-between">
                    <div class="">
                        <h1>Create Brand</h1>
                    </div>
                    <div class="">
                        <a href="{{route('Brand.index')}}" class="btn btn-primary">Back</a>
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
                <form wire:submit="addBrand" method="post"  enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">
                     									
                        <div class="row">


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

                                            @error('categorie_id')
                                <span class="text-danger">{{$message }}</span>
                               @enderror
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">SubCategory</label>
                                    <select  wire:model='subcategorie_id'  id="subcategorie_id" class="form-control subcategorieSelect">
                                       
                                      
                                        <option disabled selected>No catrgory found</option>
                                     
                                    </select>


                                            @error('subcategorie_id')
                                <span class="text-danger">{{$message }}</span>
                               @enderror
                                </div>
                            </div>
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
                                    <label for="status">Status</label>
                                    <select wire:model='status' id='status' class="form-control">
                                        <option  value="1">Active</option>
                                        <option value="0">Block</option>
                                    </select>
                                   
                                </div>
                                @error('status')
                                <span class="text-danger">{{$message }}</span>
                               @enderror
                            </div>


                            
                        <div>           
                           

                           <label for="formFile" class="form-label">Barnd Image</label>
                            <input  wire:model="image" class="form-control" type="file" id="formFile">  


                                            @if ($image) 
                        <img src="{{ $image->temporaryUrl() }}" width="200px" class="mt-2">
                    @endif   
                                        @error('image') <span class="error text-danger">{{ $message }}</span> @enderror


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
            let options=[ ]

            if(res.length >0){

                res.forEach(subcategorie=>{
                let optionTag=`<option value ='${subcategorie.id}'>${subcategorie.name}</option>`
                options.push(optionTag)
            })


            
              $('.subcategorieSelect').html(options)
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


