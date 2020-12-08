<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kubota君のテストページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
    <script src="{{asset('js/test-jscroll.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/main-card copy.css')}}">
</head>

<body>
    <div class="kubota">
        <div class="scroll">
            @include('components.subreddit_classic')
            <a class="next" href="{{$posts->nextPageUrl()}}"></a>
            <p>ページん</p>
            @if ($posts->hasMorePages())
            @else
                <p>ページがありゃあせん</p>
            @endif
        </div>
    </div>
</body>
<style>
/* a{display:none;} */
.block-post-classic{
    height:120px;
    line-height:10px;
    border:solid 1px red;
    margin-bottom:20px;
}
.text-sm{
    display:none;
}
</style>

</html>