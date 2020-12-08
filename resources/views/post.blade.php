@extends('layouts.base')
@php
$title="view";
$posts = App\Models\Post::where('parent_id',$post->id)->get();
@endphp

@section('header-links')
<link rel="stylesheet" href="{{asset('css/evalution.css')}}">
<link rel="stylesheet" href="{{asset('css/view.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/evaluation.js')}}"></script>

@endsection

@section('content')
<div class="page-content">
    <!-- SUB HEADER// -->
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <!-- POSTBAR// -->
        <div class="mdl-tabs__panel is-active" id="A-panel">
            <div class="mdl-grid">
                <!-- MAIN BAR// -->
                <div class="mdl-cell mdl-cell--8-col">
                    <!-- //POSTCARDCLASSIC -->
                    <div class="mdl-card mdl-shadow--2dp maincard postcard-classic">
                        <div class="block-post-classic">
                            @include('components.post_head', ["title" => $post->title, "body" => $post->body, "name" =>
                            $post->user->name, "file_path" => $post->attachment])
                            @include('components.post_addcomment')
                            <div class="comment-field">
                                <div class="comment">
                                    @include('components.comment',["posts" => $posts])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SIDE BAR// -->
            <div class="mdl-cell mdl-cell--4-col">
                @include('components.sidebar_ch')
                <x-sidebar_card />
                <x-sidebar_card />
                <x-sidebar_card />
                @include('components.sidebar_bt')
            </div>
            <!-- //SIDE BAR -->
        </div>
    </div>
</div>
<!-- //POSTBAR -->

<script>

</script>
@endsection