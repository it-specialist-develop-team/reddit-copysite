@extends('layouts.base')
@php
$title="Create Post";
@endphp

@section('header-links')
<link rel="stylesheet" href="css/reader-board.css">

<!-- Summernote -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link rel="stylesheet" href="css/create.css">

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
      @include('components.create.post_left_bar')

      <!-- //LEFT BAR -->

      <!-- RIGHT BAR// -->
      <div class="mdl-cell mdl-cell--4-col">
        <!-- RIGHT CARD#1 -->
        @include('components.create.top_communities')
        <!-- RIGHT CARD#2 -->
        @include('components.create.top_communities')
        <!-- RIGHT CARD#3 -->
        @include('components.create.top_communities')
      </div>
      <!-- //RIGHT BAR -->

    </div>
    <!-- //POSTBAR -->

  </div>
  <!-- //SUB HEADER -->
</div>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
<script>
  $(function(){
  let post_type = 0;
  let post_select = document.getElementById("post_select");
  let image_video_select = document.getElementById("image_video_select");
  post_select.addEventListener("click",e=>{
    post_type = 0;
  });
  image_video_select.addEventListener("click",e=>{
    post_type = 1;
  });
  $('#post_btn').on("click",function(){
    let $title = $("#title");
    let $body = $("#summernote").summernote("code");
    let $image = $('input[name="image"]');
    
    let fd = new FormData();
    fd.append("image", $image.prop('files')[0]);
    fd.append("body", $body);
    fd.append("post_type", post_type);
    fd.append("title", $title.prop('value'));
    
    // fd.append("id",id);

    $.ajax({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },//Headersを書き忘れるとエラーになる
    url: '/create/create_post',//ご自身のweb.phpのURLに合わせる
    type: 'POST',//リクエストタイプ
    contentType: false,
    processData: false,
    data: fd,
    })
    // Ajaxリクエスト成功時の処理
    .done(function(data) {
    
    })
    // Ajaxリクエスト失敗時の処理
    .fail(function(data) {
    alert('Ajaxリクエスト失敗');
    });
  });
});
</script>
@endsection