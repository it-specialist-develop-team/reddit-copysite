@extends('layouts.base')
@php
$title="view";
$posts = App\Models\Post::where('parent_id',$post->id)->get();
@endphp

@section('header-links')
<link rel="stylesheet" href="{{asset('css/view.css')}}">
<!-- Summernote -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> -->
<link rel="stylesheet" href="css/create.css">
<style>
  .postcard-classic .block-post-classic .post-rank-classic p.eva_dislike_set {
    color: green;
  }

  .postcard-classic .block-post-classic .post-rank-classic p.eva_dislike_set {
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
              @include('components.post_head', ["title" => $post->title, "body" => $post->body, "name" =>
              $post->user->name])
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
  let eva_like = document.getElementsByClassName("eva_like")[0];
  let eva_dislike = document.getElementsByClassName("eva_dislike")[0];
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
    }
    })
    .done(function(data1) {
      eva_val.textContent = data1.val;
    })
    .fail(function(data) {
      console.log("error")
    });
    eva_like.addEventListener("click",e=>{
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
          eva_val.textContent = data1.val;
          console.log(data1.ret);
          if(data1.ret == 0){
            eva_like.setAttribute("class","eva_like");
          }else if(data1.ret == 1){
            eva_like.setAttribute("class","eva_like_set");
            eva_dislike.setAttribute("class","eva_dislike");
          }
        })
        .fail(function(data) {
          console.log("error")
        });
    });


    eva_dislike.addEventListener("click",e=>{
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
          eva_val.textContent = data1.val;
          if(data1.ret == 0){
            eva_dislike.setAttribute("class","eva_dislike");
          }else if(data1.ret == -1){
            eva_dislike.setAttribute("class","eva_dislike_set");
            eva_like.setAttribute("class","eva_like");
          }
        })
        .fail(function(data) {
          console.log("error")
        });
    });
  });
   $('#comment_btn').on("click",function(){
    let $body = $("#body");
    // let $body = $("#summernote").summernote("code");
    // let $image = $('input[name="image"]');
    
    let fd = new FormData();
    // fd.append("image", $image.prop('files')[0]);
    // fd.append("body", $body);
    // fd.append("post_type", post_type);
    fd.append("body", $body.prop('value'));
    fd.append("parent_id", {{$post->id}});
    
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
    console.log("error")
     });
   });
</script>
@endsection