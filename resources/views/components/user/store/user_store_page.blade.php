@php
$u = Auth::user();
@endphp
<div class="mdl-cell mdl-cell--8-col ">
    <div class="mdl-card mdl-shadow--2dp card left submit-card">
        <form action={{url("/user_store/".$u->id)}} method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-title">
                <h5 class="title">ユーザ情報</h5>
                <div class="mdl-layout-spacer"></div>
                <button type="submit"
                    class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored user_page-btn">
                    決定
                </button>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored user_page-btn"
                    type="reset" onclick=window.location="{{ url('/user_page/'.$u->id) }}">
                    キャンセル
                </button>
            </div>
            <div class="user_page-data-card">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="user_name" value="{{$u->name}}">
                    <label class="mdl-textfield__label" for="sample3">名前...</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="user_mali" value="{{$u->email}}">
                    <label class="mdl-textfield__label" for="sample3">メールアドレス...</label>
                </div>
                <p>アイコン<input type="file" name="image" class="mdl-button mdl-js-button mdl-js-ripple-effect"></p>
            </div>
        </form>
    </div>
</div>