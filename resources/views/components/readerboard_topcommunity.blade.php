<li class="center-li">
    <a id="linktitle" href="{{route('subreddit.show',['id' => $content -> subreddit_id]) }}">
        <div class="readerboard-content">
        <span id="number">{{$index + 1}}</span>
        <img id="icon" src="img/g2-logo.jpg">
        <span id="title">{{$content -> subreddit_name}}</span>
        </div>
    </a>
</li>