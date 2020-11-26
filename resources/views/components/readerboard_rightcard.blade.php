<div class="mdl-card mdl-shadow--2dp readercard right card">

    <div class="card-title">
        <h5 class="title">TOP NULL Communities</h5>

    </div>

    <!-- TOP COMMUNITIES// -->
    <ol>
    @foreach ($res as $index => $content)
        @include('components.readerboard_rightcardtopcommunity')
    @endforeach
    </ol>

    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
        Button
    </button>

    <!-- //TOP COMMUNITIES -->



</div>