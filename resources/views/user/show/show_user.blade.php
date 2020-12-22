@extends('layouts.base')
@php
$title="Subreddit";
$data = App\Models\User::find($id);
// $posts = App\Models\Post::where('parent_id',$post->id)->get();
@endphp
@section('header-links')
<link rel="stylesheet" href="{{asset('css/evalution.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="{{asset('js/evaluation.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/show_user.css')}}">
@endsection


@section('content')
<div class="page-content">
    <!-- SUB HEADER// -->
    @include('components.user_header',['data' => $data])
    <!-- POSTBAR// -->
    <div class="mdl-tabs__panel is-active" id="A-panel">
        <div class="mdl-grid">
            <!-- MAIN BAR// -->
            <div class="mdl-cell mdl-cell--8-col">
                <!-- //POSTCARDCLASSIC -->
                @include('components.user.show.subreddit_classic',['posts' => $posts])
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