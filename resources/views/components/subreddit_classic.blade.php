@foreach($posts as $p)




<div class="mdl-card mdl-shadow--2dp maincard postcard-classic">


  <div class="block-post-classic">
    <div class="post-rank-classic">
      <p>↑</p>
    <p>{{$p->evaluation}}</p>
      <p>↓</p>
    </div>
    <div class="post-content">

    <a class="linktitle" href="view.html">
      <img src="img/php_logo.png" heigh="100" width="150">

      <div class="post-content-flex">

        <header>
        <div class="post-header">
          <p class="post-title">{{$p->title}}</p>
          <p class="subreddit">r/subreddit</p>
          <p class="post-user">u/user</p>
        </div>
        </header>

        <!-- <span class="mdl-chip">
        <span class="mdl-chip__text">Comment</span>
        </span>
        <span class="mdl-chip">
        <span class="mdl-chip__text">Share</span>
        </span>
        <span class="mdl-chip">
        <span class="mdl-chip__text">Save</span>
        </span>
        <span class="mdl-chip">
        <span class="mdl-chip__text">Hide</span>
        </span>
        <span class="mdl-chip">
        <span class="mdl-chip__text">Report</span>
        </span> -->
      </div>
    </a>



  </div>
</div>
</div>

@endforeach