@php
$child_posts = App\Models\Post::where('parent_id',$post->id)->get();
@endphp

<div class="comment-header">
    @if ($post->user->attachment != Null)
    <img src="{{asset($post->user->attachment)}}" class="comment-user-icon">
    @else
    <img src="{{asset('img/sub-header-icon.jpg')}}" class="comment-user-icon">
    @endif
    <div class="comment-header-status">
        {{-- <span class="comment-user">{{ $item->user->name }}</span> --}}
        <a href="/user/show/{{$post->user_id}}" class="comment-user">{{ $post->user->name }}</a>
        <span class="comment-time">2 hours ago</span>
    </div>
</div>
<div class="comment-body">
    <span class="comment-body-text">{!! $post->body !!}</span>
    <div class="com-icoon">
        <div class="rep-rank-classic">
            <span class="eva_like" id="evalike_{{$post->id}}">↑</span>
            <span>{{$post->evaluation}}</span>
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