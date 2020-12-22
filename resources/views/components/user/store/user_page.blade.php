@php
$u = Auth::user();
// DB::table('subreddits')->find($id);
$usls = App\Models\User_subreddit_link::where([
['user_id', $u->id],
])->get();
@endphp
<div class="mdl-cell mdl-cell--8-col ">
    <div class="mdl-card mdl-shadow--2dp card left submit-card">
        <div class="card-title">
            <h5 class="title">ユーザ情報</h5>
            <div class="mdl-layout-spacer"></div>

            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored user_page-btn"
                onclick=window.location="{{ url('/user_store_page/'.$id) }}">
                変更する
            </button>
        </div>
        <div class="user_page-data-card">
            <p>名前：{{$u->name}}</p>
            <p>メール：{{$u->email}}</p>
            <p>アイコン</p>
            @if ($u->attachment != Null)
            <img class="user_page-img" src="{{asset($u->attachment)}}">
            @else
            <img src="{{asset('img/sub-header-icon.jpg')}}" id="sub-header-icon">
            @endif
            <p>登録日：{{$u->created_at}}</p>
            <p>更新日：{{$u->updated_at}}</p>
        </div>
        <div class="card-title">
            <h5 class="title">登録しているコミュニティ</h5>
        </div>
        <div class="mdl-card mdl-shadow--2dp readercard user_page-card">
            <ol>
                @if ($usls->count() < 1) <li class="right-li">
                    <div class="readerboard-content">
                        <p>subredditに所属していません</p>
                    </div>
                    </li>
                    @else
                    @foreach ($usls as $usl)
                    @php
                    $sn = App\Models\Subreddit::find($usl->subreddit_id);
                    @endphp
                    <li class="right-li">
                        <a href="{{url('subreddit/'.$usl->subreddit_id)}}">
                            <div class="readerboard-content">
                                <img id="icon" src="{{asset('img/g2-logo.jpg')}}">
                                <span id="title">{{$sn->subreddit_name}}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                    @endif
            </ol>
        </div>
    </div>
</div>