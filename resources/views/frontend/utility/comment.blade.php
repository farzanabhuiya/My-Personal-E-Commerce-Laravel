
@if (count($reply ->replies) >0)
								
							
@foreach ($reply ->replies as $reply )

<div class="media mt-3 right">
 <a class="pr-3" href="#">
   <img  style="width: 50px;height:40px object-fit:cover;obect-position:center;" src="{{ $reply->user->profile_img ? asset ('storage/users/' . $reply->user->profile_img) : env('AVATAR_API').$reply->user->name }}" alt="User Image" />
 </a>
 <div class="media-body">
     <h6 class="mt-0">{{$reply->user->name}}</h6>
     <p>{{$reply->comment}}</p>
     <div class="mt-2">
       <a href="#comment-form" data-parent-id="{{$reply->id}}" data-name="{{$reply->user->name}}" class="btn btn-sm btn-outline-primary replyBtn " data-toggle="collapse" data-target="#reply1" aria-expanded="false" aria-controls="reply1">Reply</a>
   </div>
 </div>
</div>

  @include('frontend.utility.comment')
@endforeach
@endif