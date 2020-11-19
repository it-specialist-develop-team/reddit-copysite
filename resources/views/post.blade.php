@extends('layouts.base')
@php
$title="view";
@endphp

@section('header-links')
<link rel="stylesheet" href="css/view.css">
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
  $(function(){
    let eva_val = document.getElementsByClassName("eva_val")[0];
    let eva_up = document.getElementsByClassName("eva_up")[0];
    let eva_down = document.getElementsByClassName("eva_down")[0];
    eva_up.addEventListener("click",e=>{
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
      })
      .fail(function(data) {
        console.log("error")
      });
    });
    eva_down.addEventListener("click",e=>{
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
      })
      .fail(function(data) {
        console.log("error")
      });
    });
  });
</script>






</div>

</div>





<!-- //SUB HEADER -->





</div>
@endsection