@extends('layouts.base')
@php
$title="view";
$posts = App\Models\Post::where('parent_id',$post->id)->get();
@endphp

@section('header-links')
<link rel="stylesheet" href="{{asset('css/view.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
              @include('components.post_head', ["title" => $post->title, "body" => $post->body, "name" => $post->user->name])
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
  let eva_val = document.getElementsByClassName("eva_val")[0];
  let eva_up = document.getElementsByClassName("eva_up")[0];
  let eva_down = document.getElementsByClassName("eva_down")[0];
  $(function(){
    eva_up.addEventListener("click",e=>{
      if(e.target.className == "eva_up_set"){
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/eva_down',
        type: 'POST',
        contentType: false,
        processData: false,
        })
        .done(function(data1) {
        eva_val.textContent = data1.val;
        eva_up.style.color = "black";
        eva_up.setAttribute("class", "eva_up");
        })
        .fail(function(data) {
          console.log("error")
        });
      }else if(e.target.className == "eva_up"){
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/eva_up',
        type: 'POST',
        contentType: false,
        processData: false,
        })
        .done(function(data1) {
        eva_val.textContent = data1.val;
        eva_up.style.color = "green";
        eva_down.style.color = "black";
        eva_up.setAttribute("class", "eva_up_set");
        eva_down.setAttribute("class", "eva_down");
        })
        .fail(function(data) {
          console.log("error")
        });
      }
    });
    eva_down.addEventListener("click",e=>{
      if(e.target.className == "eva_down_set"){
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/eva_up',
        type: 'POST',
        contentType: false,
        processData: false,
        })
        .done(function(data1) {
        eva_val.textContent = data1.val;
        eva_down.style.color = "black";
        eva_down.setAttribute("class", "eva_down");
        })
        .fail(function(data) {
          console.log("error")
        });
      }else if(e.target.className == "eva_down" && e.target.className == "eva_up_set"){
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/eva_down',
        type: 'POST',
        contentType: false,
        processData: false,
        })
        .done(function(data1) {
        eva_val.textContent = data1.val;
        eva_down.style.color = "red";
        eva_up.style.color = "black";
        eva_down.setAttribute("class", "eva_down_set");
        eva_up.setAttribute("class", "eva_up");
        })
        .fail(function(data) {
          console.log("error")
        });
      }else if(e.target.className == "eva_down"){
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/eva_down',
        type: 'POST',
        contentType: false,
        processData: false,
        })
        .done(function(data1) {
        eva_val.textContent = data1.val;
        eva_down.style.color = "red";
        eva_down.setAttribute("class", "eva_down_set");
        })
        .fail(function(data) {
          console.log("error")
        });
      }
    });
  });
</script>
@endsection