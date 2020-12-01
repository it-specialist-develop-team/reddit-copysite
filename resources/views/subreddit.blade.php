@extends('layouts.base')
@php
$title="Subreddit";
$data = DB::table('subreddits')->find($id);
// $posts = DB::table('posts')->get();
@endphp
@section('header-links')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection


@section('content')
<div class="page-content">

    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" id="create-button"
        onclick="location.href='{{$id}}/create'">
        <i class="material-icons">add</i>
    </button>

    <!-- SUB HEADER// -->

    @include('components.subreddit_header',['data' => $data])



    <!-- POSTBAR// -->

    <div class="mdl-tabs__panel is-active" id="A-panel">

        <div class="mdl-grid">
            <!-- MAIN BAR// -->

            <div class="mdl-cell mdl-cell--8-col">


                @include('components.subreddit_notice')


                <!-- //POSTCARDCLASSIC -->

                @include('components.subreddit_classic',['posts' => $posts])
                @if ($posts->hasMorePages())
                <p class="button more"><a href="{{ $posts->nextPageUrl() }}">もっと見る</a></p>
                @endif
                <!-- POSTCARDCLASSIC// -->



            </div>

            <!-- MAIN BAR// -->



            <!-- SIDE BAR// -->
            <div class="mdl-cell mdl-cell--4-col">


                <div class="mdl-card mdl-shadow--2dp card">

                    <div class="card-title">
                        <h5 class="title">TEXT</h5>

                    </div>
                    <div class="right-card-body">

                        <p>//SAMPLE TEXT// Welcome to /r/AMD; the subreddit for all things AMD - come talk about Ryzen,
                            Threadripper, EPYC, Navi, the next-gen consoles, news, rumours, show-off your build and
                            more. /r/AMD is
                            community run and does not represent AMD in any capacity unless specified.</p>
                    </div>

                    <div class="right-card-body digit">


                        <div>
                            <p>100k</p>
                            <p>Members</p>
                        </div>
                        <div>
                            <p>4k</p>
                            <p>Online</p>
                        </div>
                    </div>

                    <div class="right-card-body">

                        <p>Created 2020/12/25</p>

                    </div>
                </div>

                <div class="mdl-card mdl-shadow--2dp card">

                    <div class="card-title">
                        <h5 class="title">TEXT</h5>

                    </div>
                    <div class="right-card-body">

                        <p>
                            right-card-body
                        </p>

                    </div>

                </div>
                <div class="mdl-card mdl-shadow--2dp card">

                    <div class="card-title">
                        <h5 class="title">TEXT</h5>

                    </div>
                    <div class="right-card-body">

                        <p>
                            right-card-body
                        </p>

                    </div>

                </div>
                <div class="mdl-card mdl-shadow--2dp card">

                    <div class="card-title">
                        <h5 class="title">TEXT</h5>

                    </div>
                    <div class="right-card-body">

                        <p>
                            right-card-body
                        </p>

                    </div>

                </div>
                <div class="mdl-card mdl-shadow--2dp card">

                    <div class="card-title">
                        <h5 class="title">TEXT</h5>

                    </div>
                    <div class="right-card-body">

                        <button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Button
                        </button><button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Button
                        </button>
                    </div>
                </div>
            </div>
            <!-- //SIDE BAR -->
        </div>
        <!-- //POSTBAR -->
    </div>
    <div class="mdl-tabs__panel" id="B-panel">
        @include('components.subreddit_tabs')
    </div>
    <div class="mdl-tabs__panel" id="C-panel">
        @include('components.subreddit_tabs')
    </div>
</div>
<!-- //SUB HEADER -->
</div>
<script>
    let eva_like = document.getElementsByClassName("eva_like");
    let eva_dislike = document.getElementsByClassName("eva_dislike");
    let user_id = 1;
    for (let i = 0; i < eva_like.length; i++) {
        let val = eva_like[i].parentElement.children[1];
        let like = eva_like[i].parentElement.children[0];
        let dislike = eva_like[i].parentElement.children[2];
        let post_id = Number(eva_like[i].id.split('_')[1]);

        $.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			url: '/eva_show',
			type: 'POST',
			data: {
                "post_id": post_id,
                "user_id": user_id
			}
		})
		.done(function (data1) {
            let d = Number(data1.val)
            if(d == 1){
                like.style.color = "green";
            }else if(d == -1){
                dislike.style.color = "red";
            }
		})
		.fail(function (data) {
			console.log("error")
		});

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
                like.style.color = "white";
            } else if (data1.ret == 1) {
                like.style.color = "green";
                dislike.style.color = "white";
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
                dislike.style.color = "white";
            } else if (data1.ret == -1) {
                like.style.color = "white";
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