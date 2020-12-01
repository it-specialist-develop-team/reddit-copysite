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
    let eva_like = document.getElementsByClassName("eva_like");
    let eva_dislike = document.getElementsByClassName("eva_dislike");
    let user_id = 1;
    for (let i = 0; i < eva_like.length; i++) {
        let val = eva_like[i].parentElement.children[1];
        let like = eva_like[i].parentElement.children[0];
        let dislike = eva_like[i].parentElement.children[2];

        let post_id = Number(eva_like[i].id.split('_')[1]);

        like.addEventListener("click", e => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/evaluation',
            type: 'POST',
            data: {
                "post_id": post_id,
                "user_id": user_id,
                "evaluation": 1
            }
            })
            .done(function (data1) {
            val.textContent = data1.val;
            if (data1.ret == 0) {
                like.style.color = "black";
            } else if (data1.ret == 1) {
                like.style.color = "green";
                dislike.style.color = "black";
            }
            })
            .fail(function (data) {
            console.log("error")
            });
        });
        dislike.addEventListener("click", e => {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/evaluation',
            type: 'POST',
            data: {
                "post_id": post_id,
                "user_id": user_id,
                "evaluation": -1
            }
            })
            .done(function (data1) {
            val.textContent = data1.val;
            if (data1.ret == 0) {
                dislike.style.color = "black";
            } else if (data1.ret == -1) {
                like.style.color = "black";
                dislike.style.color = "red";
            }
            })
            .fail(function (data) {
            console.log("error")
            });
        });
    }
</script>
@endsection