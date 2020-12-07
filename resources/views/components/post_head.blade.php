<!-- <div class="post-rank-classic">
  <p class="eva_like">↑</p>
  <p class="eva_val">000</p>
  <p class="eva_dislike">↓</p>
</div>

<div class="post-content">
  <div class="post-content-header">
    <div class="post-status">
      <div>
      <span>Posted by </span>
      <span>{{ optional($post->user)->name }}</span>
      </div>
      <span>{{ $post->created_at }}</span>
    </div>
    <h4 class="post-title">{{ $post->title }}</h4>
  </div>

  <div class="post-body">
    <div class="media">
      <img src="img/php_logo.png">
    </div>
    <div class="text">
    <span>{{ $post->body }}</span>
  </div>
</div> -->


<div class="post-rank-classic">
  <p class="eva_like" id="evalike_{{$post->id}}">↑</p>
  <p>0</p>
  <p class="eva_dislike" id="evadislike_{{$post->id}}">↓</p>
</div>

<div class="post-content">
  <div class="post-content-header">
    <div class="post-status">
      <div>
        <span>Posted by </span>
        <span>{{ $name }}</span>
      </div>
      <span>12 hours ago</span>
    </div>
    <h4 class="post-title"> {{ $title }} </h4>
  </div>

  <div class="post-body">
    <div class="media">
      <img src="{{ asset('img/php_logo.png') }}">
    </div>
    <div class="text">
      <span> {!! $body !!}</span>
    </div>
  </div>