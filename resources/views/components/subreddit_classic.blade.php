@foreach ($posts as $p)
<div class="mdl-card mdl-shadow--2dp maincard postcard-classic">

  <div class="block-post-classic">
    <div class="post-rank-classic">
      <p>↑</p>
      <p>{{$p->evaluation}}</p>
      <p>↓</p>
    </div>
    <div class="post-content">

      <a class="linktitle" href="/post/{{$p->id}}">
      <img src={{asset('img/php_logo.png')}} heigh="100" width="150">

      <div class="post-content-flex">

        <header>
        <div class="post-header">
          <p>{{$p->id}}</p>
          <p class="post-title">{{$p->title}}</p>
          <p class="subreddit">r/subreddit</p>
          <p class="post-user">u/user</p>
        </div>
        </header>
      </div>
      </a><!-- .linktitle -->
      
    </div><!--.post-content-->
  </div><!--block-post-classic-->
</div><!--mdl-card mdl-shadow--2dp maincard postcard-classic-->
@endforeach