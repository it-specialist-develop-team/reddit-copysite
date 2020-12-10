@extends('layouts.base')
@php
$title="Subreddit";
@endphp
@section('header-links')
<link rel="stylesheet" href="{{asset('css/evalution.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/evaluation.js')}}"></script>
@endsection



@section('content')
<div class="page-content">

    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="create-button"
        onclick="location.href='/create.html'">
        <i class="material-icons">add</i>
    </button>

    <!-- SUB HEADER// -->

    <!-- POSTBAR// -->
    <div class="mdl-tabs__panel is-active" id="A-panel">
        <div class="mdl-grid">
            <!-- MAIN BAR// -->
            <div class="mdl-cell mdl-cell--8-col">
                @php
                $obj_comment = new \App\Models\PostCommentMany();
                $posts = $obj_comment->getOrderManyComment();
                @endphp
                @include('components.subreddit_classic')
            </div>
            <!-- MAIN BAR// -->

            <!-- SIDE BAR// -->
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-card mdl-shadow--2dp card">
                    <div class="card-title">
                        <h5 class="title">TEXT</h5>
                    </div>
                    <div class="right-card-body">
                        <p>//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen,
                            Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and
                            more. /r/AMD is community run and does not represent AMD in any capacity unless specified.
                        </p>
                    </div>

                    <div class="right-card-body digit">
                        <div>
                            <p>100k</p>
                            <p>Members</p>
                        </div>
                        <div>
                            <p>4k</p>
                            <p>Online</p>
                        </div>
                    </div>

                    <div class="right-card-body">
                        <p>Created 2020/12/25</p>
                    </div>
                </div>

                <div class="mdl-card mdl-shadow--2dp card">
                    <div class="card-title">
                        <h5 class="title">TEXT</h5>
                    </div>

                    <div class="right-card-body">
                        <p>
                            right-card-body
                        </p>
                    </div>
                </div>
                <div class="mdl-card mdl-shadow--2dp card">
                    <div class="card-title">
                        <h5 class="title">TEXT</h5>
                    </div>

                    <div class="right-card-body">
                        <p>
                            right-card-body
                        </p>
                    </div>
                </div>
                <div class="mdl-card mdl-shadow--2dp card">
                    <div class="card-title">
                        <h5 class="title">TEXT</h5>
                    </div>

                    <div class="right-card-body">
                        <p>
                            right-card-body
                        </p>
                    </div>
                </div>
                <div class="mdl-card mdl-shadow--2dp card">
                    <div class="card-title">
                        <h5 class="title">TEXT</h5>
                    </div>

                    <div class="right-card-body">
                        <button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Button
                        </button><button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Button
                        </button>
                    </div>

                </div>

            </div>
            <!-- //SIDE BAR -->
        </div>
        <!-- //POSTBAR -->
    </div>
</div>
<!-- //SUB HEADER -->
</div>
@endsection