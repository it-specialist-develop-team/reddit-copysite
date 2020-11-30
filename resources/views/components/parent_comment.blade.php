@php
$child_posts = App\Models\Post::where('parent_id',$post->id)->get();
@endphp

<div class="comment-header">
  <img src="{{asset('img/g2-logo.jpg')}}" class="comment-user-icon">
  <div class="comment-header-status">
    {{-- <span class="comment-user">{{ $item->user->name }}</span> --}}
    <span class="comment-user">{{ $post->user->name }}</span>
    <span class="comment-time">2 hours ago</span>
  </div>
</div>
<div class="comment-body">
<span class="comment-body-text">{!! $post->body !!}</span>
  <div class="com-icoon">
    <div class="rep-rank-classic">
      <span class="eva_like" id="evalike_{{$post->id}}">↑</span>
      <span>0</span>
      <span class="eva_dislike" id="evadislike_{{$post->id}}">↓</span>
    </div>
    <a class="rep-res" href="#"><span class="material-icons quickreply">quickreply</span>Reply</a>
    <!--<a class="rep-share" href="#">Share</a>
    <a class="rep-repo" href="#">Report</a>
    <a class="rep-save" href="#">Save</a>-->
  </div>
</div>

<div class="comment reply">
  @foreach ($child_posts as $i_post)
  @include('components.parent_comment',['post'=>$i_post])
  @endforeach
</div>