<div>
 
    <div class="container ">
        <div class="row align-items-stretch">

            @foreach ($pages as $key=>$page)
            
            <div class="col-lg-3 col-md-4  d-flex"  id="category-row-{{$page->id}}">
                <a href="{{route('Page.detail',[$page->id])}}" class="text-decoration-none">
                    <div class="card text-center bg-info shadow-sm text-white" style="padding: 10px;">
                        <div class="card-body p-2">
                            <div class="d-flex justify-content-center mb-2">
                             
                                <td>
                                    <?php
                                    $pagePhoto = json_decode($page->image, true);
                                    
                                    ?>
                                    <a href="{{ !empty($pagePhoto[0])? asset('storage/PageImage/' . $pagePhoto[0]):"" }}"
                                        target="_blank"> <img
                                            src="{{ !empty($pagePhoto[0])? asset('storage/PageImage/' . $pagePhoto[0]): "" }}"
                                            class="img-thumbnail" width="80" height="100"> </a>
                                </td>

                            </div>
                            <h5 class="card-title mb-1"><a href="{{route('Page.detail',[$page->id])}}">{{$page->name}}</h6> 
                            <p  class="mb-2">{!! Str::length($page->content) > 40 ? substr($page->content,0,40).'....' : $page->content !!}</p> 
                        
                            <td>
                                <a href="{{route('Page.edit',$page->id)}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                      </svg>
                                </a>
                                <a href="#"  data-id="{{ $page->id }}" class="text-danger w-4 h-4 mr-1 delete_page">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                      </svg>
                                </a>
        
                            </td>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach 
  
            

        </div>
    </div>

</div>


@push('customJs')
<script>
    
 
    $(".delete_page").on('click', function() {
    
       
    
    let pageId = $(this).data('id');
    
    var deleteUrl = "{{ route('Page.delete', ':id') }}".replace(':id', pageId);
    deleteajax(pageId, deleteUrl)
 


})
    

    {{-- sweet alert --}}
    showToast('Status updated successfully!')



        </script>
@endpush
