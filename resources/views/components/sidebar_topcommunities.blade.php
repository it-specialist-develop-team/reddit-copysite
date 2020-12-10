<div class="mdl-card mdl-shadow--2dp readercard right card">

    <div class="card-title">
        <h5 class="title">TOP NULL Communities</h5>

    </div>

    <!-- TOP COMMUNITIES// -->
    <ol>
    @php
        $obj_post = new \App\Models\SubredditPostMany();
        $res_post = $obj_post->getCommunitiesByRegComment();
    @endphp
    @foreach ($res_post as $index => $content)
    <li class="right-li">
        <a id="linktitle" href="{{route('subreddit.show',['id' => $content -> subreddit_id]) }}">
            <div class="readerboard-content">
            <span id="number">{{$index + 1}}</span>
            <img id="icon" src="{{asset('img/g2-logo.jpg')}}">
            <span id="title">{{$content -> subreddit_name}}</span>
            </div>
        </a>
    </li>
        @if($index >= 4)
            @break;
        @endif
    @endforeach
    </ol>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
        Button
    </button>

    <!-- //TOP COMMUNITIES -->



</div>