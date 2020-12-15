@php
$u = Auth::user();
// DB::table('subreddits')->find($id);
$usls = DB::table('user_subreddit_links')->where([
['user_id', $u->id],
])->get();
@endphp
<div class="mdl-cell mdl-cell--8-col ">
    <div class="mdl-card mdl-shadow--2dp card left submit-card">
        <p>名前：{{$u->name}}</p>
        <p>メール：{{$u->email}}</p>
        <p>アイコン：</p>
        <p>登録日：{{$u->created_at}}</p>
        <p>更新日：{{$u->updated_at}}</p>
        <p>登録しているsubreddit一覧</p>
        @foreach ($usls as $usl)
        @php
        $sn = App\Models\Subreddit::find($usl->subreddit_id);
        @endphp
        <a href="subreddit/{{$usl->subreddit_id}}">{{$sn->subreddit_name}}</a>

        @endforeach
    </div>
</div>