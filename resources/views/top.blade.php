@extends('layouts.base')
@php
$title="Subreddit";
// $data = DB::table('subreddits')->find($id);
// $posts = DB::table('posts')->get();
@endphp
@section('header-links')
<link rel="stylesheet" href="{{asset('css/evalution.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/evaluation.js')}}"></script>
@endsection

@section('content')
<div class="page-content">
    <!-- POSTBAR// -->
    <div class="mdl-tabs__panel is-active" id="A-panel">
        <div class="mdl-grid">
            <!-- MAIN BAR// -->
            <div class="mdl-cell mdl-cell--8-col">
                <!-- //POSTCARDCLASSIC -->
                @include('components.subreddit_classic',['posts' => $posts])
                @if ($posts->hasMorePages())
                <p class="button more"><a href="{{ $posts->nextPageUrl() }}">もっと見る</a></p>
                @endif
            </div>
            <!-- MAIN BAR// -->
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
        <!-- //POSTBAR -->
    </div>
</div>
<!-- //SUB HEADER -->
</div>
@endsection