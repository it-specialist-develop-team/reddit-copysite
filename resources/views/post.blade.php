@extends('layouts.base')
@php
$title="view";
@endphp

@section('header-links')
<link rel="stylesheet" href="css/view.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  .eva_like_set {
    color: green;
  }

  .eva_dislike_set {
    color: red;
  }
</style>
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
              @include('components.post_head')
              @include('components.post_addcomment')
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

<script>
  let eva_val = document.getElementsByClassName("eva_val")[0];
  let eva_like = document.getElementsByClassName("eva_like")[0];
  let eva_dislike = document.getElementsByClassName("eva_dislike")[0];
  let eva_id;
  let post_id = 2;
  let user_id = 1;
  $(function(){
    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    url: '/eva_show',
    type: 'POST',
    data:{
      "post_id":post_id,
      "user_id":user_id,
      "evaluation":1
    }
    })
    .done(function(data1) {
      console.log(data1.ret);
      // eva_id = data1.id;
      eva_val.textContent = data1.val;
      // eva_like.setAttribute("class", "eva_like_set");
    })
    .fail(function(data) {
      console.log("error")
    });
    eva_like.addEventListener("click",e=>{
      if(e.target.className == "eva_like"){//like
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/evaluation',
        type: 'POST',
        data:{
          "post_id":post_id,
          "user_id":user_id,
          "evaluation":1
        }
        })
        .done(function(data1) {
          console.log(data1.ret);
          // eva_id = data1.id;
          eva_val.textContent = data1.val;
          // eva_like.setAttribute("class", "eva_like_set");
        })
        .fail(function(data) {
          console.log("error")
        });
      }
    });


    eva_dislike.addEventListener("click",e=>{
      if(e.target.className == "eva_dislike"){//dislike
        $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/evaluation',
        type: 'POST',
        data:{
          "post_id":post_id,
          "user_id":user_id,
          "evaluation":-1
        }
        })
        .done(function(data1) {
          console.log(data1.ret);
          // eva_id = data1.id;
          eva_val.textContent = data1.val;
          // eva_dislike.setAttribute("class", "eva_dislike_set");
        })
        .fail(function(data) {
          console.log("error")
        });
      }
    });
  });
</script>

</div>

</div>





<!-- //SUB HEADER -->





</div>
@endsection