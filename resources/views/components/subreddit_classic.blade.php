@foreach($posts as $p)
@php
$ud = App\Models\User::find($p->user_id);
$sd = App\Models\Subreddit::find($p->subreddit_id);
@endphp
<div class="mdl-card mdl-shadow--2dp maincard postcard-classic">

    <div class="block-post-classic">
        <div class="post-rank-classic">
            <p class="eva_like" id="evalike_{{$p->id}}">↑</p>
            <p>{{$p->evaluation}}</p>
            <p class="eva_dislike" id="evadislike_{{$p->id}}">↓</p>
        </div>
        <div class="post-content">
            <a class="linktitle" href="/post/{{$p->id}}">
                <img src={{asset('img/php_logo.png')}} heigh="100" width="150">
                <div class="post-content-flex">
                    <header>
                        <div class="post-header">
                            <p class="post-title">{{$p->title}}</p>
                            <p class="subreddit">{{$sd->subreddit_name}}</p>
                            <p class="post-user">{{$ud->name}}</p>
                        </div>
                    </header>
                </div>
            </a>
        </div>
    </div>
</div>

@endforeach