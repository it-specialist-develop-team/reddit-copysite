@extends('layouts.base')
@php
$title="Create Post";
@endphp

@section('header-links')
<link rel="stylesheet" href="{{asset('css/reader-board.css')}}">

<link rel="stylesheet" href="{{asset('css/create.css')}}">


@endsection


@section('content')

<div class="page-content">
    <!-- SUBHEADER -->
    <div class="sub-header-readerboard">
        <h5>User Page</h5>
        <span>ユーザの情報を確認、変更できます。</span>
    </div>

    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">

        <!-- POSTBAR// -->
        <div class="mdl-grid">

            <!-- LEFT BAR// -->
            @include('components.user.store.user_page')

            <!-- //LEFT BAR -->

            <!-- RIGHT BAR// -->
            <div class="mdl-cell mdl-cell--4-col">
                <!-- RIGHT CARD#1 -->
                @include('components.sidebar_topcommunities')
                <!-- RIGHT CARD#2 -->
                @include('components.sidebar_topcommunities')
                <!-- RIGHT CARD#3 -->
                @include('components.sidebar_topcommunities')
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