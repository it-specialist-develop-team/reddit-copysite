@extends('layouts.base')
@php
$title="Create Post";
@endphp

@section('header-links')
<link rel="stylesheet" href="{{asset('css/reader-board.css')}}">


<!-- Summernote -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="stylesheet" href="{{asset('css/create.css')}}">


@endsection


@section('content')

<div class="page-content">
    <!-- SUBHEADER -->
    <div class="sub-header-readerboard">
        <h5>新規投稿</h5>
        <span>subredditに対して新しい投稿を作成します。</span>
    </div>

    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

        <!-- POSTBAR// -->
        <div class="mdl-grid">

            <!-- LEFT BAR// -->
            @include('components.create_post.post_left_bar')

            <!-- //LEFT BAR -->

            <!-- RIGHT BAR// -->
            <div class="mdl-cell mdl-cell--4-col">
                <!-- RIGHT CARD#1 -->
                @include('components.create_post.top_communities')
                <!-- RIGHT CARD#2 -->
                @include('components.create_post.top_communities')
                <!-- RIGHT CARD#3 -->
                @include('components.create_post.top_communities')
            </div>
            <!-- //RIGHT BAR -->

        </div>
        <!-- //POSTBAR -->

    </div>
    <!-- //SUB HEADER -->
</div>
<script>
</script>
@endsection