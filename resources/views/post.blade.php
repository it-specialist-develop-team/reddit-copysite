@extends('layouts.base')
@php
$title="view";
@endphp

@section('header-links')
<link rel="stylesheet" href="{{asset('css/view.css')}}">
@endsection

@section('content')
<div class=" page-content">
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
              @include('components.post_head', ["title" => $post->title, "body" => $post->body, "name" => $post->user->name])
              @include('components.post_addcomment')
              <div class="comment-field">
                <div class="comment">
                  @component('components.comment')
                  @endcomponent
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
    <!-- //POSTBAR -->
  </div>
</div>
<!-- //SUB HEADER -->
</div>
@endsection