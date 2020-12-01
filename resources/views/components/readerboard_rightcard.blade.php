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
        @include('components.readerboard_rightcardtopcommunity')
    @endforeach
    </ol>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
        Button
    </button>

    <!-- //TOP COMMUNITIES -->



</div>