<div class="mdl-card mdl-shadow--2dp readercard right card">

    <div class="card-title">
        <h5 class="title">TOP NULL Communities</h5>

    </div>

    <!-- TOP COMMUNITIES// -->
    <ol>
    @php
        $obj_comment = new \App\Models\PostCommentMany();
        $res_comment = $obj_comment->getPostsByRegComment();
    @endphp
    @foreach ($res_comment as $index => $content)
    <li class="right-li">
        <a id="linktitle" href="{{route('post.show',['post' => $content -> id]) }}">
            <div class="readerboard-content">
            <span id="number">{{$index + 1}}</span>
            <img id="icon" src="img/g2-logo.jpg">
            <span id="title">{{$content -> title}}</span>
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