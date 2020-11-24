<div class="post-rank-classic">
  <p>↑</p>
  <p>000</p>
  <p>↓</p>
</div>
<div class="post-content">

  <div class="post-content-header">
    <div class="post-status">
      <div>
      <span>Posted by </span>
      <span>{{ optional($posts->users)->name }}</span>
      </div>
      <span>{{ $posts->created_at }}</span>
    </div>
    <h4 class="post-title">{{ $posts->title }}</h4>
  </div>

  <div class="post-body">
    <div class="media">
      <img src="img/php_logo.png">
    </div>
    <div class="text">
    <span>{{ $posts->body }}</span>
  </div>
</div>